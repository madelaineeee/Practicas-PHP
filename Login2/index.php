<?php
    
    require_once('Controller/controller.php');
    $controller = new Controller();

    $nombre = $_SESSION['usuario'];
    
    if (isset($_GET['action'])) {
        $action = $_GET['action'];
        if (!in_array($action, ['login', 'registro', 'logout'])) {
          $action = 'login';
        }
      } else {
        $action = 'login';
      }
      
    switch ($action) {
        case 'login':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $email = $_POST['email'];
                $contraseña = $_POST['password'];

                if ($controller->validarUsuario($email, $contraseña)) {
                    //iniciar sesión y enviar a la pagina de bienvenida
                    
                    $_SESSION['usuario'] = $nombre;
                    //header('Location: View/bienvenida.php');
                    echo "Ha iniciado sesión";
                    exit();
                } else {
                    echo "Credenciales incorrectas. Intente de nuevo.";
                }
            } else {
                $controller->showLogin();
            }
            break;

        case 'registro':
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $nombre = $_POST['name'];
                $apellido = $_POST['lastname'];
                $email = $_POST['email'];
                $contraseña = $_POST['password'];

                if ($controller->registrarUsuario($nombre, $apellido, $email, $contraseña)) {
                    echo "Registro exitoso!!";
                } else {
                    echo "Error al realizar el registro";
                }
            } else {
                $controller->showRegistro();
            }
            break;

        case 'logout':
            //destruir la sesion y regresar al login
            session_unset();
            session_destroy();
            header('Location: ?action=login');
            exit();
         
        default:
            header('Location: ?action=login');
            exit();
    }
?>