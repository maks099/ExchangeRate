
<?php
include '../fpdf/fpdf.php';
include '../MyCurrency.php';

session_start();

$c = $_SESSION['currency'];
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',24);
$pdf->Cell(200,10,$c->name,50,0,'C');
$pdf->SetFont('Arial','B',14);
$pdf->Ln(10);
$pdf->Cell(0,20,'Date: '.date("Y/m/d"), 'C');
$pdf->Ln(10);
$pdf->Cell(0,20,'Buying: '.$c->buying, 'C');
$pdf->Ln(5);
$pdf->Cell(0,30,'Selling: '.$c->selling, 'c');
$pdf->Ln(10);
$pdf->Image("../imagefile.png",5,60,200, 100);

$filename="test.pdf";
$pdf->Output('D', $filename, true);?>