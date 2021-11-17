<?php
session_start();
include 'functions.php';
include 'APIwork.php';
include 'pageparts/middle.php';
include 'pageparts/chart.php';
include 'pageparts/saveButton.php';
include 'MyCurrency.php';
include ('pageparts/header.php');

$currencyCode = getCurrencyCode($_GET['p']);
$chart = getJSON($currencyCode);
$count =  count($chart)-1;

$c = new MyCurency($chart[$count]['buying'], $chart[$count]['selling'], ucfirst($_GET['p']));
$_SESSION['currency'] = $c;
getMiddlePart($c);?>

<div style="width: 70%; height:300px; float:left; margin-left:200px;">
    <?php $image = getChart($chart); ?>
</div>
<div style="width: 30%; height:300px; float:right; margin-top:-200px;">
    <?php getSaveButton($image); ?>
</div>

<?php include ('pageparts/footer.php');?>




