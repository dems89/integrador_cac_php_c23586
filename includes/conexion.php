<?php
class Conexion {

    private $servidor = "localhost";
    private $usuario = "root";
    private $pass = "";
    private $conexionPdo;
    private $base = "integrador_cac";

    public function __construct() {
        $this->conectar();
    }

    private function conectar() {
        try {
            $this->conexionPdo = new PDO("mysql:host=$this->servidor;dbname=$this->base", $this->usuario, $this->pass);
            $this->conexionPdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            throw new Exception("Falla de Conexión: " . $e->getMessage());
        }
    }

    public function ejecutar($sql) {
        $sentencia = $this->conexionPdo->prepare($sql);
        $sentencia->execute();
        return $this->conexionPdo->lastInsertId();
    }

    public function consultar($sql) {
        $sentencia = $this->conexionPdo->prepare($sql);
        $sentencia->execute();
        return $sentencia->fetchAll();
    }
}

?>