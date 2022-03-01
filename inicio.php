<?php

session_start();


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/img/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">  
	  <link rel="stylesheet" href="estilos.css">
    

    <title>Ejemplos</title>  
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header">Bienvenido <?php echo $_SESSION["usuario"]?></div>
        <div class="card-body">
        <form id="form1" action="principal.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="apellido">Apellidos</label>
                      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="col-md-4 mb-3">
                      <label for="CorreoI">Correo Institucional</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="CorreoI" type="text" class="form-control" id="CorreoI" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="CorreoP">Correo Personal</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="CorreoP" type="text" class="form-control" id="CorreoP" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="Tel">Telefono De Casa</label>
                      <input name="Tel" type="text" class="form-control" id="Tel" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="Celular">Celular</label>
                      <input name="Celular" type="text" class="form-control" id="Celular" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>

                  <div class="form-group">
                  </div>

                  <div class="form-row">
                      <div class ="form-row">
                        Cuentas con lugar para hacer estadias?
                      </div>
                      &nbsp &nbsp &nbsp &nbsp
                    <div class="form-check form-check-inline">
                      <input class="form-check-input-row" type="radio"  name="inlineRadioOptions" id="inlineRadio1" onclick="mostrarText()">
                      <label class="form-check-label" for="inlineRadio1">Si &nbsp &nbsp</label>
                    </div>

                    <div class="form-check form-check-inline">
                      <input class="form-check-input-row" type="radio"  name="inlineRadioOptions" id="inlineRadio2" onclick="ocultarText()">
                      <label class="form-check-label" for="inlineRadio2">No</label>
                    </div>
                  </div>

                  
  

      <style type="text/css">
        #mostrar{
          display: none;
        }
      </style>

      </style>
                <div class="form-row" id="mostrar">
                  <div class="col-md-4 mb-3">
                      <label for="nEmpresa">Nombre de la empresa</label>
                      <input name="nEmpresa" type="text" class="form-control" id="nEmpresa" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  <div class="col-md-4 mb-3">
                      <label for="DirEmpre">Direccion de la empresa</label>
                      <input name="DirEmpre" type="text" class="form-control" id="DirEmpre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  <div class="col-md-4 mb-3">
                      <label for="NomSupervisor">Nombre del supervisor</label>
                      <input name="NomSupervisor" type="text" class="form-control" id="NomSupervisor" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  <div class="col-md-4 mb-3">
                      <label for="TelEmpresa">telefono de la empresa</label>
                      <input name="TelEmpresa" type="text" class="form-control" id="TelEmpresa" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  <div class="form">
                    <div class="col-md-4 mb-3">
                      <label for="CorreoEmpresa">Correo de la empresa</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                          </div>
                          <input name="CorreoEmpresa" type="text" class="form-control" id="CorreoEmpresa" placeholder="" aria-describedby="inputGroupPrepend" required>
                          <div class="valid-feedback">¡Ok válido!</div>
                        <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>  
                  <div class="col-md-4 mb-3">
                      <label for="NombreProyecto">Nombre del proyecto</label>
                      <input name="NombreProyecto" type="text" class="form-control" id="NombreProyecto" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  <div class="form-floating">
                      <label for="floatingTextarea2">Objetivo del proyecto</label>
                      <textarea class="form-control" placeholder="Objetivo del proyecto" name="floatingTextarea2" id="floatingTextarea2" style="height: 100px"></textarea>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                  </div>
                  &nbsp &nbsp &nbsp &nbsp 
                  <div class="col-md-4">
                  <label for="inputState">Selecciona tu asesor de estadia</label>
                    <label for="inputState" class="form-label">Asesor</label>
                    <select id="inputState" class="form-select">
                      <option selected>Elegir...</option>
                      <option value="1">Maestro1</option>
                      <option value="2">Maestro2</option>
                      <option value="3">Maestro3</option>
                    </select>
                  </div>
                  &nbsp &nbsp &nbsp &nbsp 
                </div>
                  
            
                              
                  <button id="Mostrarbtn" class="btn btn-primary" type="submit">Enviar</button>
                </form>
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>   	
    <script src="codigo.js"></script>
    <script src="Funcion.js"></script> 		
  </body>
</html>