<html>

  <head>
    <meta charset="utf-8">

    <title>AW Mostrar2</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/estil.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">

       <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">AW AV2</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Index</a></li>
			  <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mostrar<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="mostrar1.php">Mostrar1</a></li>
                  <li class="dropdown-header"></li>
                  <li><a href="mostrar2.php">Mostrar2</a></li>
                </ul>
              </li>
              <li><a href="insertar.php">Insertar</a></li>
              <li><a href="modificar.php">Modificar</a></li>
			  <li><a href="eliminar.php">Eliminar</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	  
	   <div class="jumbotron">
        <h1>Titols per Equip</h1>
		<h3>Mostrar2</h3>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "futbol";

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);

			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			} 
			echo "Conectado";
			
			$sql = "SELECT codi, nom, localitat, web, escut FROM equips";
			$sql2 = "SELECT codi, nom, codiequip FROM titols";
			$result = $conn->query($sql);
			$result2 = $conn->query($sql2);
			
			if ($result ->num_rows > 0 and $result2 ->num_rows > 0 ) {
				echo "<table class=\"table table-striped table-dark table-bordered\">";
				echo "<th>Nom</th> <th>Localitat</th> <th>Web</th> <th>Escut</th> <th>Tituls</th>";
				while($row=$result->fetch_assoc() and $row2=$result2->fetch_assoc() ){ 
						
					echo "<tr><td>". $row["nom"]. "</td> <td>". $row["localitat"]. "</td><td><a target=\"_blank\" href='". $row["web"]. "'>". $row["web"]."</a></td><td><img src='". $row["escut"]. "'></td><td>". $row2["nom"]. "</td></tr>"; 
			}
			echo "</table>";
			}
			else {
			echo "0 results";
			} $conn->close();
			?>
        <p>This example is a quick exercise to illustrate how the default, static navbar and fixed to top navbar work. It includes the responsive CSS and HTML, so it also adapts to your viewport and device.</p>
      </div>
	  
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>