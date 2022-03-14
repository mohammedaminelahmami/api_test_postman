<?php
    // Headers
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    require_once '../config/Database.php';
    require_once '../models/Person.php';

    // Instantiate DB
    $db = new Database();

    // Instantiate
    $person = new Person();

    $result = $person->selectPerson();
    $count = count($result);

    if($count > 0)
    {
        echo json_encode($result);
    }else{
        // http_response_code(404);
        echo json_encode(array("message" => "No record found."));
    }