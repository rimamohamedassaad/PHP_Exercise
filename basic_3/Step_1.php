<?php
function stars(){
    // for($i=1; $i<=8; $i++) {
    //     for($j=1; $j<=$i; $j++)
    //     {
    //     echo '*';
    //     }
    //     echo "\n";
    //     }
    while($i <= 8){
        $j=1;
        while($j<$i){
            $j++;
            echo "*";
            
        }
        echo "\n";
        $i++;
    }
}
// stars();
// function usestars($num1){
//     for($i=1; $i<=$num1; $i++) {
//         for($j=1; $j<=$i; $j++)
//         {
//         echo '*';
//         }
//         echo "\n";
//         }
// }

// usestars(4);
echo stars();

?>