<?php
    
    header('Access-Control-Allow-Origin: *');
    
    $first_name     = (isset($_GET['first_name']) && $_GET['first_name'] != '') ? 'Hi dear, '.$_GET['first_name'] : 'data is missing';
    $result         = $first_name;
    $json_result    = json_encode(['first_name' => $first_name, 'result' => $result]);
    
    echo $result;