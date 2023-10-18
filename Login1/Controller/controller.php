<?php
    class Controller {
        public function showLogin() {
            require('View/login.php');
        }

        public function showRegistro() {
            require('View/registro.php');
        }
    }
?>