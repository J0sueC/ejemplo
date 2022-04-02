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
        <link rel="stylesheet" href="css/subir.css">

       

        

        <title>Inicio</title>
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
                        <a href="inicio" class="nav__link active">
                            <ion-icon name="home-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Inicio</span>
                        </a>

                        <div class="nav__link collapse">
                            <ion-icon name="people-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Asesores</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="VerAsesores" class="collapse__sublink">Ver Asesores</a>
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

        <div class="principal">
            <form action="" id="form_subir">

                <div class="form-1-2">
                    <label for="">Archivo a subir:</label>
                    <input type="file" name="archivo" required>
                </div>

                <div class="barra">
                    <div class="barra_azul" id="barra_estado">
                        <span></span>
                    </div>
                </div>

                <div class="acciones">
                    <input type="submit" class="btn" value="Enviar">
                    <input type="button" class="cancel" id="cancelar" value="Cancelar">
                </div>

            </form>

        </div>
   
    

        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!-- ===== MAIN JS ===== -->
        <script src="js/subir.js"></script>
        <script src="Js/navbar.js"></script>

        

    </body>

    </html>