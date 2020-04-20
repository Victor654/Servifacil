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

$valor=$_GET['valor2'];
if ($valor!=null) {
   $consulta = mysqli_query($conexion, "SELECT DISTINCT op.Id_Orden_Produccion,c.Nombre, p.Producto,deo.observaciones,deo.Cantidad,op.Fecha_Pedido,eo.Estado from orden_produccion op
        INNER JOIN estado_op eo ON (op.Id_Estado_Op=eo.Id_Estado_Op)
        INNER JOIN detalle_op deo ON (deo.Id_Orden_Produccion=op.Id_Orden_Produccion)
        INNER JOIN producto p ON (p.Id_Producto= deo.Id_Producto)
        INNER JOIN cliente c ON (c.Id_Cliente=deo.Id_Cliente)
        WHERE deo.Id_Orden_Produccion Like '%".$valor."%' or c.Nombre Like '%".$valor."%' or eo.Estado Like '%".$valor."%' order by op.Id_Orden_Produccion asc") or die (mysql_error());
}elseif($valor==null){
  $consulta = mysqli_query($conexion, "SELECT DISTINCT op.Id_Orden_Produccion,c.Nombre, p.Producto,deo.observaciones,deo.Cantidad,op.Fecha_Pedido,eo.Estado from orden_produccion op
        INNER JOIN estado_op eo ON (op.Id_Estado_Op=eo.Id_Estado_Op)
        INNER JOIN detalle_op deo ON (deo.Id_Orden_Produccion=op.Id_Orden_Produccion)
        INNER JOIN producto p ON (p.Id_Producto= deo.Id_Producto)
        INNER JOIN cliente c ON (c.Id_Cliente=deo.Id_Cliente)
        order by op.Id_Orden_Produccion asc") or die (mysql_error());

}
 

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

