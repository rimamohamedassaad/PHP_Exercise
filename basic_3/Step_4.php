<?php

function sumDigit($num){
$sum=0;
$length = strlen($num);
$arr = str_split($num);
for($i=0;$i<$length;$i++){
$sum = $sum+$arr[$i];
}
return $sum;
}
echo sumDigit(12345);

?>