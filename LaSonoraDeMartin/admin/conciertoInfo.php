<?php
	include("session.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 
</head>
<body>
<div class="icon-bar">
  <a href="home.php"><i class="fa fa-home"></i></a> 
  <a href="users.php"><i class="fa fa-user"></i></a> 
  <a class="active" href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Registrarse</h2>
<hr/>
<form action="regisConcierto.php" method="POST">
  <div class="container">
    <input type="text" placeholder="Titulo" name="titulo" required>
    <input type="text" placeholder="Fecha Y Hora" name="fechaHs" required>
    <input type="text" placeholder="Lugar Y Direccion" name="lugarDia" required>
    <input type="text" placeholder="Link de las entradas" name="linkEntradas" required>
    <input type="text" placeholder="Descripcion" name="descripcion" required>
    <div class="clearfix">
        <button type="submit" class="signupbtn">Registrarse</button>
	      <button type="reset" class="cancelbtn">Cancelar</button>
    </div>
  </div>
</form>