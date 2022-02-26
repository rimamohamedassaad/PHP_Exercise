<?php
$num;
function isPowerOfTwo($num){
if($num && (!($num & ($num - 1)))){
    echo "$num is powred  by two";
}
else {
    echo "is not powered";
}
}
isPowerOfTwo(32);
isPowerOfTwo(21);
?>