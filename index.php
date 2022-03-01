<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/img/favicon.png" type="image/x-icon">

    <title>Login</title>
</head>

<body>
    <div class="login-container">
        <div class="login-info-container">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="login_usuario_be.php" method="POST" class="inputs-container">
                <input class="input" type="text" placeholder="Usuario" name="correo">
                <input class="input" type="password" placeholder="Contraseña" name="contrasena">

                <button class="btn">Iniciar</button>


            </form>
        </div>
        <img class="image-container" src="images/img/ut_log.png" alt="">
    </div>

</body>

</html>