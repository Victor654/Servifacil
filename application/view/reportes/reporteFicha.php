<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$base="traza2019";
$conexion= mysqli_connect($servidor,$usuario,$clave,$base) or die ("Error en la conexion");
require('plantillaFicha.php');

  $pdf = new PDF();
  $pdf->AliasNbPages();
  $pdf->AddPage();

$producto=$_GET['producto'];
  $consulta = mysqli_query($conexion, "SELECT Referencia,Producto,Pieza,Fase From ficha_tecnica ft
        INNER JOIN detalle_fase df ON df.Id_Detalle_Fase=ft.Id_Detalle_Fase
        INNER JOIN pieza p ON p.Id_Pieza=df.Id_Pieza
        INNER JOIN fase f ON f.Id_Fase=df.Id_Fase
        INNER JOIN producto pr ON pr.Id_Producto=ft.Id_Producto
        Where ft.Id_Producto= $producto
        ORDER By p.Id_Pieza") or die (mysql_error());

  $pdf->SetFillColor(255, 255, 255);
  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(50,6,'REFERENCIA',1,0,'C',1);
  $pdf->Cell(50,6,'PRODUCTO',1,0,'C',1);
  $pdf->Cell(50,6,'PIEZA',1,0,'C',1);
  $pdf->Cell(40,6,'FASE',1,0,'C',1);
  
  $pdf->SetFont('Arial','',10);
  $pdf->Ln();

while ($row = mysqli_fetch_assoc($consulta)) { 
    $pdf->Cell(50,6,utf8_decode($row['Referencia']),1,0,'C'); 
    $pdf->Cell(50,6,utf8_decode($row['Producto']),1,0,'C'); 
    $pdf->Cell(50,6,utf8_decode($row['Pieza']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['Fase']),1,0,'C');
    $pdf->Ln();
 }
  $pdf->Output();
 ?>