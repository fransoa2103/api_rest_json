<?php
header('Content-Type: application/json');

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
$conn = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);


// $host   = 'ec2-63-32-248-14.eu-west-1.compute.amazonaws.com';
// $db     = 'dc36rqs7b26ct4';
// $admin  = 'hssoqdizhvmubt';
// $pw     = 'c0e3dd3948831fa75ea66d82e2837aadc97730ffbe0226c1d8d9c68010fa62bb';
// $port   = '5432';

// try
// {
//     $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port.';charset=utf8', $admin, $pw);
//     $flights["success"] = true;
//     $flights["message"] = "connection done";
// }
// catch(Exception $e)
// {
//     $flights["success"] = false;
//     $flights["message"] = "connection fail";
// }
