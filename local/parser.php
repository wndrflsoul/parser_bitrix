<?php

require_once('vacancyparser.php');

$csvFile = 'vacancy.csv'; // Путь к CSV-файлу с вакансиями

$importer = new VacancyImporter();
$importer->importVacancies($csvFile);
?>