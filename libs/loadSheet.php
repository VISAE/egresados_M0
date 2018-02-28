<?php 
require_once 'reader.php';
$file = "data/Reporte Egresados - Momento Cero 12-2-2018 163.xls";
$conn = new Spreadsheet_Excel_Reader();
$conn->read($file);
echo "hola2";
?>