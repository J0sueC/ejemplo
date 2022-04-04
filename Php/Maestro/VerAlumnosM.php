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
    
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>



    <title>Ver Alumnos</title>

</head>

<body id="body-pd"> 

<?php 

    include 'navbarM.php';
?>
        <div>
            <table id="tabla1" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>


                    </tr>
                </thead>
                <tbody>
                    <?php 
                 include '../config.php';
                 $sql = "SELECT id, nombre, apellido_paterno, apellido_materno, correo, id_cargo FROM alumnos order by id asc";
                 $rta = mysqli_query($conn, $sql);
                 while($mostrar = mysqli_fetch_row($rta)){
                    ?>
                    <tr>
                        <td>
                            <?php echo $mostrar['0'] ?>
                        </td>
                        <td>
                            <?php echo $mostrar['1'] ?>
                        </td>
                        <td>
                            <?php echo $mostrar['2'] ?>
                        </td>
                        <td>
                            <?php echo $mostrar['3'] ?>
                        </td>
                        <td>
                            <?php echo $mostrar['4'] ?>
                        </td>

                    </tr>
                    <?php                    
                    }
                    ?>
                </tbody>
            </table>
        </div>

    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <!-- ===== MAIN JS ===== -->
    <script src="Js/navbar.js"></script>

    <script>
            var tabla = document.querySelector("#tabla1");
            var dataTable = new DataTable(tabla);
        </script>

      
</body>

</html>