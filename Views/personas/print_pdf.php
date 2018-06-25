<?php

$pdf = new \AppData\Config\libs\fpdf\FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'datos del persona',0,0,'C');
$pdf->ln();
$pdf->ln();
$pdf->SetFillColor(0,220,255);
$pdf->SetTextColor(255,255,255);
$pdf->SetFont('Arial','B',10);
$pdf->SetX(25);
$pdf->Cell(40,10,utf8_decode(''),1,0,'C','true');
$pdf->Cell(40,10,utf8_decode('ap_persona'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('am_persona'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('nombre_per'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('no_cedula'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('direccion'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('ciudad'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('telefono'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('email'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('especialidad'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('ano_titulacion'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('codigo_minsa'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('ano_estudio'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('estado'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('id_congreso'),1,0,'C', 'true');
$pdf->Cell(40,10,utf8_decode('id_medico'),1,0,'C', 'true');
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$pdf->SetFont('Arial','B',8);
while($row=mysqli_fetch_row($datos))
{
    $pdf->ln();
    $pdf->SetX(25);
    $pdf->Cell(40,10,utf8_decode($row[1]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[2]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[3]),1,0,'C');
    $pdf->Cell(40,10,utf8_decode($row[4]),1,0,'C');
}
$pdf->Output();

