<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require 'Flight.php';
    
if (isset($_GET['arrival']) != "" && (isset($_GET['depart']) != ""))
    {
        flightListByDepartArrival();
    }
    else if (isset($_GET['arrival']) != "")
    {
        flightListByArrival();
    }
    else if (isset($_GET['depart']) != "")
    {
        flightListByDepart();
    }
    else {
        flightsAll();
    };