<?php
require_once 'Model/usuario.php';

    class Controller {
        private $usuarioModelo;
 
        public function __construct() {
            $this->usuarioModelo = new Usuario();
        }

        public function registrarUsuario($nombre, $apellido, $email, $password) {
            return $this->usuarioModelo->registrarUsuario($nombre, $apellido, $email, $password);
        }

        public function validarUsuario($email, $password) {
            return $this->usuarioModelo->validarUsuario($email, $password);
        }

        public function showLogin() {
            require('View/login.php');
        }

        public function showRegistro() {
            require('View/registro.php');
        }
    }
?>