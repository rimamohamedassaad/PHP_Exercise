<?php 
function reverse($text)
{
$arr = explode(" ",$text);
$length = count($arr);
$i=$length;
$arrone;
for($i=1;$i<=$length;$i++){

    $arrone[$i]=$arr[$length -$i];
echo "$arrone[$i] ";
}

// foreach($arr as $val){
// $val = $arr[$i-1];
// $i--;
// echo "$val ";
// }

}
reverse("hello my name is rima")
?>