<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$base="traza2019";
$conexion= mysqli_connect($servidor,$usuario,$clave,$base) or die ("Error en la conexion");
require('plantillaProducto.php');

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage('L');

  $consulta = mysqli_query($conexion, "SELECT P.Referencia,P.Id_Producto,P.Producto,P.Descripcion,tp.Tipo_Producto from producto p
        INNER JOIN Tipo_Producto tp ON p.Id_Tipo_Producto=tp.Id_Tipo_Producto") or die (mysql_error());
  
  $pdf->SetFillColor(255, 255, 255);
  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(20,6,'CODIGO',1,0,'C',1);
  $pdf->Cell(40,6,'REFERENCIA',1,0,'C',1);
  $pdf->Cell(70,6,'PRODUCTO',1,0,'C',1);
  $pdf->Cell(125,6,'DESCRIPCION',1,0,'C',1);
  $pdf->Cell(20,6,'TIPO',1,0,'C',1);

  
  $pdf->SetFont('Arial','',10);
  $pdf->Ln();

while ($row = mysqli_fetch_assoc($consulta)) {  
    $pdf->Cell(20,6,utf8_decode($row['Id_Producto']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['Referencia']),1,0,'C');
    $pdf->Cell(70,6,utf8_decode($row['Producto']),1,0,'C');
    $pdf->Cell(125,6,utf8_decode($row['Descripcion']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Tipo_Producto']),1,1,'C');
 }
  $pdf->Output();


 
 ?>