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



        <title>Ver Asesores</title>

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

                        <a href="VerAsesores" class="nav__link">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Ver Asesores</span>
                        </a>



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
            <table id="tabla" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
                 include '../config.php';
                 $sql = "SELECT id, nombre, apellidos, correo, id_cargo FROM asesores order by id asc";
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
            var tabla = document.querySelector("#tabla");
            var dataTable = new DataTable(tabla);
        </script>

        <!-- Mostrar el usuario <?php echo '<span>'.$_SESSION["usuario"].'</span>'; ?>  -->
    </body>

    </html>