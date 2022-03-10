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

    $update = $person->updatePerson();

    if(!empty($_POST['name_upd']) && !empty($_POST['email_upd']) && !empty($_POST['phone_upd']))
    {
        echo "Data Updated";
    }