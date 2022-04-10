<?php
header('Access-Control-Allow-Origin: *');
$host   = 'localhost';
$db     = 'db_test';
$admin  = 'root';
$pw     = '';

// phpinfo();die;

try {
        $pdo = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8', $admin, $pw);
        $requete = $pdo->prepare("SELECT * FROM `users`");
        $requete->execute();
        $db_1["success"] = true;
        $db_1["message"] = "User_list";
        $db_1["result"]["list"] = $requete->fetchAll();
        $db_1 = json_encode($db_1);
        echo $db_1;
    }
        catch(Exception $e)
    {
        die("Erreur connexion : ".$e);
    }

    
// $db_0 = file_get_contents('https://api.zippopotam.us/FR/73460'); 
// récupération json au format array
// echo "<hr>";
// $JsonToArray = json_decode($db_0, true); 

// $db_2 = file_get_contents('http://localhost/API-REST-JSON/db.json'); 
// récupération json au format objet
// echo "<hr>";
// $JsonToObj = json_decode($db_2); 

// recquire ('loop.php');
// array_loop($JsonToArray);