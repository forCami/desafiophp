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

			<?php

			 $carrera = $_POST['carrera'];
			 $nombreMateria = $_POST['nombreMateria'];
			 $descripcion = $_POST['descripcion'];
			 $cargaHoraria = $_POST['cargaHoraria'];

			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'desafio';

			$conn = new mysqli($host,$user,$pass,$db);

			$sql = "INSERT INTO materias (carrera_id,nombre,descripcion,carga_horaria) VALUES ('$carrera','$nombreMateria','$descripcion','$cargaHoraria'  )";
			
			
			if ($conn->query($sql) === TRUE) {
			    echo "New record created successfully";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			?>
	<br>

		<a href="home.php">Volver</a>
	</body>
</html>
