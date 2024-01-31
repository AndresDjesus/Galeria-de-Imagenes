<?php
require 'ErrorDisplayer.php';

class Database {
    
    private $host;
    private $user;
    private $database;
    private $port;

    public function __construct($host, $user, $database, $port) {
        $this->host = $host;
        $this->user = $user;
        $this->database = $database;
        $this->port = $port;
    }

    public function connect() {
        $connection = new mysqli($this->host, $this->user, '', $this->database, $this->port);
        if($connection->connect_errno) {
            die('Error en la conexión: ' . $connection->connect_error);
        }
        return $connection;
    }
    
}
//$database = new Database('localhost', 'root', 'db_php4', 3306);


