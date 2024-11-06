<?php

//call the FPDF library
require('fpdf186/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side


//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();

$width=$pdf->GetPageWidth(); // Width of Current Page
$height=$pdf->GetPageHeight();
$gap=2; // Gap between line and border , change this value
$pdf->Line(2, 0, 2,100); // Horizontal line at top

$pdf->Output();
?>