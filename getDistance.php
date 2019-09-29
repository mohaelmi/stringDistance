<?php

require 'mainClass.php';

$string1 = $_POST['string1'];
$string2 = $_POST['string2'];
$calc    = $_POST['cal'];


$distance = new Calc($string1, $string2, $calc);

?>
<html>
    <body>
    <p ><?php  echo $distance->callClass(); ?> </p>
    <!-- <button id="back" onclick= "goback()" > Back </button> -->
    </body>
</html>

  

