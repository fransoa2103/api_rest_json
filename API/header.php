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