<?php

    session_start();
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    if(!isset($_SESSION['usuario'])){
        echo '
            <script> 
                alert("Por favor debes iniciar sesion");
                window.location = "login";
            </script>
        ';
        session_destroy();
        die();
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Img/favicon.png" type="image/x-icon">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/navbar.css">

        <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>



        <title>Settings</title>

    </head>

    <body id="body-pd">
        <?php 

    include 'navbarA.php';
?>

<form action="" method="POST">

        <?php 


        ?>
            <div class="wrapper">
                <div class="title">
                    Cambiar Contraseña
                </div>
                <div class="form">
                    <div class="inputfield">
                        <label>Contraseña Actual</label>
                        <input type="text" class="input" name="passActual">
                    </div>
                    <div class="inputfield">
                        <label>Contraseña Nueva</label>
                        <input type="password" class="input" name="pass1">
                    </div>
                    <div class="inputfield">
                        <label>Confirmar Contraseña</label>
                        <input type="password" class="input" name="pass2">
                    </div>
                    
                    <input type="submit" value="Cambiar " name="editar">
        </form>




        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


        <!-- ===== MAIN JS ===== -->
        <script src="Js/navbar.js"></script>

    

        <!-- Mostrar el usuario <?php echo '<span>'.$_SESSION["usuario"].'</span>'; ?>  -->
    </body>

    </html>