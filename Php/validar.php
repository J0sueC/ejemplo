<?php

session_start();

    include 'config.php';
    
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $_SESSION['usuario'] = $correo;

    $consulta  = "SELECT * FROM usuarios WHERE correo='$correo' and contrasena = '$contrasena' ";
    $resultado = mysqli_query($conn, $consulta);

    $filas = mysqli_fetch_array($resultado);

    if($filas['id_cargo']==1){ //Administrador
        header("location: ../admin");

    }else
    if($filas['id_cargo']==2){ // Alumno
        header("location: ../encuesta");
    }
    
    else
    if($filas['id_cargo']==3){ // Maestro
        header("location: ../admin");
    } 
    
    else{
        echo ' 
        <script>
            alert("Usuario no existe, favor de verificar los datos introducidos");
            window.location = "login"
        </script>
    ';
    session_destroy();
    die();
    exit();
    }

?>