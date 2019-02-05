<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "futbol";

	$codi = $_REQUEST['codi'];

	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	
	// Check connection
	if ($conn->connect_error) {
		die("Connexió KO: " . $conn->connect_error);
	} else {
			if ($codi!=""){
			$sql = "DELETE FROM equips
					WHERE codi = " . $codi;
			}

			if ($conn->query($sql) === TRUE) {
				echo "Registre eliminat amb èxit, torna a <a href=\"eliminar.php\"> Eliminar <a>";
			} else {
				echo "Error: " . $sql . "<br>" . $conn->error;
			}

		$conn->close();
	}
?>