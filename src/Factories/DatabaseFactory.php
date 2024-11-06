<?php

namespace src\Factories;
use mysqli;

class DatabaseFactory
{
    private string $servername;
    private string $username;
    private string $password;
    private string $dbname;


    public function __construct()
    {
        $this->servername = getenv('DB_HOST') ?: 'database';
        $this->username = getenv('DB_USER') ?: 'root';
        $this->password = getenv('DB_PASSWORD') ?: 'password';
        $this->dbname = getenv('DB_NAME') ?: 'pokemon_db';
    }

    public function connectDatabase()
    {
        $conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }


}