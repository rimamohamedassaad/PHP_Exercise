<?php
$var1 = 32;
$var2 = 45;
//first method reassign 
//  $var1 = 45;
//  $var2 = 32;
//  $x;
// echo "$var1" ,
// "$var2";
//second way

$x = $var1;
$var1 = $var2;
$var2 = $x;
echo "$var1" ,
"$var2";

?>