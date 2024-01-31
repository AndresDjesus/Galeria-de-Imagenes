<?php

require './utils/Database.php';

class Galeria{

    private $database;

    public function __construct() {
        
        $this->database = new Database('localhost', 'root', 'db_php4', 3307);
    }


    public function crearImagenes($titulo, $descripcion, $blob){
        try {
            $conn = $this->database->connect();
            $escaped_blob = mysqli_real_escape_string($conn, $blob);
            $sql= "INSERT INTO imagenes (titulo, descripcion, imagen)
            VALUES ('$titulo','$descripcion', '$escaped_blob' )";
            $resultado = $conn->query($sql);
            return $resultado;
        } catch (\mysqli_sql_exception $error) {
            
            throw $error;
        }        
    }

    public function mostrarImagenes() {
        try {
            $conn = $this->database->connect();
            $sql= "SELECT * FROM imagenes";
            $resultado = $conn->query($sql);

            return mysqli_fetch_all($resultado, MYSQLI_ASSOC);
        } catch (\mysqli_sql_exception $error) {
            
            throw $error;
        }         
    }


    
}