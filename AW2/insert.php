<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "futbol";

	$nom = $_REQUEST['nom'];
	$localitat = $_REQUEST['localitat'];
	$web = $_REQUEST['web'];

	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
		
			$sql = "INSERT INTO equips (nom, localitat, web) 
					VALUES(\" . $nom . \",\" . $localitat . \",\". $web . \")";

			if ($conn->query($sql) === TRUE) {
				echo "Registre creat amb èxit, torna a  <a href=\"insertar.php\"> Insertar <a>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>