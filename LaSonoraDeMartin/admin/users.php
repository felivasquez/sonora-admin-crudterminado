<?php
	include("session.php");
	
	if(isset($_POST['search']))
	{
		$valueToSearh = $_POST['valueToSearh']; 
		$query = "SELECT * FROM conciertos WHERE titulo LIKE '%".$valueToSearh."%' OR descripcion LIKE '%".$valueToSearh."%'";
		$result = filterRecord($query);
	}
	else
	{
		$query = "SELECT *FROM conciertos";
		$result = filterRecord($query);
	}
	
	function filterRecord($query)
	{
		include("config.php");
		$filter_result = mysqli_query($mysqli, $query);
		return $filter_result;
	}	
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/mystyle1.css" /> 

</head>
<body>

<div class="icon-bar">
  <a href="\admin\home.php"><i class="fa fa-home"></i></a> 
  <a class="active" href="users.php"><i class="fa fa-user"></i></a> 
  <a href="registration.php"><i class="fa fa-registered"></i></a>
  <a href="logout.php"><i class="fa fa-power-off"></i></a> 
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<h2>Usuarios</h2>
<hr/>

<div class="container">

<form action="" method="POST">
<input type="search" name="valueToSearh" placeholder="Búsqueda">
<button type="submit" class="signupbtn" name="search" >Buscar</button>
</form>
<div>
		<?php
		echo "<ul>";
		while($row = mysqli_fetch_array($result))
		{
			echo "<li>";
				echo "<div class=''>";
					echo "<h2>" . $row['titulo'] . "</h2>";
				echo "</div>";
				echo "<div class=''>";
					echo "<p>" . $row['fechayHs'] . "</p>";
				echo "</div>";
				echo "<div class=''>";
					echo "<a href=''>" . $row['descripcion'] . "</a>";
				echo "</div>";
			echo "</li>";
			echo "<a href='edit.php?id=".$row['idConcierto']."'><img src='./images/icons8-Edit-32.png' alt='Edit'></a>";
			echo "<a href='delete.php?id=".$row['idConcierto']."'><img src='./images/icons8-Trash-32.png' alt='Delete'></a>";
		}
		echo "</ul>";
		?>
</div>
</body>
</html> 