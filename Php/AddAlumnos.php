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


    <title>Alumnos</title>

</head>

<body id="body-pd"> 
<div class="l-navbar" id="navbar">
        <nav class="nav">
            <div>
                <div class="nav__brand">
                    <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                    <a href="#" class="nav__logo">Ut</a>
                </div>
                <div class="nav__list">
                    <a href="inicio" class="nav__link">
                        <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Inicio</span>
                    </a>
                    <a href="agregar" class="nav__link active">
                        <ion-icon name="chatbubbles-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Registrar Alumnos</span>
                    </a>

                    <div class="nav__link collapse">
                        <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Asesores</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="VerAsesores" class="collapse__sublink">Ver Asesores</a>
                            <a href="AgregarAsesores" class="collapse__sublink">Agregar Asesores</a>
                        </ul>
                    </div>

                    <div class="nav__link collapse">
                        <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Team</span>

                        <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                        <ul class="collapse__menu">
                            <a href="#" class="collapse__sublink">Data</a>
                            <a href="#" class="collapse__sublink">Group</a>
                            <a href="#" class="collapse__sublink">Members</a>
                        </ul>
                    </div>
                    <a href="#" class="nav__link">
                        <ion-icon name="settings-outline" class="nav__icon"></ion-icon>
                        <span class="nav__name">Settings</span>
                    </a>
                </div>
            </div>

            <a href="cerrar" class="nav__link">
                <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                <span class="nav__name">Log Out</span>
            </a>
        </nav>
    </div>

    <div>
        <form action="buscar.php" method="POST">
            <input type="text" name="buscar" id="">
            <input type="submit" Value="Buscar">
            <a href="nuevo.php"></a>
        </form>
    </div>


    <div class = "table-container">
        <table class="table-rwd">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Usuario</td>
                <td>Correo</td>
                <td>Contraseña</td>
                <td>Rol</td>
            </tr>
            <?php 
                 include 'config.php';
                 $sql = "SELECT id, nombre, usuario, correo, contrasena, id_cargo FROM usuarios order by id desc";
                 $rta = mysqli_query($conn, $sql);
                 while($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td><?php echo $mostrar['0'] ?></td>
                        <td><?php echo $mostrar['1'] ?></td>
                        <td><?php echo $mostrar['2'] ?></td>
                        <td><?php echo $mostrar['3'] ?></td>
                        <td><?php echo $mostrar['4'] ?></td>
                        <td><?php echo $mostrar['5'] ?></td>
                    </tr>
                    <?php                    
                    }
                    ?>
        </table>
    </div>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <!-- ===== MAIN JS ===== -->
    <script src="Js/navbar.js"></script>

    <!-- Mostrar el usuario <?php echo '<span>'.$_SESSION["usuario"].'</span>'; ?>  -->
</body>

</html>