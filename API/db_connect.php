<?php
require_once '.env';
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Connect to DB
try {
    // $pdo = new PDO($_ENV['LOC_HOST'].$_ENV['LOC_NAME'].$_ENV['LOC_CHAR'],$_ENV['LOC_USER'],$_ENV['LOC_PW']);
    $pdo = new PDO($_ENV['DB_HOST'].$_ENV['DB_NAME'].$_ENV['DB_CHAR'],$_ENV['DB_USER'],$_ENV['DB_PW']);
    $flights["success"] = true;
    $flights["message"] = "connection done";
} catch (Exception $e) {
    $flights["success"] = false;
    $flights["message"] = "connection fail";
}
