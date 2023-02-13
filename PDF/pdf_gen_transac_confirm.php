<?php
require_once './FPDF/fpdf.php'; //connect sa .php file for cre8ing pdf file
require_once('../PDF/connection_pdf.php'); //connection


$sql = "select * from transaction_assoc";
$data = mysqli_query($con, $sql);

if (isset($_POST['btn_pdf'])) {

    //$pdf = new FPDF('Portrait','mm','A4');
    // $pdf = new FPDF('P', 'mm', 'legal');
    // $pdf->AddPage();

    // Page header
    // Logo left then up then image size in px ata to
    // Line break
    // $pdf->Ln(40);

    
    $html = 'You can now easily print text mixing different styles: <b>bold</b>, <i>italic</i>,
    <u>underlined</u>, or <b><i><u>all at once</u></i></b>!<br><br>You can also insert links on
    text, such as <a href="http://www.fpdf.org">www.fpdf.org</a>, or on an image: click on the logo.';
    
    $pdf = new PDF();
    // First page
    $pdf->AddPage();
    $pdf->Image('../images/LagunaHillsLogo.jpg', 80, 6, 50);
    $pdf->Ln(40);
    $pdf->SetFont('Arial','',12);
    $pdf->Write(10,"To find out what's new in this tutorial, click ");
    while ($row = mysqli_fetch_array($result)) {
        $date = $row['date'];
        $time = $row['time'];
        $amount = $row['amount'];
        $product = $row['product'];
        $transaction_id = $row['transaction_num'];
        // $payment_method = $row['payment_method'];
        
        // Message
        $this->SetFont('Arial','',12);
        $this->MultiCell(0,10, "Thank you for your transaction!\n\nWe confirm that your payment of ".$amount." for ".$product." has been received and processed successfully.\n\nTransaction Details:\n\nDate: ".$date."\nTime: ".$time."\nTransaction ID: ".$transaction_id."\nPayment Method: \n\nIf you have any questions or concerns about your transaction, please don't hesitate to contact us.\n\nThank you for choosing us for your ".$product." needs.\n\nBest regards,\n The Laguna Hills Philippines");
    }

    // $pdf->SetFont('');
    // Second page
    $pdf->AddPage();
    $pdf->Write(10,"To find out what's new in this tutorial, click ");

    // $pdf->SetLink($link);
    $pdf->SetLeftMargin(45);
    $pdf->SetFontSize(14);
    // $pdf->WriteHTML($html);
    $pdf->MultiCell(0,10, "Thank you for your transaction!\n\nWe confirm that your payment of ".$amount." for ".$product." has been received and processed successfully.\n\nTransaction Details:\n\nDate: ".$date."\nTime: ".$time."\nTransaction ID: ".$transaction_id."\nPayment Method: ".$payment_method."\n\nIf you have any questions or concerns about your transaction, please don't hesitate to contact us.\n\nThank you for choosing us for your ".$product." needs.\n\nBest regards,\n[Your Company Name]");
    $pdf->Output();
    

    // END of page header

    // // SetFont(). We choose Arial bold 16:
    // $pdf->SetFont('Arial', 'B', 9.5);
    // $pdf->SetLeftMargin(15);
    // // Cell (width, height, txt, border, ln line break, align(Center))
    // $pdf->Cell(40, 10, 'Transac #', '1', '0', 'C');
    // $pdf->Cell(40, 10, 'First Name', '1', '0', 'C');
    // $pdf->Cell(40, 10, 'Last Name', '1', '0', 'C');
    // $pdf->Cell(40, 10, 'Username', '1', '0', 'C');
    // $pdf->Cell(65, 10, 'Email', '1', '0', 'C');
    // $pdf->Cell(30, 10, 'Mobile Number', '1', '0', 'C');
    // $pdf->Cell(30, 10, 'Telephone', '1', '0', 'C');
    // $pdf->Cell(80, 10, 'Address', '1', '1', 'C');
    // // $pdf->Cell(30,10,'Password', '1', '1' , 'C');

    

    // $pdf->SetFont('Arial', 'B', 8.5);

    // while ($row = mysqli_fetch_assoc($data)) {
        
    //     $pdf->MultiCell(0,10, "Thank you for your transaction!\n\nWe confirm that your payment of ".$row['owner_fname']." for ".$product." has been received and processed successfully.\n\nTransaction Details:\n\nDate: ".$date."\nTime: ".$time."\nTransaction ID: ".$transaction_id."\nPayment Method: ".$payment_method."\n\nIf you have any questions or concerns about your transaction, please don't hesitate to contact us.\n\nThank you for choosing us for your ".$product." needs.\n\nBest regards,\n[Your Company Name]");

    //     $pdf->Cell(40, 10, $row['owner_fname'], '1', '0', 'C');
    //     $pdf->Cell(40, 10, $row['owner_lname'], '1', '0', 'C');
    //     $pdf->Cell(40, 10, $row['owner_username'], '1', '0', 'C');
    //     $pdf->Cell(65, 10, $row['owner_email'], '1', '0', 'C');
    //     $pdf->Cell(30, 10, $row['owner_mobile'], '1', '0', 'C');
    //     $pdf->Cell(30, 10, $row['owner_telephone'], '1', '0', 'C');
    //     $pdf->Cell(80, 10, $row['owner_address'], '1', '1', 'C');


    //     // $pdf->Cell(30,10,$row['admin_password'], '1', '1' , 'C');

    // }
    // function MessageBody($date, $time, $amount, $product, $transaction_id, $payment_method)
    // {
    //     // Message
     
        
    // }
    
   

    //Remark: the line break can also be done with Ln(). This method additionnaly allows to specify the height of the break.

    //Finally, the document is closed and sent to the browser with Output(). We could have saved it to a file by passing the appropriate parameters.

    //Caution: in case when the PDF is sent to the browser, nothing else must be output by the script, neither before nor after (no HTML, not even a space or a carriage return). If you send something before, you will get the error message: "Some data has already been output, can't send PDF file". If you send something after, the document might not display.
    // $pdf->Output();
}; //isset closing tag
