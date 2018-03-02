//put the entire thing in a function and invoke it when required

<?php

require 'pdfcrowd.php';

$client = new Pdfcrowd("TechRaY", "67170993cdcd03be5cfbc1bc26ba6ea0");    // https://pdfcrowd.com/i/php-code-to-convert-html-to-pdf.html   if trial overs

$pdf = $client->convertURI('http://www.google.com/');          //give the uri you want to have as a pdf

header("Content-Type: application/pdf");
header("Cache-Control: max-age=0");
header("Accept-Ranges: none");
header("Content-Disposition: attachment; filename=\"google_com.pdf\"");

echo $pdf;

?>
