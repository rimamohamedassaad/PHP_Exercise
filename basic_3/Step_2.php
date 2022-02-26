<?php
function factorial($num){
$i=1;
$fact=1;
while($i<=$num)
{
$fact = $fact*$i;
    $i++;
}
return $fact;
}


echo factorial(6)
?>