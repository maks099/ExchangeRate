<script>
    function myFunction() {
        // here add
    }
</script>


<form method="POST" >
    
  <select id="cmbMake" name="Make" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
     <option value="0">USD</option>
     <option value="1">EUR</option>
     <option value="2">RUR</option>
     <option value="3">BTC</option>
</select>
<input type="hidden" name="selected_text" id="selected_text" value="" />
<input type="submit" name="search" value="Search"/>
</form>
<?php

if(isset($_POST['search'])){
    ?>
    <button onclick="myFunction()">Show stat</button>
<?php
    $moneyCode = $_POST['Make'];

    $json = file_get_contents('https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5');
    $obj = json_decode($json);
    echo ($obj[$moneyCode]->ccy);
    echo "<br>";
    echo ("Купівля: ".$obj[$moneyCode]->buy);
    echo "<br>";
    echo ("Продаж: ".$obj[$moneyCode]->sale);
    echo "<br>";
    
    echo "<br>Статистика<br>";
    $date = new DateTime();
    $date->modify("-1 days")->format('Y-m-d');
    for($i = 0; $i < 2; $i++){
        echo date_format($date, 'd.m.Y');
        //printRateAdDate($date, $moneyCode);
        $date->modify("-1 days")->format('Y-m-d');
    }
}

function printRateAdDate($date, $moneyCode){
    
    if($moneyCode == 1){
        $moneyCode = 8;
    } else if($moneyCode == 0){
        $moneyCode = 23;
    }
    $json = file_get_contents('https://api.privatbank.ua/p24api/exchange_rates?json&date='.date_format($date, 'd.m.Y'));
    $obj = json_decode($json);
    echo ($obj->exchangeRate[$moneyCode]->currency);
    echo (" Купівля: ".$obj->exchangeRate[$moneyCode]->saleRateNB);
    echo (" Продаж: ".$obj->exchangeRate[$moneyCode]->purchaseRateNB)."<br>";
}

/* що робити? 
    -> лишити швидкість як є і поставити LoadingBar або GIF?
    -> зробити з БД як думалось раніше*/

