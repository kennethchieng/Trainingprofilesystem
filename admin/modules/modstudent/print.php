<?php
#require_once ("../../../include/initialize.php");
require ('fpdf182/fpdf.php');
$db = new PDO('mysql:host=localhost;dbname=dbcaiwl','root','');

class myPDF extends FPDF {
	function header(){
		$this->Image('hornbill3.png',10,6);
		$this->SetFont('Arial','B',14);
		$this->Cell(276,5,'TRAINING PROFILE SYSTEM',0,0,'C');
		$this->Ln();
		$this->SetFont('Times','',12);
		$this->Cell(276,10,'STUDENTS RECORDS',0,0,'C');
		$this->Ln(20);
	}
	function footer(){
		$this->SetY(-15);
		$this->SetFont('Arial','',8);
		$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
	}
	function headerTable(){
		$this->SetFont('Times','',12);
		$this->Cell(15,10,'ID',1,0,'C');
		$this->Cell(40,10,'NAME',1,0,'C');
		$this->Cell(30,10,'IC NO',1,0,'C');
		$this->Cell(30,10,'MOBILE NO',1,0,'C');
		$this->Cell(50,10,'EMAIL',1,0,'C');
		$this->Cell(60,10,'BUSINESS TYPE',1,0,'C');
		$this->Cell(50,10,'FINISHED MODULE',1,0,'C');
		$this->Ln();
	
	}
	function viewTable($db){
		$this->SetFont('Times','',10);
		$stmt = $db->query('select * from tblstudent');
		while($data = $stmt->fetch(PDO::FETCH_OBJ)){
			$this->Cell(15,10,$data->StudentID,1,0,'C');
			$this->Cell(40,10,$data->Fname.'I ' .$data->Lname,1,0,'C');
			$this->Cell(30,10,$data->ICNum,1,0,'C');
			$this->Cell(30,10,$data->MobileNo,1,0,'C');
			$this->Cell(50,10,$data->Email,1,0,'C');
			$this->Cell(60,10,$data->BusinessType,1,0,'C');
			$this->Cell(50,10,$data->FinishedModule,1,0,'C');
			$this->Ln();
		}
	}		
}

$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->Addpage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable($db);
$pdf->Output();
?>