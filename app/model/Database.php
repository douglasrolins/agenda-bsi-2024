<?php

    include_once __DIR__ . '/../../config/dbconfig.php';

    class Database{

        private $servername;
        private $username;
        private $password;
        private $dbname;
        private $conn;


        function __construct()
        {
            $this->servername = DB_HOST;
            $this->username = DB_USER;
            $this->password = DB_PASSWORD;
            $this->dbname = DB_NAME;
        }

        function connect(){
            $this->conn = new mysqli($this->servername,$this->username,$this->password, $this->dbname);

            if ($this->conn->connect_error) {
                die("Falha na conexão com o banco de dados: " . $this->conn->connect_error);
            }

            return $this->conn;
        }

        function closeConnection(){
            if ($this->conn) {
                $this->conn->close();
            }
        }

        
    }



?>