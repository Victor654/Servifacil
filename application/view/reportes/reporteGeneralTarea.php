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

  $operario=$_GET['operario'];
  $consulta = mysqli_query($conexion, "SELECT t.Estado_Tarea,Id_Orden_Produccion,Producto,Tarea,e.Estado,Fecha_Tarea,Nombre FROM tarea t
        INNER JOIN producto p ON  (p.Id_Producto=t.Id_Producto)
        INNER JOIN operario o ON  (o.Id_Operario=t.Id_Operario)
        INNER JOIN estado e ON (e.Id_Estado=t.Estado_Tarea)
        Where t.Id_Operario= $operario
        Order By t.Id_Tarea") or die (mysql_error());
  
  $pdf->SetFillColor(255, 255, 255);
  $pdf->SetFont('Arial','B',11);
  $pdf->Cell(20,6,'OP',1,0,'C',1);
  $pdf->Cell(40,6,'OPERARIO',1,0,'C',1);
  $pdf->Cell(70,6,'PRODUCTO',1,0,'C',1);
  $pdf->Cell(100,6,'TAREA',1,0,'C',1);
  $pdf->Cell(20,6,'FECHA',1,0,'C',1);
  $pdf->Cell(20,6,'ESTADO',1,0,'C',1);

  
  $pdf->SetFont('Arial','',10);
  $pdf->Ln();

while ($row = mysqli_fetch_assoc($consulta)) {  
    $pdf->Cell(20,6,utf8_decode($row['Id_Orden_Produccion']),1,0,'C');
    $pdf->Cell(40,6,utf8_decode($row['Nombre']),1,0,'C');
    $pdf->Cell(70,6,utf8_decode($row['Producto']),1,0,'C');
    $pdf->Cell(100,6,utf8_decode($row['Tarea']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Fecha_Tarea']),1,0,'C');
    $pdf->Cell(20,6,utf8_decode($row['Estado']),1,1,'C');
 }
  $pdf->Output();


 
 ?>