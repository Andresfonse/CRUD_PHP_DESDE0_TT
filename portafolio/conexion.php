<?php

class Conexion {

    private $server = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "galeria";
    private $conexion;

    public function __construct()
    {
        try {
            $this->conexion = new PDO("mysql:host=$this->server;dbname=$this->database", $this->user, $this->password);
            $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            // Lanza una excepción en lugar de mostrar directamente el mensaje de error
            throw new Exception("No se pudo conectar a la base de datos: " . $e->getMessage());
        }
    }

    public function ejecutar($sql, $params = [])
    {
        try {
            // Utiliza consultas preparadas para mejorar la seguridad
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute($params);
            
            return $this->conexion->lastInsertId();
        } catch (PDOException $e) {
            // Puedes manejar el error según tus necesidades
            throw new Exception("Error al ejecutar la consulta: " . $e->getMessage());
        }
    }

    public function consultar($sql, $params = [])
    {
        try {
            // Utiliza consultas preparadas para mejorar la seguridad
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute($params);
            
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Puedes manejar el error según tus necesidades
            throw new Exception("Error al ejecutar la consulta: " . $e->getMessage());
        }
    }
}
?>
