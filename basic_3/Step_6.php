<?php
function stars(){
    for($i=1; $i<=5; $i++) {
        for($j=1; $j<=$i; $j++)
        {
        echo '*';
        }
        echo PHP_EOL;
        }
        for($i=1; $i<=5; $i++) {
            for($j=5; $j>=$i; $j--)
            {
            echo '*';
            }
            echo PHP_EOL;
            }
}
stars()
?>