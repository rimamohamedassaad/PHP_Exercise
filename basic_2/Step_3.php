<?php
// $var1 = 32;
// $var2 = 45;
//first method reassign 
//  $var1 = 45;
//  $var2 = 32;
//  $x;
// echo "$var1" ,
// "$var2";
//second way
function swap($var1,$var2){
    $x = $var1;
    $var1 = $var2;
    $var2 = $x;
    echo "$var1" ,
    "$var2";
    
}
swap(32,45);

?>