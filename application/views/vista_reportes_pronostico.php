<?php

$pdf = new FPDF('P', 'mm', 'Letter');
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
//ANCHO DE LA CELDA/ ALTO DE LA CELDA/ TEXTO/ BORDES 0 O 1 MARCO/ LN NO SE PA QUE/ C CENTRADO
$pdf->Cell(180, 6, 'REPORTES PRONOSTICO', 1, 1, 'C');
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(180, 6, 'CANTIDADES A PRODUCIR POR MES EN UNIDADES FISICAS EXPRESADAS EN METROS', 1, 1, 'C');
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);

$pdf->Cell(50); // Muebe 5 centimetros hacia la derecha
$pdf->Cell(30, 5, "ENERO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_enero . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "FEBRERO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_febrero . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "MARZO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_marzo . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "ABRIL", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_abril . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "MAYO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_mayo . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "JUNIO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_junio . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "JULIO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_abril . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "AGOSTO", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_agosto . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "SEPTIEMBRE", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_septiembre . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "OCTUBRE", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_octubre . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "NOVIEMBRE", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_noviembre . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea

$pdf->Cell(50);
$pdf->Cell(30, 5, "DICIEMBRE", 1, 0, 'C');
$pdf->Cell(50, 5, $factor_diciembre . '  mts', 1, 0, 'C');
$pdf->Ln();   //salto de linea


$pdf->Output();
