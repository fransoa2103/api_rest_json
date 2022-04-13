<?php
function connect_DB(){

    $flightList = json_decode(file_get_contents("https://fcb-test-api.herokuapp.com/?arrival=".$_GET['arrival']), true);
    $flights = $flightList['results']['flights'];
    foreach($flights as $flight){
        echo $flight['depart'];
    }

}