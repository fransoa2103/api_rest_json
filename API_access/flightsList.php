<?php
$flightList = json_decode(file_get_contents("https://fcb-test-api.herokuapp.com/?arrival=".$_GET['arrival']));
// $flightList = curl_init("https://fcb-test-api.herokuapp.com/?arrival=".$_GET['arrival']);
// echo $flightList->message;
// echo $flightList->results->find_qty;
// var_dump($flightList);
echo json_encode($flightList);
// print_r($flightList->results->flights[1]);
// var_dump(($flightList));die;

// ob_start();
// $content = ob_get_clean();
// require_once("template.php");