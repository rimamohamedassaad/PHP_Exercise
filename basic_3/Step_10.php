<?php
$transactions = array(
    array(
        "id" => 1,
        "name"=> "Gaby",
        "email"=> "gaby@codi.tech"
    ),
    array(
       "id" => 3,
       "name"=> "Omar",
       "email"=> "omar@codi.tech"
    )
);
function student($transactions){
foreach($transactions as $key => $val){
echo "id : " , $transactions[$key]["id"] ,  ", name : " ,  $transactions[$key]["name"]  , ", email : " , $transactions[$key]["email"] ," \n";
}
}
student($transactions);



?>