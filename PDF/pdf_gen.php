<?php 

require_once './FPDF/fpdf.php'; //connect sa .php file for cre8ing pdf file
require_once 'code.php'; //connection
$sql = "select * from homeownerdb3";
$data = mysqli_query($con, $sql);

if(isset($_POST['btn_pdf']))
{   
    //check nyo nalang dito specifications http://www.fpdf.org
    //$pdf = new FPDF('P','mm','A4');
    $pdf = new FPDF('p', 'mm','legal');
    $pdf->AddPage();

    // Page header
        // Logo left then up then image size in px ata to
        $pdf->Image('Laguna Hills Logo.jpg',85,6,50);
        // Line break
        $pdf->Ln(40);
    // END of page header

    // SetFont(). We choose Arial bold 16:
    $pdf->SetFont('Arial','B',10);

    // Cell (width, height, txt, border, ln line break, align(Center))
    $pdf->Cell(20,10,'id', '1', '0' , 'C');
    $pdf->Cell(40,10,'First Name', '1', '0' , 'C');
    $pdf->Cell(40,10,'Last Name', '1', '0' , 'C');
    $pdf->Cell(20,10,'Age', '1', '0' , 'C');
    $pdf->Cell(20,10,'gender', '1', '0' , 'C');
    $pdf->Cell(60,10,'Address', '1', '1' , 'C');
    $pdf->SetFont('Arial','B',9);

        while($row = mysqli_fetch_assoc($data))
    {
        $pdf->Cell(20,10,$row['id'], '1', '0' , 'C');
        $pdf->Cell(40,10,$row['firstname'], '1', '0' , 'C');
        $pdf->Cell(40,10,$row['lastname'], '1', '0' , 'C');
        $pdf->Cell(20,10,$row['age'], '1', '0' , 'C');
        $pdf->Cell(20,10,$row['gender'], '1', '0' , 'C');
        $pdf->Cell(60,10,$row['address'], '1', '1' , 'C');

    }

    //Remark: the line break can also be done with Ln(). This method additionnaly allows to specify the height of the break.

//Finally, the document is closed and sent to the browser with Output(). We could have saved it to a file by passing the appropriate parameters.

//Caution: in case when the PDF is sent to the browser, nothing else must be output by the script, neither before nor after (no HTML, not even a space or a carriage return). If you send something before, you will get the error message: "Some data has already been output, can't send PDF file". If you send something after, the document might not display.
    $pdf->Output();

    }; //isset closing tag

