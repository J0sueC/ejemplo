<?php

    session_start();

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
    <link rel="stylesheet" href="css/table.css">


    <title>Agregar Alumnos</title>

</head>

<body id="body-pd"> 


<?php 

    include 'navbarA.php';
?>

<form action="registrar" method="POST">
            <div class="wrapper">
                <div class="title">
                    Agregar Alumnos
                </div>
                <div class="form">
                    <div class="inputfield">
                        <label>Nombre</label>
                        <input type="text" class="input" name="txtnombre">
                    </div>
                    <div class="inputfield">
                        <label>Apellido paterno</label>
                        <input type="text" class="input" name="txtapellidoPat">
                    </div>
                    <div class="inputfield">
                        <label>Apellido materno</label>
                        <input type="text" class="input" name="txtapellidoMat">
                    </div>
                    <div class="inputfield">
                        <label>Correo</label>
                        <input type="email" class="input" name="txtcorreo">
                    </div>
                    
                    <div class="inputfield">
                        <label>rol</label>
                        <input type="text" class="input" name="txtid_cargo">
                    </div>
                    <input type="submit" value="Registrar">
        </form>
    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <!-- ===== MAIN JS ===== -->
    <script src="Js/navbar.js"></script>

    <!-- Mostrar el usuario <?php echo '<span>'.$_SESSION["usuario"].'</span>'; ?>  -->
</body>

</html>