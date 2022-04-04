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

$conn=new PDO('mysql:host=localhost; dbname=ut', 'root', 'root') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  upload where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"../../upload/".$fname);
 if($move){
 	$query=$conn->query("insert into upload(name,fname)values('$name','$fname')");
	if($query){
	header("location:subirReporteFinal");
	}
	else{
	die(mysql_error());
	}
 }
}
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="Img/favicon.png" type="image/x-icon">

        <!-- ===== CSS ===== -->
       <!-- ===== CSS ===== -->
       <link rel="stylesheet" href="css/navbar.css">
        <link rel="stylesheet" href="css/subir.css">
        <title>Inicio</title>

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">


        <title>FORMAC-30 Reporte Avance del proyecto</title>

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

        <div class="row-fluid">
    <div class="span12">
        <div class="container">
            <br />
            <h1>
                <p>Subir Reporte Final Estadias</p>
            </h1>
            <br />
            <br />
            <form enctype="multipart/form-data" action="" name="form" method="post">
                Seleccione Archivo
                <input type="file" name="file" id="file" /></td>
                <input type="submit" name="submit" id="submit" value="Subir" />
            </form>
            <br />
            <br />
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                <thead>
                    <tr>
                        <th width="90%" align="center">Archivos</th>
                    </tr>
                </thead>
                <?php
			$query=$conn->query("select * from upload order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
                    <tr>

                        <td>
                            &nbsp;
                            <?php echo $name ;?>
                        </td>
                        <td>
                        </td>
                    </tr>
                    <?php }?>
            </table>
        </div>
    </div>
</div>


        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


        <!-- ===== MAIN JS ===== -->
        <script src="Js/navbar.js"></script>

        
    </body>

    </html>