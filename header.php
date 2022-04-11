<?php
header('Content-Type: application/json');

$host   = 'ec2-63-32-248-14.eu-west-1.compute.amazonaws.com';
// $db     = 'dc36rqs7b26ct4';
$db     = 'postgres://hssoqdizhvmubt:c0e3dd3948831fa75ea66d82e2837aadc97730ffbe0226c1d8d9c68010fa62bb@ec2-63-32-248-14.eu-west-1.compute.amazonaws.com:5432/dc36rqs7b26ct4';
$admin  = 'hssoqdizhvmubt';
$pw     = 'c0e3dd3948831fa75ea66d82e2837aadc97730ffbe0226c1d8d9c68010fa62bb';
$port   = '5432';

try
{
    $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';port='.$port.';charset=utf8', $admin, $pw);
    $flights["success"] = true;
    $flights["message"] = "connection done";
}
catch(Exception $e)
{
    $flights["success"] = false;
    $flights["message"] = "connection fail";
}
