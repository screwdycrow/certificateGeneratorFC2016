<?php
require('settings.php');
$persons = return_details($_GET['pass']); //epistrefei se pinaka ta details

//mporei kapoios na eixe dhlwsei polla atoma me to idio email, ara tha erthei to pass tou tha antistoixei se perissotera apo ena email.
foreach ($persons as $person ){
    $pdf = new tFPDF(); //
    // To fpdf den douleve sta ellhnika, to tpdf einai mia allagmenh ekdosh tou gia unicode
    $pdf->AddPage();
    $pdf->AddFont('DejaVu','','DejaVuSansCondensed.ttf',true);
    $pdf->SetFont('DejaVu', '', 30);
    //different type of certifcate
    if($person['type_id']== 1) {
        $pdf->SetTextColor(200, 100, 100); // rgb magic
        $pdf->Image(FILES.'templates/certificate4.jpg', 0, 0, $pdf->w, $pdf->h);
    }else if($person['type_id']==2){
        $pdf->SetTextColor(100,100,200); // rgb magic
        $pdf->Image(FILES.'templates/certificate5.jpg', 0, 0, $pdf->w, $pdf->h);
    }else if($person['type_id']==3) {
        $pdf->SetTextColor(100, 100, 200); // rgb magic
        $pdf->Image(FILES . 'templates/certificate6.jpg', 0, 0, $pdf->w, $pdf->h);
    }
    $name= $person['name']." ".$person['Surname']; //struct the name :P
    $wi = $pdf->GetStringWidth( $name);
    $startPoint = (($pdf->w)/2)-($wi/2);
    //gia na kentrarete to text automata
    $pdf->SetXY($startPoint, 125);
    $pdf->Cell($wi, 0, $name, 0, 0, 'C');
    $pdf->Ln(10);
    $pdf->Output('certificates/'.$person['e-mail'].'.pdf','F');
    unset($pdf);
}

?>

