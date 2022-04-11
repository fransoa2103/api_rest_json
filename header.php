<?php
header('Content-Type: application/json');

//Get Heroku ClearDB connection information
// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"],1);
// $active_group = 'default';
// $query_builder = TRUE;
// // Connect to DB
// $conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


$host   = 'eu-cdbr-west-02.cleardb.net';
$db     = 'heroku_f91335195b01cd2';
$admin  = 'b85f1b8de2ecef';
$pw     = 'b692b14a';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $admin, $pw);
    $flights["success"] = true;
    $flights["message"] = "connection done";
} catch (Exception $e) {
    $flights["success"] = false;
    $flights["message"] = "connection fail";
}
