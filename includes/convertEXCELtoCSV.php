 <?php

 //Funcion que convierte excel a CSV
function convertXLStoCSV($filename,$outfile)
{
    $fileType = PHPExcel_IOFactory::identify($filename);
    $objReader = PHPExcel_IOFactory::createReader($fileType);
 
    $objReader->setReadDataOnly(true);   
    $objPHPExcel = $objReader->load($filename);    
 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
    $objWriter->save($outfile);
}
?>