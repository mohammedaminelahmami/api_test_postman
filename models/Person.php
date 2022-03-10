<?php
    class Person {
        private $db;

        public function __construct()
        {
            $this->db = new Database();
        }

        public function selectPerson()
        {
            return $this->db->querySelect("SELECT * FROM api_postman . person");
        }

        public function InsertPerson()
        {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $phone = htmlspecialchars($_POST['phone']);

            return $this->db->queryInsert("INSERT INTO api_postman . person (name, email, phone) VALUES ('$name', '$email', '$phone')");
        }

        public function deletePerson()
        {
            $id = $_GET['id'];
            return $this->db->queryDelete("DELETE FROM api_postman . person WHERE id = '$id' ");
        }

        public function updatePerson()
        {
            $id = $_GET['id'];

            $name = htmlspecialchars($_POST['name_upd']);
            $email = htmlspecialchars($_POST['email_upd']);
            $phone = htmlspecialchars($_POST['phone_upd']);

            return $this->db->queryUpdate("UPDATE api_postman . person SET name = '$name', email = '$email', phone = '$phone' WHERE id = '$id' ");
        }

    }