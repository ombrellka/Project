<?php 
  require('fpdf.php');
  $f = fopen('history.txt', 'r');
  $pdf = new FPDF();
  $pdf -> AddPage();
  $pdf -> SetFont('Times','U',22);
  $pdf -> Cell(20, 10, 'Input history:',0,1);
  $pdf -> SetFont('Times','',14);  
  
  while ( !feof($f) )      
  {
    $line = fgets($f, 250);    
    $pdf -> Cell(20, 10, $line,0,1);   
  }

  fclose($f);
  $pdf -> Output();
?>