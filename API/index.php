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

if(!empty($_POST["depart"])){
    $request = $pdo->prepare("SELECT * FROM flights WHERE depart = ?");
    $request->execute([$_POST["depart"]]);    
    $flights["success"] = true;
    $flights["message"] = "flights List from ".$_POST["depart"];
}
else
{
    $request = $pdo->prepare("SELECT * FROM `flights`");
    $request->execute();
    $flights["success"] = true;
    $flights["message"] = "flights List";
}

$flights["results"]["flights"] = $request->fetchAll();

echo json_encode($flights);