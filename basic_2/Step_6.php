<?php
$num = 10222;
$sum = 0;
$numlength = strlen($num);
$arr = str_split($num);
for($i=0;$i<= $numlength-1 ; $i++)
{
$sum = $sum + $arr[$i];
}
echo "$sum";



//using function
function sumnumber($num){
$sum = 0;
$numlength = strlen($num);
$arr = str_split($num);
for($i=0;$i<= $numlength-1 ; $i++)
{
$sum = $sum + $arr[$i];
}
echo "$sum";
}
sumnumber(123);
sumnumber(565656);
?>