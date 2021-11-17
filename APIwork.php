<?php
require_once __DIR__ . '/vendor/autoload.php';
use kurstoday\Kurstoday;

function getJSON($currencyCode){
    $monthNum = date('m');
    $kurstoday = new Kurstoday;
    return $kurstoday->getChartData('2021-'.($monthNum-1), '2021-'.$monthNum, 1, $currencyCode);
}
