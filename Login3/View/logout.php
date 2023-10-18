<?php
session_start();

// Destruir todas las variables de sesión
session_unset();
session_destroy();

// Redirigir a la página de inicio o a cualquier otra página después de cerrar sesión
header("Location: login.php");
exit();
?>
