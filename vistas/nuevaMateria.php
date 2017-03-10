<html>
	<head>
		<title>	Desafio </title>
		
		<!-- Esta es la forma de levantar archivos de CSS -->
		<link rel="stylesheet" href="../css/estilos.css">
		
		<!-- Esta es la forma de levantar archivos JS -->
		<script type="text/javascript" src="../js/jquery.min.js"></script>
		
	</head>
	
	<body>
		<h1 class="titulos"> 
			Bienvenido al Desafio! 
		</h1>

		<form>
			<select name="carrera" id="carrera">
			<?php

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'desafio';

			$conn = new mysqli($host,$user,$pass,$db);

			$sql = "SELECT id,nombre FROM carreras";

			
			$result = $conn->query($sql);


			if ($result->num_rows > 0) {
			
				while($row = $result->fetch_assoc()) {

					
					echo '<option value='.$row['id'].'>'.$row['nombre'].'</option>';
					}
				
			}
				else {

	    echo "0 results";

	}
	$conn->close();

				?>	
						</select>
		
		


		<a href="home.php">Volver</a>
	</body>
</html>
