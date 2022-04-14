<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once 'Flight.php';

// var_dump($_GET);
// var_dump(isset($_GET['arrival']),$_GET['depart']);die;

if (isset($_GET) && count($_GET) > 0)
{
    if (count($_GET)>1)
    {
        if ((isset($_GET['arrival']) === TRUE) && (isset($_GET['depart']) === TRUE))
        {
            flightListByDepartArrival($_GET['depart'], $_GET['arrival']);
        }
    }   
    else
    {
        if (isset($_GET['arrival']) === TRUE)
        {
            flightListByArrival($_GET['arrival']);
        }
        else if (isset($_GET['depart']) === TRUE)
        {
            flightListByDepart($_GET['depart']);
        }
    }
}
else
{
    flightsAll();
}