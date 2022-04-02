<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME','ut');

/* Connect to MySQL Database*/
$conn =  mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);

/*
if($conn){
    echo '<script> 
            alert("Conectado a la Base de Datos Correctamente");
          </script>';
}else
    echo '<script> 
            alert("No se ha encontrado la Base De Datos");
          </script>';
*/

?>