<?php


include ("connection.php");
$applicant_id=$_GET['applicant_id'];
$image="logo.png";
$image0="sig.jpg";



$query = mysqli_query($con,"SELECT * FROM `teacher_applicant` where applicant_id = $applicant_id");
$item = mysqli_fetch_array($query);
$job_id=$item['job_id'];
$app_name=$item['app_name'];
$app_phone=$item['app_phone'];

$query0 = mysqli_query($con,"SELECT * FROM `teacher_appointment`  where job_id = $job_id");
$item0 = mysqli_fetch_array($query0);
$post=$item0['post'];
$subject=$item0['subject'];

if($subject=='বাংলা')
{
   $subject0='Bangla';
}elseif($subject=='ইংরেজী')
{
   $subject0='English';
}elseif($subject=='গণিত')
{
   $subject0='Mathematics';
}elseif($subject=='মৌলভী')
{
   $subject0='Islamic Studies';
}elseif($subject=='সাধারন')
{
   $subject0='General';
}


if($post=='সহকারী শিক্ষক')
{
    $postname='Assistant Teacher';
}
$gender=$item0['gender'];
$dob=$item0['dob'];
$phone=$item0['phonenumber'];

//call the FPDF library
require('fpdf186/fpdf.php');

//A4 width : 219mm
//default margin : 10mm each side


//create pdf object
$pdf = new FPDF('P','mm','A4');
//add new page
$pdf->AddPage();
//output the result
//set font to arial, bold, 14pt
$pdf->SetFont('Arial','I',12);
$pdf->Cell(16 ,5,'',0,1);

$pdf->Cell(59 ,5,'',0,1);//end of line
$pdf-> Image($image,13,15,35,40);
//Cell(width , height , text , border , end line , [align] )
$pdf->Cell(40 ,5,'',0,0);
$pdf->SetFont('Arial','B',25);
$pdf->Cell(120 ,15,'Kachakata Ideal School & College',0,1);//end of line
$pdf->Cell(45 ,5,'',0,0);//end of line
$pdf->SetFont('Arial','I',22);
$pdf->Cell(40,7,'Teacher Appointment Examination',0,1);//end of line
$pdf->SetFont('Arial','B',18);
$pdf->Cell(80 ,10,'',0,0);
$pdf->Cell(80 ,5,'',0,1);
$pdf->Cell(80 ,5,'',0,0);
$pdf->Cell(38,7,'Admit Card',1,1,C);//end of line


$pdf->Cell(59 ,5,'',0,1);//end of line

$pdf->Cell(20 ,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,'',0,0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(23 ,5,'Enroll ID : ',0,0);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,$applicant_id,0,0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(23 ,5,'',0,0);
$pdf->Cell(29 ,5,'Post Name : ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85 ,5,$postname,0,1);

$pdf->Cell(30 ,5,'',0,0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(23 ,5,'Job ID : ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(10 ,5,$job_id,0,0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(23 ,5,'',0,0);
$pdf->Cell(30 ,5,'Subject : ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(85 ,5, $subject0,0,1);

$pdf->SetFont('Arial','I',12);
$pdf->Cell(70 ,5,' ',0,1);
$pdf->Cell(30 ,5,' ',0,0);
$pdf->Cell(35 ,5,'Applicant Name :',0,0);
$pdf->SetFont('Arial','B',20);
$pdf->Cell(85 ,5, $app_name ,0,1);

$pdf->Cell(25 ,2,'',0,1);

$width=$pdf->GetPageWidth(); // Width of Current Page
$height=$pdf->GetPageHeight();
$gap=2; // Gap between line and border , change this value
$pdf->SetLineWidth(0.8);
// Red Left Line
$pdf->SetDrawColor(255,41,99);
$pdf->Line(10, 11, 10,104); // Horizontal line at top

$pdf->SetDrawColor(255,41,99);
// Right Red Line

$pdf->Line(200, 11, 200,104); // Horizontal line at top
// Top Red Line
$pdf->Line(10, 11, 200,11); // Horizontal line at top

// Bottom Red Line
$pdf->Line(10, 104, 200,104); // Horizontal line at top




$pdf->SetLineWidth(0.6);
$pdf->SetDrawColor(34,70,212);
 // Left Blue Line
$pdf->Line(12, 12, 12,103); // Horizontal line at top

 // Right Blue Line
$pdf->Line(198, 12, 198,103); // Horizontal line at top

 // Top Blue Line
$pdf->Line(12, 12, 198,12); // Horizontal line at top

 // Bottom Blue Line
$pdf->Line(12, 103, 198,103); // Horizontal line at top

 // Middle Blue Line
$pdf->Line(12, 55, 198,55); // Horizontal line at top

$pdf->Cell(30 ,5,'',0,0);
$pdf->SetFont('Arial','I',12);
$pdf->Cell(16 ,5,'Phone : ',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,5,$app_phone,0,1);
    $pdf->Cell(22	,5,'',0,1,'C');
	$pdf-> Image($image0,150,80,40,10);
		$pdf->Cell(145 ,5,'',0,0);
	$pdf->Cell(16 ,5,'Autorized By',0,1);
		$pdf->Cell(16 ,5,'',0,1);

		 


//set font to arial, regular, 12pt

				 
$pdf->SetFont('Arial','',12);

//add dummy cell at beginning of each line for indentation


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189 ,10,'',0,1);//end of line

//invoice contents


//summary

$pdf->Output();
?>