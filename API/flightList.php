<?php
include 'db_connect.php';

if(!empty($_GET["arrival"])){
    $request = $pdo->prepare("SELECT * FROM flights WHERE arrival = ? ");
    $request->execute([$_GET["arrival"]]);    
    $request->execute();    
    $flights["success"] = true;
    $flights["message"] = "flights List from ".$_GET["arrival"];
}
else
{
    $request = $pdo->prepare("SELECT * FROM `flights`");
    $request->execute();
    $flights["success"] = true;
    $flights["message"] = "All flights List";
}

$result = $request->fetchAll();
$flights["results"]["find_qty"] = count($result);
$flights["results"]["flights"] = $result;

echo json_encode($flights);