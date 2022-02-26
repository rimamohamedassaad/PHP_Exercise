<?php 
// $sum = 4**3 + 7 ** 3;
//     if($sum == $num)
//     echo "true";
// else {
//     echo "false";
// }
function isArmstrong($number){
    $num = $number;
    $sum=0;
    while($num != 0)
    {
        $x=$num%10;
        $sum = $sum + $x**3;
        $num = $num/10;
    }
    if($sum == $number){
        echo "true";
    }
    
         else {
             echo "false";
    }
}
isArmstrong(371);

isArmstrong(233);

?>

