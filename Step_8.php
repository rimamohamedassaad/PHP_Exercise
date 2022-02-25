<?php
$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have $grocery[0] , $grocery[1], and $grocery[2]? Also if you sell fruits can I find a $grocery[5]?";
$items = array (
    array("balade", "mazere3"),
    array("Fresh", "Taanayel"),
    array("Tanoureen", "Reem")
);

echo "Hey Sir, Please I need 1 pack of " . $items[0][0] . " eggs and 3 " . $items[2][2]. "Water Pack\n";
echo "Hey Sir, Please I need 1 pack of balade" . $grocery[0] . "and 3 Reem" . $grocery[3] . "\n";

?>