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

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">

        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

        
    </head>

    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

    <script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

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

        <style>
            .well-small {
                padding: 9px;
                -webkit-border-radius: 3px;
                -moz-border-radius: 3px;
                border-radius: 3px;
            }
            
            
            .well {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #fff;
                border: 1px solid #e3e3e3;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
                box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
            }
            
        </style>

        <div class="well well-small">
            <div class="course-info-container" id="course-info-container-2242">
                <div class="media">
                    <div class="pull-left">
                        <div class="media-object">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="SubirContrato" class="">Contrato Laboral</a>
                        </h4>
                    </div>
                </div>
                <p class="text-muted">

                </p>
            </div>
        </div>
        <div class="well well-small">
            <div class="course-info-container" id="course-info-container-2242">
                <div class="media">
                    <div class="pull-left">
                        <div class="media-object">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="subirAvance" class="">FORMAC-30 Reporte Avance del proyecto</a>
                        </h4>
                    </div>
                </div>
                <p class="text-muted">

                </p>
            </div>
        </div>
        <div class="well well-small">
            <div class="course-info-container" id="course-info-container-2242">
                <div class="media">
                    <div class="pull-left">
                        <div class="media-object">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="subirControl" class="">FORM AC28A Control y seguimiento de estadias</a>
                        </h4>
                    </div>
                </div>
                <p class="text-muted">

                </p>
            </div>
        </div>
        <div class="well well-small">
            <div class="course-info-container" id="course-info-container-2242">
                <div class="media">
                    <div class="pull-left">
                        <div class="media-object">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="SubirEntrevista" class="">Entrevista Final del proyecto estadias</a>
                        </h4>
                    </div>
                </div>
                <p class="text-muted">

                </p>
            </div>
        </div>
        <div class="well well-small">
            <div class="course-info-container" id="course-info-container-2242">
                <div class="media">
                    <div class="pull-left">
                        <div class="media-object">
                        </div>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="subirReporteFinal" class="">Reporte Final Estadias</a>
                        </h4>
                    </div>
                </div>
                <p class="text-muted">

                </p>
            </div>
        </div>





        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>

        <!-- ===== MAIN JS ===== -->
        <script src="Js/navbar.js"></script>



    </body>

    </html>