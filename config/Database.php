<?php
    class Database {
        private $host = 'localhost';
        private $dbname = 'api_postman';
        private $user = 'root';
        private $pass = '';
        private $conn;

        // CONNECTION
        public function __construct()
        {
            try{
                $this->conn = new PDO('mysql:host = '. $this->host . ';dbname = '. $this->dbname, $this->user, $this->pass);
            }catch(PDOException $e){
                echo 'Connection Failed' . $e->getMessage();
            }
        }

        // SELECT
        public function querySelect($sql)
        {
            $a = $this->conn->prepare($sql);
            $a->execute();
            return $a->fetchAll(PDO::FETCH_ASSOC);
        }

        // INSERT
        public function queryInsert($sql)
        {
            $a = $this->conn->prepare($sql);
            return $a->execute();
        }

        // DELETE
        public function queryDelete($sql)
        {
            $a = $this->conn->prepare($sql);
            return $a->execute();
        }

        // UPDATE
        public function queryUpdate($sql)
        {
            $a = $this->conn->prepare($sql);
            return $a->execute();
        }
        
    }