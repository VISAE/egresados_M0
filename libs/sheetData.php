<?php
/**
 * Created by PhpStorm.
 * User: omar.bautista
 * Date: 27/02/2018
 * Time: 5:03 PM
 */
$col= 1;
$matrix = $conn->sheets[0]["cells"];

$length = count($matrix);
$basicHeaders = array_slice($matrix[3], 0, 6);
$lenBasicHeaders = count($basicHeaders);
$questions = array_column($matrix, 7);
$questionHeaders = array_unique($questions);
// remove first row in headers
$questionHeaders = array_slice($questionHeaders, 1, count($questionHeaders));
$lenQuestionHeaders = count($questionHeaders);
$headers = array_map('utf8_encode', array_merge($basicHeaders, $questionHeaders));
set_time_limit(45);