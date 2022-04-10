<?php
header('Content-Type: application/json');

$host   = 'localhost';
$db     = 'API';
$admin  = 'root';
$pw     = '';

try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $admin, $pw);
    $flights["success"] = true;
    $flights["message"] = "connection done";
}
catch(Exception $e)
{
    $flights["success"] = false;
    $flights["message"] = "connection fail";
}

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
    $flights["message"] = "flights List";
}

$result = $request->fetchAll();
$flights["results"]["find_qty"] = count($result);
$flights["results"]["flights"] = $result;

echo json_encode($flights);