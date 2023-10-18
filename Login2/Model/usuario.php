<?php
require_once 'db.php';

class Usuario {
    private $db;
    public function __construct() {
        $this->db = new Database();
    }

    public function registrarUsuario($nombre, $apellido, $email, $password) {
        if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($password)) {
          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
          $conexion = $this->db->getConexion();
          $query = "INSERT INTO usuario (nombre, apellido, email, contrasena) VALUES ('$nombre', '$apellido', '$email', '$hashedPassword')";
          $result = $conexion->query($query);
          if ($result) {
            return "Registro exitoso!!";
          } else {
            return "Error al realizar el registro";
          }
        } else {
          return false;
        }
      }

    public function validarUsuario($email, $password) {
        if (!empty($email) && !empty($password)) {
          $conexion = $this->db->getConexion();
          $email = mysqli_real_escape_string($conexion, $email);
          $query = "SELECT * FROM usuario WHERE email='$email'";
          $result = $conexion->query($query);
          if ($result && $result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['contrasena'])) {
              return true;
            }
          }
        }
        return false;
    }
}
?>