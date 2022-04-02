<?php

session_start();


include '../config.php';

$nombre = $_POST['txtnombre'];
$apellidoPat = $_POST['txtapellidoPat'];
$apellidoMat = $_POST['txtapellidoMat'];
$correo = $_POST['txtcorreo'];
$rol = $_POST['txtid_cargo'];



$consulta = "INSERT INTO alumnos (nombre, apellido_paterno, apellido_materno, correo, id_cargo) 
VALUES ('$nombre', '$apellidoPat' ,'$apellidoMat' ,'$correo', '$rol')";

$resultado = mysqli_query($conn,$consulta);

echo '
<script> 
    alert("Se a agregado correctamente");
    window.location = "VerAlumnosA";
</script>
';

mysqli_close($conn);

?>