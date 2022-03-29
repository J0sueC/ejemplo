<?php

session_start();


include '../config.php';

$nombre = $_POST['txtnombre'];
$apellido = $_POST['txtapellido'];
$correo = $_POST['txtcorreo'];
$contrasena = $_POST['txtcontrasena'];
$rol = $_POST['txtid_cargo'];



$consulta = "INSERT INTO asesores (nombre, apellidos, correo, contrasena, id_cargo) 
VALUES ('$nombre', '$apellido' ,'$correo' ,'$contrasena', '$rol')";

$resultado = mysqli_query($conn,$consulta) or die("error de registro");

echo "registro exitoso";

mysqli_close($conn);

?>