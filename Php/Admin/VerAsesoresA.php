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
    

    <title>Ver Asesores</title>

</head>

<body id="body-pd"> 
<?php 

    include 'navbarA.php';
?>

    <div>
        <table border = "1">
            <tr>
                <td>Id</td>
                <td>Nombre</td>
                <td>Apellidos</td>
                <td>Correo</td>
                <td>Contraseña</td>
                <td>Rol</td>
 
            </tr>
            <?php 
                 include '../config.php';
                 $sql = "SELECT id, nombre, correo, apellidos, contrasena, id_cargo FROM asesores order by id asc";
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