<?php
// function find($word,$text){
// $arr = explode($word,$text);

// $length = count($arr) -1;
// echo $length;
// }
function find($word,$text){
    $arr = explode(" ",$text);
    $length= count($arr);
    $i=0;
    $sum =0;
    while($i< $length){
if($arr[$i]== $word){
    $sum = $sum +1;
}
        $i++;
    }
return $sum;

}



echo find("php" , "you php cal php rima php also php also php one php");
?>