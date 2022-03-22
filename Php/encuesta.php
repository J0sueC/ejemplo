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
    <title>Registration Form</title>
    <link rel="shortcut icon" href="Img/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Style_Enc.css">

</head>

<body>

    <div class="wrapper">
        <div class="title">
            Registration Form
        </div>
        <div class="form">
            <div class="inputfield">
                <label>Nombre</label>
                <input type="text" class="input">
            </div>
            <div class="inputfield">
                <label>Apellido</label>
                <input type="text" class="input">
            </div>
            <div class="inputfield">
                <label>Correo Institucional</label>
                <input type="email" class="input">
            </div>
            <div class="inputfield">
                <label>Correo Personal</label>
                <input type="email" class="input">
            </div>
            <div class="inputfield">
                <label>Telefono de casa</label>
                <input type="text" class="input">
            </div>
            <div class="inputfield">
                <label>Celular</label>
                <input type="text" class="input">
            </div>
            <div class="inputfield">
                <label>Cuentas con lugar para estadias?</label>
            </div>
            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" onclick="mostrar();">
                <label class="btn btn-outline-primary" for="btnradio1">Si</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off" onclick="ocultar();">
                <label class="btn btn-outline-primary" for="btnradio2">No</label>
            </div>
            <div class="inputfield">
                <!-- Espacio Vacio -->
            </div>

            <div id="form1">
                <div class="inputfield">
                    <label>Nombre de la empresa</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Direccion de la empresa</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Nombre del Supervisor</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Telefono de la empresa</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Correo de la empresa</label>
                    <input type="email" class="input">
                </div>
                <div class="inputfield">
                    <label>Nombre del proyecto</label>
                    <input type="text" class="input">
                </div>
                <div class="inputfield">
                    <label>Objetivo del proyecto</label>
                    <textarea class="form-control" placeholder="Objetivo del proyecto" name="floatingTextarea2" id="floatingTextarea2" style="height: 100px"></textarea>
                </div>
                <div class="inputfield">
                    <label for="inputState">Selecciona tu asesor de estadia</label>
                    <select id="inputState" class="form-select">
                      <option selected>Elegir...</option>
                      <option value="1">Maestro1</option>
                      <option value="2">Maestro2</option>
                      <option value="3">Maestro3</option>
                    </select>
                </div>
                <div class="inputfield">
                    <!-- Espacio Vacio -->
                </div>
            </div>

            <div class="inputfield">
                <a class="btn" href="inicio" role="button">Ingresar</a>
            </div>

        </div>
    </div>
    <style>
        #form1 {
            display: none;
        }
    </style>
    <!-- Scripts -->
    <script type="text/javascript">
        function mostrar() {
            document.getElementById('form1').style.display = 'block';
        }

        function ocultar() {
            document.getElementById('form1').style.display = 'none';
        }
    </script>

</body>

</html>