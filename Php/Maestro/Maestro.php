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
$conn1=new PDO('mysql:host=localhost; dbname=ut', 'root', 'root') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn1->query("SELECT * FROM  tb_contrato_laboral where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn1->query("SELECT * FROM  tb_contrato_laboral where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"../../upload/".$fname);
 if($move){
 	$query=$conn1->query("insert into tb_contrato_laboral(name,fname)values('$name','$fname')");
	if($query){
	header("location:SubirContrato");
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
    <link rel="stylesheet" href="css/navbar.css">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
        <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

    


    <title>Maestro</title>

</head>

<body id="body-pd"> 

<?php 

    include 'navbarM.php';
?>

<div>
            <table id="tabla" class="table table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Fname</th>
                        <th>Name</th>
                        <th>Descargar</th>
                    </tr>
                </thead>
   
                    <tbody>
                    <?php 
                 include '../config.php';
                 $sql = "SELECT id, fname, name FROM tb_contrato_laboral order by id asc";
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

                        <?php
   $query=$conn1->query("select * from tb_contrato_laboral order by id desc");
        while($row=$query->fetch()){
            $name=$row['name'];
        
   ?>
                       <td>
                &nbsp;<?php echo $name ;?>
            </td>
            <td>
                <button class="alert-success"><a href="../../subir.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Descargar</a></button>
            </td>
                    
                    </tr>
                    <?php                    
                    }}
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