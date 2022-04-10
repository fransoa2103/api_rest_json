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

if(!empty($_POST["depart"]) && !empty($_POST["arrival"]) && !empty($_POST["date_depart"]) && !empty($_POST["duration"]) && !empty($_POST["price"])){
    if(intval($_POST['price'])>0){

        $request = $pdo->prepare("INSERT INTO flights(depart, arrival, date_depart, duration, price) VALUES (?,?,?,?,?)");
        $request->execute([$_POST["depart"],$_POST["arrival"],$_POST["date_depart"],$_POST["duration"],$_POST["price"]]);    
        $flights["success"] = true;
        $flights["message"] = "new flight is register";
    }
    else
    {
        $flights["success"] = false;
        $flights["message"] = "data price error";
    }
}
else
{
    $flights["success"] = false;
    $flights["message"] = "data missed";
}

echo json_encode($flights);