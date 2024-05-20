<?php
include("config.php");
include("session.php");

$id = $_POST['idConcierto'];
$titulo = $_POST['titulo'];
$fechaHs = $_POST['fechaHs'];
$lugarDia = $_POST['lugarDia'];
$linkEntradas = $_POST['linkEntradas'];
$descripcion = $_POST['descripcion'];
 

$sql = "UPDATE conciertos SET titulo='$titulo', fechayHs='$fechaHs', lugarDia='$lugarDia', linkEntradas='$linkEntradas', descripcion='$descripcion' WHERE idConcierto ='$id'";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Registro actualizado exitósamente");';
	echo 'window.location="/admin/home.php";';
	echo '</script>';
	
} else {
	ini_set('error_reporting', E_ALL);
}
?>