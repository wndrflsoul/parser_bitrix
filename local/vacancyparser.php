<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");

class ImportVacancy
{
    private $IBLOCK_ID = 3;
    private $el;
    private $arProps;

    public function __construct()
    {
        global $USER;
        if (!$USER->IsAdmin()) {
            LocalRedirect('/');
        }
        \Bitrix\Main\Loader::includeModule('iblock');
        $this->el = new CIBlockElement;
        $this->arProps = $this->loadProperties();
    }

    public function import($USER)
    {
        $this->clearExistingElements();
        $row = 1;
        if (($handle = fopen("vacancy.csv", "r")) !== false) {
            while (($data = fgetcsv($handle, 1000, ",")) !== false) {
                if ($row == 1) {
                    $row++;
                    continue;
                }
                $row++;

                $PROP = $this->prepareProperties($data);

                $arLoadProductArray = [
                    "MODIFIED_BY" => $USER->GetID(),
                    "IBLOCK_SECTION_ID" => false,
                    "IBLOCK_ID" => $this->IBLOCK_ID,
                    "PROPERTY_VALUES" => $PROP,
                    "NAME" => $data[3],
                    "ACTIVE" => end($data) ? 'Y' : 'N',
                ];

                if ($PRODUCT_ID = $this->el->Add($arLoadProductArray)) {
                    echo "Добавлен элемент с ID : " . $PRODUCT_ID . "<br>";
                } else {
                    echo "Error: " . $this->el->LAST_ERROR . '<br>';
                }
            }
            fclose($handle);
        }
    }

    private function loadProperties()
    {
        $arProps = [];
        $rsElement = CIBlockElement::getList([], ['IBLOCK_ID' => $this->IBLOCK_ID], false, false, ['ID', 'NAME']);
        while ($ob = $rsElement->GetNextElement()) {
            $arFields = $ob->GetFields();
            $key = str_replace(['»', '«', '(', ')'], '', $arFields['NAME']);
            $key = strtolower($key);
            $arKey = explode(' ', $key);
            $key = '';
            foreach ($arKey as $part) {
                if (strlen($part) > 2) {
                    $key .= trim($part) . ' ';
                }
            }
            $key = trim($key);
            $arProps['OFFICE'][$key] = $arFields['ID'];
        }

        $rsProp = CIBlockPropertyEnum::GetList(
            ["SORT" => "ASC", "VALUE" => "ASC"],
            ['IBLOCK_ID' => $this->IBLOCK_ID]
        );
        while ($arProp = $rsProp->Fetch()) {
            $key = trim($arProp['VALUE']);
            $arProps[$arProp['PROPERTY_CODE']][$key] = $arProp['ID'];
        }

        return $arProps;
    }

    private function clearExistingElements()
    {
        $rsElements = CIBlockElement::GetList([], ['IBLOCK_ID' => $this->IBLOCK_ID], false, false, ['ID']);
        while ($element = $rsElements->GetNext()) {
            CIBlockElement::Delete($element['ID']);
        }
    }

    private function prepareProperties($data)
    {
        $PROP = [];
        $PROP['ACTIVITY'] = $data[9];
        $PROP['FIELD'] = $data[11];
        $PROP['OFFICE'] = $data[1];
        $PROP['LOCATION'] = $data[2];
        $PROP['REQUIRE'] = $data[4];
        $PROP['DUTY'] = $data[5];
        $PROP['CONDITIONS'] = $data[6];
        $PROP['EMAIL'] = $data[12];
        $PROP['DATE'] = date('d.m.Y');
        $PROP['TYPE'] = $data[8];
        $PROP['SALARY_TYPE'] = '';
        $PROP['SALARY_VALUE'] = $data[7];
        $PROP['SCHEDULE'] = $data[10];

        foreach ($PROP as $key => &$value) {
            $value = trim($value);
            $value = str_replace('\n', '', $value);
            if (stripos($value, '•') !== false) {
                $value = explode('•', $value);
                array_splice($value, 0, 1);
                foreach ($value as &$str) {
                    $str = trim($str);
                }
            }
        }

        if ($PROP['SALARY_VALUE'] == '-') {
            $PROP['SALARY_VALUE'] = '';
        } elseif ($PROP['SALARY_VALUE'] == 'по договоренности') {
            $PROP['SALARY_VALUE'] = '';
            $PROP['SALARY_TYPE'] = $this->arProps['SALARY_TYPE']['договорная'];
        } else {
            $arSalary = explode(' ', $PROP['SALARY_VALUE']);
            if ($arSalary[0] == 'от' || $arSalary[0] == 'до') {
                $PROP['SALARY_TYPE'] = $this->arProps['SALARY_TYPE'][$arSalary[0]];
                array_splice($arSalary, 0, 1);
                $PROP['SALARY_VALUE'] = implode(' ', $arSalary);
            } else {
                $PROP['SALARY_TYPE'] = $this->arProps['SALARY_TYPE']['='];
            }
        }

        return $PROP;
    }
}

$importVacancy = new ImportVacancy();
$importVacancy->import($USER);

?>