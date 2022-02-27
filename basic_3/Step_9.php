<?php
$transaction = array(
    array(
        "id" => 1,
        "debit"=>2,
        "credit"=>3
    ),
    array(
        "id" => 2,
        "debit"=>15,
        "credit"=>10
    )
); 
function trans($transactions){
foreach ($transactions as $key=>$value)
{
    $amount = abs($transactions[$key]["debit"] - $transactions[$key]["credit"]);
    echo "ID : " , $transactions[$key]["id"] , " => amount : $amount \n";

}
}
trans($transaction);
?>
