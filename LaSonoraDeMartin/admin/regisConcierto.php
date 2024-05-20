<?php
include("config.php");
include("session.php");

$titulo = $_POST['titulo'];
$fechaHs = $_POST['fechaHs'];
$lugarDia = $_POST['lugarDia'];
$linkEntradas = $_POST['linkEntradas'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO users(titulo, fechayHs, lugarDia, linkEntradas,descripcion) 
VALUES('$titulo', '$fechaHs', '$lugarDia', '$linkEntradas' ,'$descripcion')";
if(mysqli_query($mysqli, $sql)){
    echo '<script language="javascript">';
	echo 'alert("Nuevo usuario agregado");';
	echo 'window.location="index.php";';
	echo '</script>';
	
} else {
	echo '<script language="javascript">';
	echo 'alert("Usuario duplicado!");';
	echo 'window.location="registration.php";';
	echo '</script>';
}
?>