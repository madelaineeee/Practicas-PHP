<?php
    if(isset($_GET['action'])) {
        $action = $_GET['action'];
    } else {
        $action = 'login';
    }

    require_once('Controller/controller.php');
    $controller = new Controller();

    switch($action) {
        case 'login':
            $controller->showLogin();
            break;
        case 'registro':
            $controller->showRegistro();
            break;
        default:
            header('Location: index.php?action=login');
            exit();
    }
?>