<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$base="traza2019";
$conexion= mysqli_connect($servidor,$usuario,$clave,$base) or die ("Error en la conexion");
require('plantillaOp.php');

  $pdf = new PDF();
  $pdf->SetMargins(2, 25 , 2); 
  $pdf->AliasNbPages();
  $pdf->AddPage('L');

$op=$_GET['op'];
  $consulta = mysqli_query($conexion, "SELECT dp.Id_Orden_Produccion, c.Nombre, p.Producto, dp.observaciones, dp.Cantidad, op.Fecha_Pedido, eo.Estado FROM detalle_op dp 
            INNER JOIN cliente c ON (c.Id_Cliente= dp.Id_Cliente)
            INNER JOIN producto p ON (p.Id_Producto= dp.Id_Producto)
            INNER JOIN orden_produccion op on (op.Id_Orden_Produccion= dp.Id_Orden_Produccion)
            INNER JOIN estado_op eo on eo.Id_Estado_Op=op.Id_Estado_Op
            where dp.Id_Orden_Produccion= $op") or die (mysql_error());

  $pdf->SetFillColor(255, 255, 255);
  $pdf->SetFont('Arial','B',10);
  $pdf->Cell(15,6,'OP',1,0,'C',1);
  $pdf->Cell(87,6,'CLIENTE',1,0,'C',1);
  $pdf->Cell(50,6,'PRODUCTO',1,0,'C',1);
  $pdf->Cell(80,6,'OBSERVACIONES',1,0,'C',1);
  $pdf->Cell(20,6,'CANTIDAD',1,0,'C',1);
  $pdf->Cell(20,6,'FECHA',1,0,'C',1);
  $pdf->Cell(20,6,'ESTADO',1,0,'C',1);
  
  $pdf->SetFont('Arial','',8);
  $pdf->Ln();


while ($row = mysqli_fetch_assoc($consulta)) { 
    $pdf->Cell(15,6,utf8_decode($row['Id_Orden_Produccion']),1,0,'C'); 
    $pdf->Cell(87,6,utf8_decode($row['Nombre']),1,0,'C');  
    $pdf->Cell(50,6,utf8_decode($row['Producto']),1,0,'C');
    $pdf->Cell(80,6,utf8_decode($row['observaciones']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Cantidad']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Fecha_Pedido']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Estado']),1,0,'C');
    $pdf->Ln();
 }
  $pdf->Output();



 
 ?>