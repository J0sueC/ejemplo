<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','ut');

/* Connect to MySQL Database*/
$conn = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

/*
if($conn){
    echo 'conectado exitosamente a la bd';
}else
echo ' no se a podido conectar a la bd';
*/
?>