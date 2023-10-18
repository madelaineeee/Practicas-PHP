<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
</head>

<body>
    <div class="container">
        <form method="POST">
            <h1>Registrese</h1>
            <div class="content">
                <div class="inputbox">
                    <label for="name">Nombre: </label>
                    <input type="text" name="name" id="name" placeholder="Ingrese su nombre" required>
                </div>

                <div class="inputbox">
                    <label for="lastname">Apellido: </label>
                    <input type="text" name="lastname" id="lastname" placeholder="Ingrese su apellido" required>
                </div>

                <div class="inputbox">
                    <label for="email">Email: </label>
                    <input type="email" name="email" id="email" placeholder="Ingrese su correo electrónico" required>
                </div>

                <div class="inputbox">
                    <label for="password">Contraseña: </label>
                    <input type="password" name="password" id="password" placeholder="Ingrese su contraseña" required>
                </div>
            </div>
            <div class="button">
                <button type="submit">Registrarse</button>
            </div>
        </form>

        <hr>
        <div class="link">
            <p>¿Ya tiene una cuenta? <a href="index.php?action=login">Inicie Sesión</a> </p>
        </div>
    </div>
</body>
</html>