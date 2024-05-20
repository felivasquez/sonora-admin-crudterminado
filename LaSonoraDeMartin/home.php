
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La sonora de Martin</title>
  <link rel="stylesheet" href="style.css">
</head>
<style>
  *{
    margin:0;
    padding: 0;
    box-sizing: border-box;
  }
  section{
    width: 100%;
    min-height: 100vh;
    height: auto;
    display: flex;
    flex-direction:column;
  }
  .containerConcerts{
    text-align: center;
  }
  .containerConcerts li{
    border:2px black orange;
    list-style: none;
  }
  
  .infoConcierto{
    text-align: start;
  }  

  .containerConcerts li a{
    color: white;
    background-color: orange;
    font-weight: 500;
    border-radius: 0.5rem;
    font-size: 1rem;
    line-height: 1rem;
    padding-left: 2rem;
    padding-right: 2rem;
    padding-top: 0.7rem;
    padding-bottom: 0.7rem;
    cursor: pointer;
    text-align: center;
    margin-right: 0.5rem;
    display: inline-flex;
    align-items: center;
    border: none;
  }
</style>
<body>
  <div class="allBlack">
    <ul>
      <li><a href="">Inicio</a></li>
      <li><a href="">Nosotros</a></li>
    </ul>
  </div>

  <section>
  </section>
  <section>
    <div class="container">
      <?php
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
          include("admin\config.php");
          $filter_result = mysqli_query($mysqli, $query);
          return $filter_result;
        }
      ?>
      <form method="POST">
        <input type="search" name="valueToSearh" placeholder="Búsqueda">
        <button type="submit" class="signupbtn" name="search" >Buscar</button>
      </form>
      <div>
        <?php
        echo "<ul class='containerConcerts'>";
        while($row = mysqli_fetch_array($result))
        {
          echo "<li>";
            echo "<div class='infoConcierto'>";
            echo "<h2>" . $row['titulo'] . "</h2>";
            echo "</div>";
            echo "<div class='infoConcierto'>";
            echo "<p>" . $row['fechayHs'] . "</p>";
            echo "</div>";
            echo "<div class='infoConcierto'>";
            echo "<a href='". $row['linkEntradas'] . "'>Entradas</a>";
            echo "</div>";
          echo "</li>";
        }
        echo "</ul>";
        ?>
    </div>
  </section>
  <section>
  </section>
  
</body>
</html>