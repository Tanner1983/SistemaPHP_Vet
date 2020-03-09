<?php
include('../../conectar.php');
require ('../../plantilla.php');

$query = mysqli_query($link,"SELECT id_serv, nomb_serv, prec_serv FROM pt_tbservicio");


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$pdf->SetFillColor(232,232,232);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(20,6,'ID',1,0,'C',1);
$pdf->Cell(70,6,'Nombre',1,0,'C',1);
$pdf->Cell(30,6,'Precio',1,1,'C',1);

 while($row = mysqli_fetch_assoc($query)){
    $pdf->Cell(20,6,$row['id_serv'],1,0,'C');
    $pdf->Cell(70,6,$row['nomb_serv'],1,0,'C');
    $pdf->Cell(30,6,'$'.$row['prec_serv'],1,1,'C');
}

$pdf->Output();


