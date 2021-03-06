<html>
		<head>
		<meta charset="utf-8">

		<title>AW Futbol</title>

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
		  
		  <!-- Carousel
		================================================== -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img class="first-slide" src="img/ft1.JPG" alt="First slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Example headline.</h1>
				  <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
				</div>
			  </div>
			</div>
			<div class="item">
			  <img class="second-slide" src="img/ft2.JPG" alt="Second slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>Another example headline.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			  </div>
			</div>
			<div class="item">
			  <img class="third-slide" src="img/ft3.JPG" alt="Third slide">
			  <div class="container">
				<div class="carousel-caption">
				  <h1>One more for good measure.</h1>
				  <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
				</div>
			  </div>
			</div>
		  </div>
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div><!-- /.carousel -->
			
			<!-- /.jumbotron -->
		   <div class="jumbotron">
			<h1>Modificar</h1>
			<form name="formulari1" method="post" action="modify.php">
			<table class="table table-hover"> 
			
				<div class="col-md-12">
				<tr>
						<td>Codi de fila a modificar: <input type="text" name="codi" value="">  </td>										
				</tr>
				</div>
				
								
				<div class="col-md-6">				
				<tr>
						<td> Nom: <input type="text" name="nom" value=""> </td>	
						
						<td> Localitat: <input type="text" name="localitat" value=""> </td>	
								
				</tr>
				</div>
								
				<div class="col-md-6">					
				<tr>
						<td>Web: <input type="text" name="web" value=""> </td>	
						
						<td>Escut: <input type="text" name="escut" value="">  </td>	
						
				</tr>
				</div>
				
			</table>
			<hr>
			<input type="submit" value="Modificar">
			</form>
               
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
			$result = $conn->query($sql);
			
			if ($result->num_rows > 0) {
				echo "<table class=\"table table-striped table-dark table-bordered\">";
				echo "<th>Codi</th> <th>Nom</th> <th>Localitat</th> <th>Web</th> <th>Escut</th>";
				while($row=$result->fetch_assoc()){ 
						
					echo "<tr><td>". $row["codi"]. "</td><td>". $row["nom"]. "</td> <td>". $row["localitat"]. "</td><td><a target=\"_blank\" href='". $row["web"]. "'>". $row["web"]."</a></td><td><img src='". $row["escut"]. "'></td></tr>"; 
			}
			echo "</table>";
			}
			else {
			echo "0 results";
			} $conn->close();
			?>
               
			<p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
		  </div>

		</div> <!-- /container -->


		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
		<script src="js/bootstrap.min.js"></script>
	  </body>
</html>