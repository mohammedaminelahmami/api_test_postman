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

    $insert = $person->InsertPerson();

    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']))
    {
        echo "Data inserted !";
    }