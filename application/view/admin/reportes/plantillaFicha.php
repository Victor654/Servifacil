<?php 
require('fpdf/fpdf.php');
class PDF extends FPDF 
{

function Header()
	{
		$this->Image('img/logo.png', 1, 1, 50);
		$this->SetFont('Arial', 'B',15);
		$this->Cell(30);
		$this->Cell(120,20,'REPORTE DE FICHA TECNICA        Fecha:',0,0,'c');
		$this->Cell(40,20,date('d/m/Y'),0,1,'L');
		$this->Ln(20);

	}
	function Footer()
	{
		$this->SetY(-15);
		$this->SetFont('Arial','B',10);
		$this->Cell(0,10, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );

	}
}


 ?>