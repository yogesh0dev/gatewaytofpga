<?php
$name=$view['name'];
$year=$view['year'];
$course_name=$view['course_name'];
// echo dirname(__FILE__).'/rests/certificate.pdf';
// exit();
// $name = $_POST['name'];
require_once('includes/fpdf/fpdf.php');
require_once('includes/fpdi/fpdi.php');

$pdf = new FPDI('L', 'pt');

$pdf->SetTopMargin(0);
$pdf->SetLeftMargin(0);
$pdf->SetRightMargin(0);
$pdf->SetAutoPageBreak(0);

// Copy the template from the source file
$pageCount = $pdf->setSourceFile('./certificate/rest/certificate.pdf');
$tplIdx = $pdf->importPage(1);

// Set the diemsion of the new PDF file
$pdf->addPage('L', [792, 528]);
$pdf->useTemplate($tplIdx);

// Set font
$pdf->AddFont('Roboto-Regular');
$pdf->SetFont('Roboto-Regular', '', 24);
// Set color
$pdf->SetTextColor(0, 0, 0);
// Move to 500 points from the top
$pdf->ln(10);
$pdf->SetY(275);
$pdf->SetX(40);
// Centered text
$pdf->Cell(0, 0, ucwords($name), 0, TRUE, 'C');

// Move to 500 points from the top
$pdf->ln(10);
$pdf->SetY(375);
$pdf->SetX(40);
// Centered text
$pdf->Cell(0, 0, ucwords($course_name), 0, TRUE, 'C');



// Move to 500 points from the top

$pdf->SetFont('Roboto-Regular', '', 11);
$pdf->SetTextColor(63, 168, 168);
$pdf->ln(10);
$pdf->SetY(500);
$pdf->SetX(40);
// Centered text
$pdf->Cell(0, 0,'gatewaytofpga.com', 0, TRUE, 'C');



$pdf->SetFont('Roboto-Regular', '', 18);
// Set color
$pdf->SetTextColor(0, 0, 0);
$pdf->SetY(450);
$pdf->SetX(245);
$pdf->Cell(0, 0, date('d M, y'), 0, TRUE, 'L');

$width='100';
$height='100';
$pdf->Image('./certificate/rest/signature.png',520, 375, $width, $height);

$pdf->Output('F', './downloads/certificate/'.$year.'/'.str_replace(" ","-",$year.'-'.ucwords($name)).'.pdf');
