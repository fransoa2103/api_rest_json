<?php

function connectDb(){
    require_once '.env';
    try
    {
        // !isset($pdo)? $pdo = new PDO($_ENV['LOC_HOST'].$_ENV['LOC_NAME'].$_ENV['LOC_CHAR'],$_ENV['LOC_USER'],$_ENV['LOC_PW']): null ;
        !isset($pdo)? $pdo = new PDO($_ENV['DB_HOST'].$_ENV['DB_NAME'].$_ENV['DB_CHAR'],$_ENV['DB_USER'],$_ENV['DB_PW']): null ;
        
        $flights["success"] = true;
        $flights["message"] = "connection done";
        return($pdo);

    } catch (PDOException $e) {
        
        $flights["success"] = false;
        $flights["message"] = "connection fail: ".$e;

    }
}

function flightListByDepartArrival(){
    $pdo = connectDb();
    $request = $pdo->prepare("SELECT * FROM flights WHERE depart = ? AND arrival = ? ");
    $request->execute([$_GET["depart"],$_GET["arrival"]]);    
    $flights["success"] = true;
    $flights["message"] = "flights List from ".$_GET["depart"]." to ".$_GET["arrival"];
    
    $result = $request->fetchAll();
    $flights["results"]["find_qty"] = count($result);
    $flights["results"]["flights"] = $result;
    echo json_encode($flights);
}

function flightListByArrival(){
    $pdo = connectDb();
    $request = $pdo->prepare("SELECT * FROM flights WHERE arrival = ? ");
    $request->execute([$_GET["arrival"]]);    
    $flights["success"] = true;
    $flights["message"] = "flights List to ".$_GET["arrival"];
    
    $result = $request->fetchAll();
    $flights["results"]["find_qty"] = count($result);
    $flights["results"]["flights"] = $result;
    echo json_encode($flights);
}

function flightListByDepart(){
    $pdo = connectDb();
    $request = $pdo->prepare("SELECT * FROM flights WHERE depart = ? ");
    $request->execute([$_GET["depart"]]);    
    $flights["success"] = true;
    $flights["message"] = "flights List from ".$_GET["depart"];
    
    $result = $request->fetchAll();
    $flights["results"]["find_qty"] = count($result);
    $flights["results"]["flights"] = $result;
    echo json_encode($flights);
}

function flightsAll(){
    $pdo = connectDb();
    $request = $pdo->prepare("SELECT * FROM flights");
    $request->execute();
    $flights["success"] = true;
    $flights["message"] = "list of all available flights";
    
    $result = $request->fetchAll();
    $flights["results"]["find_qty"] = count($result);
    $flights["results"]["flights"] = $result;
    echo json_encode($flights);
}