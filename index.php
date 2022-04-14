<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'Flight.php';

// var_dump($_GET);

if (isset($_GET) && count($_GET) > 0){
    if (isset($_GET['arrival']) !== null && isset($_GET['depart']) !== null)
    {
        flightListByDepartArrival($_GET['depart'], $_GET['arrival']);
    }

   else if (isset($_GET['arrival']) !== null)
    {
        flightListByArrival($_GET['arrival']);
    }

   else if (isset($_GET['depart']) !== null)
    {
        flightListByDepart($_GET['depart']);
    }
}
else
{
    flightsAll();
}

    