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

    $delete = $person->deletePerson();

    if(isset($_GET['id']) && !empty($_GET['id']))
    {
        json_encode($delete);
        echo "Deleted !";
    }else{
        echo "somthing wrong !";
    }