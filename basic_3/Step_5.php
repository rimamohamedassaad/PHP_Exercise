<?php

function recrohm($side1 , $side2 , $diag){
    if (($side1 ** 2) + ($side2 ** 2) === ($diag ** 2)) {
    // if (pow($side1,2) + pow($side2,2) === pow($diag,2)) {
        return "this parallelogram is a rectangle.\n";
    }
    if ($side1 === $side2) {
        return "this parallelogram is a rhombus.\n";
    } 
    return "not rhombus & not rectangle.\n";
}

echo recrohm(5,5,8);
echo recrohm(3,4,5);
echo recrohm(5,6,7);
?>