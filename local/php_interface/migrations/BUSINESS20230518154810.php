<?php

namespace Sprint\Migration;


class BUSINESS20230518154810 extends Version
{
    protected $description = "";

    protected $moduleVersion = "4.2.4";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Iblock()->saveIblockType(array (
  'ID' => 'CONTENT_RU',
  'SECTIONS' => 'Y',
  'EDIT_FILE_BEFORE' => NULL,
  'EDIT_FILE_AFTER' => NULL,
  'IN_RSS' => 'N',
  'SORT' => '100',
  'LANG' => 
  array (
    'ru' => 
    array (
      'NAME' => 'Каталог',
      'SECTION_NAME' => 'Разделы',
      'ELEMENT_NAME' => 'Элементы',
    ),
    'en' => 
    array (
      'NAME' => 'Catalog',
      'SECTION_NAME' => 'Sections',
      'ELEMENT_NAME' => 'Elements',
    ),
  ),
));
        $iblockId = $helper->Iblock()->saveIblock(array (
  'IBLOCK_TYPE_ID' => 'CONTENT_RU',
  'LID' => 
  array (
    0 => 's1',
  ),
  'CODE' => 'VACANCIES',
  'API_CODE' => NULL,
  'REST_ON' => 'N',
  'NAME' => 'Вакансии',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'LIST_PAGE_URL' => '',
  'DETAIL_PAGE_URL' => '',
  'SECTION_PAGE_URL' => '',
  'CANONICAL_PAGE_URL' => NULL,
  'PICTURE' => NULL,
  'DESCRIPTION' => NULL,
  'DESCRIPTION_TYPE' => 'text',
  'RSS_TTL' => '24',
  'RSS_ACTIVE' => 'Y',
  'RSS_FILE_ACTIVE' => 'N',
  'RSS_FILE_LIMIT' => NULL,
  'RSS_FILE_DAYS' => NULL,
  'RSS_YANDEX_ACTIVE' => 'N',
  'XML_ID' => NULL,
  'INDEX_ELEMENT' => 'N',
  'INDEX_SECTION' => 'N',
  'WORKFLOW' => 'N',
  'BIZPROC' => 'N',
  'SECTION_CHOOSER' => 'L',
  'LIST_MODE' => NULL,
  'RIGHTS_MODE' => 'S',
  'SECTION_PROPERTY' => NULL,
  'PROPERTY_INDEX' => NULL,
  'VERSION' => '2',
  'LAST_CONV_ELEMENT' => '0',
  'SOCNET_GROUP_ID' => NULL,
  'EDIT_FILE_BEFORE' => NULL,
  'EDIT_FILE_AFTER' => NULL,
  'SECTIONS_NAME' => 'Разделы',
  'SECTION_NAME' => 'Раздел',
  'ELEMENTS_NAME' => 'Элементы',
  'ELEMENT_NAME' => 'Элемент',
  'EXTERNAL_ID' => NULL,
  'LANG_DIR' => '/',
  'SERVER_NAME' => NULL,
  'IPROPERTY_TEMPLATES' => 
  array (
  ),
  'ELEMENT_ADD' => 'Добавить элемент',
  'ELEMENT_EDIT' => 'Изменить элемент',
  'ELEMENT_DELETE' => 'Удалить элемент',
  'SECTION_ADD' => 'Добавить раздел',
  'SECTION_EDIT' => 'Изменить раздел',
  'SECTION_DELETE' => 'Удалить раздел',
));
        $helper->Iblock()->saveIblockFields($iblockId, array (
  'IBLOCK_SECTION' => 
  array (
    'NAME' => 'Привязка к разделам',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'KEEP_IBLOCK_SECTION_ID' => 'N',
    ),
  ),
  'ACTIVE' => 
  array (
    'NAME' => 'Активность',
    'IS_REQUIRED' => 'Y',
  ),
  'ACTIVE_FROM' => 
  array (
    'NAME' => 'Начало активности',
    'IS_REQUIRED' => 'N',
  ),
  'ACTIVE_TO' => 
  array (
    'NAME' => 'Окончание активности',
    'IS_REQUIRED' => 'N',
  ),
  'SORT' => 
  array (
    'NAME' => 'Сортировка',
    'IS_REQUIRED' => 'N',
  ),
  'NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
  ),
  'PREVIEW_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
    ),
  ),
  'PREVIEW_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип описания для анонса',
    'IS_REQUIRED' => 'Y',
  ),
  'PREVIEW_TEXT' => 
  array (
    'NAME' => 'Описание для анонса',
    'IS_REQUIRED' => 'N',
  ),
  'DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
    ),
  ),
  'DETAIL_TEXT_TYPE' => 
  array (
    'NAME' => 'Тип детального описания',
    'IS_REQUIRED' => 'Y',
  ),
  'DETAIL_TEXT' => 
  array (
    'NAME' => 'Детальное описание',
    'IS_REQUIRED' => 'N',
  ),
  'XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'Y',
  ),
  'CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
  'TAGS' => 
  array (
    'NAME' => 'Теги',
    'IS_REQUIRED' => 'N',
  ),
  'SECTION_NAME' => 
  array (
    'NAME' => 'Название',
    'IS_REQUIRED' => 'Y',
  ),
  'SECTION_PICTURE' => 
  array (
    'NAME' => 'Картинка для анонса',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
    ),
  ),
  'SECTION_DESCRIPTION_TYPE' => 
  array (
    'NAME' => 'Тип описания',
    'IS_REQUIRED' => 'Y',
  ),
  'SECTION_DESCRIPTION' => 
  array (
    'NAME' => 'Описание',
    'IS_REQUIRED' => 'N',
  ),
  'SECTION_DETAIL_PICTURE' => 
  array (
    'NAME' => 'Детальная картинка',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'METHOD' => 'resample',
      'COMPRESSION' => 95,
    ),
  ),
  'SECTION_XML_ID' => 
  array (
    'NAME' => 'Внешний код',
    'IS_REQUIRED' => 'N',
  ),
  'SECTION_CODE' => 
  array (
    'NAME' => 'Символьный код',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => 
    array (
      'UNIQUE' => 'N',
      'TRANSLITERATION' => 'N',
      'TRANS_LEN' => 100,
      'TRANS_CASE' => 'L',
      'TRANS_SPACE' => '-',
      'TRANS_OTHER' => '-',
      'TRANS_EAT' => 'Y',
      'USE_GOOGLE' => 'N',
    ),
  ),
  'LOG_SECTION_ADD' => 
  array (
    'NAME' => 'LOG_SECTION_ADD',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
  'LOG_SECTION_EDIT' => 
  array (
    'NAME' => 'LOG_SECTION_EDIT',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
  'LOG_SECTION_DELETE' => 
  array (
    'NAME' => 'LOG_SECTION_DELETE',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
  'LOG_ELEMENT_ADD' => 
  array (
    'NAME' => 'LOG_ELEMENT_ADD',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
  'LOG_ELEMENT_EDIT' => 
  array (
    'NAME' => 'LOG_ELEMENT_EDIT',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
  'LOG_ELEMENT_DELETE' => 
  array (
    'NAME' => 'LOG_ELEMENT_DELETE',
    'IS_REQUIRED' => 'N',
    'DEFAULT_VALUE' => false,
  ),
));
    $helper->Iblock()->saveGroupPermissions($iblockId, array (
  'everyone' => 'R',
));
        $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Тип занятости',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'ACTIVITY',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '&nbsp;&nbsp;в выходные дни',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VIHODN',
    ),
    1 => 
    array (
      'VALUE' => '&nbsp;&nbsp;в ночные часы',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'NOCH',
    ),
    2 => 
    array (
      'VALUE' => '&nbsp;&nbsp;на летний период',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'LETO',
    ),
    3 => 
    array (
      'VALUE' => '&nbsp;&nbsp;период',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'PERIOD',
    ),
    4 => 
    array (
      'VALUE' => 'вечерние часы',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VECHER',
    ),
    5 => 
    array (
      'VALUE' => 'Временная занятость',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'VREMYAN',
    ),
    6 => 
    array (
      'VALUE' => 'Дипломная практика',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'DIPLOM_PRAKT',
    ),
    7 => 
    array (
      'VALUE' => 'Полная занятость',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'POLN',
    ),
    8 => 
    array (
      'VALUE' => 'Проектная',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'PRAKTIKA',
    ),
    9 => 
    array (
      'VALUE' => 'Стажировка',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'STAJER',
    ),
    10 => 
    array (
      'VALUE' => 'Частичная занятость',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'CHATTICH',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Сфера деятельности',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'FIELD',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'АХО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '13',
    ),
    1 => 
    array (
      'VALUE' => 'Безопасность',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '16',
    ),
    2 => 
    array (
      'VALUE' => 'Бухгалтерский учет',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '5',
    ),
    3 => 
    array (
      'VALUE' => 'Закупки',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '7',
    ),
    4 => 
    array (
      'VALUE' => 'Инвестиции',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '10',
    ),
    5 => 
    array (
      'VALUE' => 'Информационные технологии',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '11',
    ),
    6 => 
    array (
      'VALUE' => 'Логистика и транспорт',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '8',
    ),
    7 => 
    array (
      'VALUE' => 'Маркетинг',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '3',
    ),
    8 => 
    array (
      'VALUE' => 'Отдел промышленной безопасности, охраны труда и экологии',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '12',
    ),
    9 => 
    array (
      'VALUE' => 'Персонал',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '15',
    ),
    10 => 
    array (
      'VALUE' => 'Продажи',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '2',
    ),
    11 => 
    array (
      'VALUE' => 'Производство',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '1',
    ),
    12 => 
    array (
      'VALUE' => 'Служба по энергообеспечению и инфраструктуре',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '19',
    ),
    13 => 
    array (
      'VALUE' => 'Служба развития производственной системы',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '17',
    ),
    14 => 
    array (
      'VALUE' => 'Технический департамент',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '18',
    ),
    15 => 
    array (
      'VALUE' => 'Техническое развитие',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '9',
    ),
    16 => 
    array (
      'VALUE' => 'Управление персоналом',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '6',
    ),
    17 => 
    array (
      'VALUE' => 'Финансовый анализ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '14',
    ),
    18 => 
    array (
      'VALUE' => 'Экономика и финансы',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => '4',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Комбинат/Офис',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'OFFICE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'СВЕЗА Верхняя Синячиха',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'TOP_SINYACHIHA',
    ),
    1 => 
    array (
      'VALUE' => 'СВЕЗА Кострома',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'KOSTROMA',
    ),
    2 => 
    array (
      'VALUE' => 'СВЕЗА Мантурово',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'MANTUROVO',
    ),
    3 => 
    array (
      'VALUE' => 'СВЕЗА Новатор',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'NOVATOR',
    ),
    4 => 
    array (
      'VALUE' => 'Свеза Ресурс',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'RESURS',
    ),
    5 => 
    array (
      'VALUE' => 'СВЕЗА Тюмень',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'TYUMEN',
    ),
    6 => 
    array (
      'VALUE' => 'СВЕЗА Тюмень (Усть-Ишимский филиал )',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'UST_ISHIM',
    ),
    7 => 
    array (
      'VALUE' => 'СВЕЗА Уральский',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'URAL',
    ),
    8 => 
    array (
      'VALUE' => 'СВЕЗА Усть-Ижора',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'UST_IZHORA',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Электронная почта (e-mail)',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'EMAIL',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Местоположение',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'LOCATION',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Верхняя Синячиха, Свердловская область',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SINYACHIHA',
    ),
    1 => 
    array (
      'VALUE' => 'Гамбург, Германия',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'GAMBURG',
    ),
    2 => 
    array (
      'VALUE' => 'Екатеринбург',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'EBURG',
    ),
    3 => 
    array (
      'VALUE' => 'Кострома',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'KOSTROMA',
    ),
    4 => 
    array (
      'VALUE' => 'Мантурово, Костромская область',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'MANTUROVO',
    ),
    5 => 
    array (
      'VALUE' => 'Москва',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'MOSCOW',
    ),
    6 => 
    array (
      'VALUE' => 'Новатор, Вологодская область',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'NOVATOR',
    ),
    7 => 
    array (
      'VALUE' => 'Санкт-Петербург',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'PITER',
    ),
    8 => 
    array (
      'VALUE' => 'Тюмень',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'TUMEN',
    ),
    9 => 
    array (
      'VALUE' => 'Уральский, Пермский край',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'URALSI',
    ),
    10 => 
    array (
      'VALUE' => 'Усть-Ишим, Омская область',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'OMSK',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Тип вакансии',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'TYPE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Продажи',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SALES',
    ),
    1 => 
    array (
      'VALUE' => 'Рабочие',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'WORKERS',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Заработная плата',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SALARY_TYPE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => '=',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'EQUAL',
    ),
    1 => 
    array (
      'VALUE' => 'ДО',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'BEFORE',
    ),
    2 => 
    array (
      'VALUE' => 'Договорная',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'CONTRACT',
    ),
    3 => 
    array (
      'VALUE' => 'ОТ',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'AFTER',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Заработная плата (значение)',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SALARY_VALUE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Требования к соискателю',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'REQUIRE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
  'COL_COUNT' => '90',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Основные обязанности',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DUTY',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
  'COL_COUNT' => '90',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Условия работы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'CONDITIONS',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '3',
  'COL_COUNT' => '90',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'Y',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'График работы',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'SCHEDULE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'L',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => '',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
  'VALUES' => 
  array (
    0 => 
    array (
      'VALUE' => 'Полный день',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'POLN',
    ),
    1 => 
    array (
      'VALUE' => 'Сменный график',
      'DEF' => 'N',
      'SORT' => '500',
      'XML_ID' => 'SMEN',
    ),
  ),
));
            $helper->Iblock()->saveProperty($iblockId, array (
  'NAME' => 'Дата размещения',
  'ACTIVE' => 'Y',
  'SORT' => '500',
  'CODE' => 'DATE',
  'DEFAULT_VALUE' => NULL,
  'PROPERTY_TYPE' => 'S',
  'ROW_COUNT' => '1',
  'COL_COUNT' => '30',
  'LIST_TYPE' => 'L',
  'MULTIPLE' => 'N',
  'XML_ID' => NULL,
  'FILE_TYPE' => NULL,
  'MULTIPLE_CNT' => NULL,
  'LINK_IBLOCK_ID' => '0',
  'WITH_DESCRIPTION' => NULL,
  'SEARCHABLE' => 'N',
  'FILTRABLE' => 'Y',
  'IS_REQUIRED' => 'N',
  'VERSION' => '2',
  'USER_TYPE' => 'DateTime',
  'USER_TYPE_SETTINGS' => NULL,
  'HINT' => NULL,
));
            $helper->UserOptions()->saveElementForm($iblockId, array (
  'Вакантия|edit1' => 
  array (
    'ACTIVE' => 'Активность',
    'PROPERTY_DATE' => 'Дата размещения',
    'PROPERTY_TYPE' => 'Тип вакансии',
    'NAME' => 'Название вакансии',
    'PROPERTY_ACTIVITY' => 'Тип занятости',
    'PROPERTY_SCHEDULE' => 'График работы',
    'PROPERTY_FIELD' => 'Сфера деятельности',
    'PROPERTY_OFFICE' => 'Комбинат/Офис',
    'PROPERTY_LOCATION' => 'Местоположение',
    'PROPERTY_EMAIL' => 'Электронная почта (e-mail)',
    'PROPERTY_SALARY_TYPE' => 'Заработная плата',
    'PROPERTY_SALARY_VALUE' => 'Заработная плата (значение)',
  ),
  'Описание вакансии|edit2' => 
  array (
    'PROPERTY_REQUIRE' => 'Требования к соискателю',
    'PROPERTY_DUTY' => 'Основные обязанности',
    'PROPERTY_CONDITIONS' => 'Условия работы',
  ),
));
    $helper->UserOptions()->saveElementGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => '',
      ),
      'columns_sizes' => 
      array (
        'expand' => 1,
        'columns' => 
        array (
        ),
      ),
      'sticked_columns' => 
      array (
      ),
      'custom_names' => 
      array (
      ),
    ),
  ),
  'filters' => 
  array (
  ),
  'current_view' => 'default',
));
    $helper->UserOptions()->saveSectionGrid($iblockId, array (
  'views' => 
  array (
    'default' => 
    array (
      'columns' => 
      array (
        0 => '',
      ),
      'columns_sizes' => 
      array (
        'expand' => 1,
        'columns' => 
        array (
        ),
      ),
      'sticked_columns' => 
      array (
      ),
      'custom_names' => 
      array (
      ),
    ),
  ),
  'filters' => 
  array (
  ),
  'current_view' => 'default',
));

    }

    public function down()
    {
        //your code ...
    }
}
