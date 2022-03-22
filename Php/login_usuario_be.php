<?php

session_start();

    include 'config.php';

    $usuario = $_POST['usuario'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $validar_login = mysqli_query($conn, "SELECT * FROM usuarios WHERE 
    correo='$correo' and contrasena = '$contrasena' ");

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $correo;
        header("location: ../encuesta");
        exit();
    }else{
        echo ' 
            <script>
                alert("Usuario no existe, favor de verificar los datos introducidos");
                window.location = "login"
            </script>
        ';
        exit();
    }

?>