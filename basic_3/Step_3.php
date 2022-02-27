<?php
function find($word,$text){
$arr = explode($word,$text);

$length = count($arr) -1;
echo $length;
}
find("php", "i love php and iif you ask me about php, i'll answer  php is my favorite, you can cal me rima php");
?>