<?php
header('Content-Type: application/json');

$host   = 'localhost';
$db     = 'API';
$admin  = 'root';
$pw     = '';

try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $admin, $pw);
    $flys["success"] = true;
    $flys["message"] = "connection done";
}
catch(Exception $e)
{
    $flys["success"] = false;
    $flys["message"] = "connection fail";
}

$request = $pdo->prepare("SELECT * FROM `flys`");
$request->execute();

$flys["success"] = true;
$flys["message"] = "Liste des vols";
$flys["results"]["flys"] = $request->fetchAll();
// var_dump($result);

echo json_encode($flys);