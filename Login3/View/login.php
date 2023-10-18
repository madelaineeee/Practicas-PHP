

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="Public/css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arimo">
</head>

<body>
    <div class="container">
        <form method="POST" action="?action=login">
            <h1>Acceda a su cuenta</h1>
            <div class="content">
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
                <button type="submit">Acceder</button>
            </div>
        </form>

        <hr>
        <div class="link">
            <p>¿No tiene una cuenta? <a href="?action=registro">Registrese</a> </p>
        </div>
    </div>
</body>
</html>