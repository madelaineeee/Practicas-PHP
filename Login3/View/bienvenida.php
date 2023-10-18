<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['usuario'])) {
    // Si el usuario no ha iniciado sesión, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Mostrar el nombre de usuario o cualquier otra información del perfil
$nombreUsuario = $_SESSION['usuario'];

// Página de perfil del usuario
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="../Public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">

</head>
<body>
    <h1>Bienvenido, <?php echo $nombreUsuario; ?>!</h1>

    <form action="logout.php" method="post">
        <input type="submit" value="Cerrar Sesión">
    </form>
</body>
</html>

