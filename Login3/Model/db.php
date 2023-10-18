<?php
class Database {
    private $server;
    private $user;
    private $password;
    private $data_base;
    private $conexion;

    public function __construct() {
        require_once 'config/config.php';
        $this->server = SERVER;
        $this->user = USER;
        $this->password = PASSWORD;
        $this->data_base = DATABASE;

        $this->conexion = new mysqli($this->server, $this->user, $this->password, $this->data_base);
        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
?>