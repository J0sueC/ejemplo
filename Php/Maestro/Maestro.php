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
    <!-- Font Awesome -->
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    


    <title>Maestro</title>

</head>

<body id="body-pd"> 

<?php 

    include 'navbarM.php';
?>

<?php

include 'cardsM.php';

?>



    <!-- ===== IONICONS ===== -->
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>


    <!-- ===== MAIN JS ===== -->
    <script src="Js/navbar.js"></script>
    <script src="Js/gestor.js"></script>


</body>

</html>