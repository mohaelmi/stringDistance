<?php

require 'mainClass.php';

$string1 = $_POST['string1'];
$string2 = $_POST['string2'];
$calc    = $_POST['cal'];


$distance = new Calc($string1, $string2, $calc);
echo $distance->callClass(); 

?>