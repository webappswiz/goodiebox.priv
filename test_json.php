<?php

$pdf_base64 = "test.txt";
$pdf_base64_handler = fopen($pdf_base64,'r');
$pdf_content = fread ($pdf_base64_handler,filesize($pdf_base64));
fclose ($pdf_base64_handler);
$pdf_decoded = base64_decode ($pdf_content);
//Write data back to pdf file
$pdf = fopen ('test.pdf','w');
fwrite ($pdf,$pdf_decoded);
//close output file
fclose ($pdf);
echo 'Done';