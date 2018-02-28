<?php 
/*
Consulta y cargue de la informacion almacenada en tablas matriz excel
*/
	require "libs/loadSheet.php";
	$col= 1;
	$matrix = $conn->sheets[0]["cells"];

	$length = count($matrix); 
	$questions = array_column($matrix, 7);
	$uniqueQuestions = array_unique($questions);

	echo json_encode($matrix[0]);

?>