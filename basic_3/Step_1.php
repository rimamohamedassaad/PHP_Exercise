<?php
function stars(){
    for($i=1; $i<=8; $i++) {
        for($j=1; $j<=$i; $j++)
        {
        echo '*';
        }
        echo "\n";
        }
}
stars();
function usestars($num1){
    for($i=1; $i<=$num1; $i++) {
        for($j=1; $j<=$i; $j++)
        {
        echo '*';
        }
        echo "\n";
        }
}
usestars(4);


?>