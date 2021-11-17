<?php
use kurstoday\Kurstoday;

function getCurrencyCode($currency){
    switch ($currency) {
        case 'dollar':
            return  Kurstoday::CUR_USD;
        case 'euro':
            return  Kurstoday::CUR_EUR;
        case 'zloty':
            return  Kurstoday::CUR_PLN;
        case 'pound':
            return  Kurstoday::CUR_GBP;
        case 'frank':
            return  Kurstoday::CUR_CHF;
        case 'ruble':
            return  Kurstoday::CUR_RUR;
            
        default:
            return Kurstoday::CUR_USD;
    }
}

function getCurrencySign($currency){
    switch ($currency) {
        case 'Dollar':
            return mb_convert_encoding('&#36;', 'UTF-8', 'HTML-ENTITIES');
        case 'Euro':
            return mb_convert_encoding('&#8364;', 'UTF-8', 'HTML-ENTITIES');
        case 'Pound':
            return mb_convert_encoding('&#163;', 'UTF-8', 'HTML-ENTITIES');
        case 'Zloty':
            return 'zł';
        case 'Frank':
            return mb_convert_encoding('&#8355;', 'UTF-8', 'HTML-ENTITIES');
        case 'Ruble':
            return mb_convert_encoding('&#8381;', 'UTF-8', 'HTML-ENTITIES');
            
        default:
            return mb_convert_encoding('&#36;', 'UTF-8', 'HTML-ENTITIES');
    }
}

?>