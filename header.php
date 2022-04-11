<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Get Heroku ClearDB connection information
$host   = 'eu-cdbr-west-02.cleardb.net';
$db     = 'heroku_f91335195b01cd2';
$admin  = 'b85f1b8de2ecef';
$pw     = 'b692b14a';

// Connect to DB
try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $admin, $pw);
    $flights["success"] = true;
    $flights["message"] = "connection done";
} catch (Exception $e) {
    $flights["success"] = false;
    $flights["message"] = "connection fail";
}
