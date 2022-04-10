<?php
header('Content-Type: application/json');

$flys = [];
$flys["success"] = true;
$flys["message"] = "connected";
$flys["results"]['fly'] = ["Paris-Toulouse", "Lyon-Paris"];

echo json_encode($flys);