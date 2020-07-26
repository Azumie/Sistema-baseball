<?php 

/**
 * 
 */
require 'Controlador/pdf.php';
class PdfControlador extends AnotherClass
{
	
	function __construct(argument)
	{
	}

	public function index(){
		$pdf = new PDF();
		// Títulos de las columnas
		$header = array('País', 'Capital', 'Superficie (km2)', 'Pobl. (en miles)');
		// Carga de datos
		
		$pdf->SetFont('Arial','',14);
		$pdf->AddPage();
		$pdf->BasicTable($header,$data);
		$pdf->AddPage();
		$pdf->ImprovedTable($header,$data);
		$pdf->AddPage();
		$pdf->FancyTable($header,$data);
		$pdf->Output();
	}



}

?>