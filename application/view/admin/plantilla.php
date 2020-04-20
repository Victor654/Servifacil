<?php 
require('fpdf/fpdf.php');
class PDF extends FPDF 
{

function Header()
	{
		$this->Image('img/logo.png', 5, 5, 50);
		$this->SetFont('Arial', 'B',15);
		$this->Cell(30);
		$this->Cell(120,10,'REPORTE DE PRODUCTOS          Fecha:',0,0,'c');
		$this->Cell(40,10,date('d/m/Y'),0,1,'L');
		$this->Ln(40);

	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','B',10);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );

	}
}


 ?>