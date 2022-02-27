<?php
function stars(){

 $row_length = 7;
 $column_length = 7;
 for ($row = 7; $row >=0; $row--) {
     for ($column = 1; $column <= $column_length; $column++) {
         if ($row == 1 || $row == $row_length) {
             echo "* ";
         } else if ($column <= ($row_length - $row)) {
             echo "  ";
             
         } else {
             echo "* ";
             break;
         }
     }
     echo "\n";
 }
}
stars();



?>