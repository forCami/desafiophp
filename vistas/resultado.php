<html>
	<head>
		<title>	Desafio </title>
		
		<!-- Esta es la forma de levantar archivos de CSS -->
		<link rel="stylesheet" href="../css/estilos.css">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

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
			    echo "<div class=\"alert alert-success\">
  					<strong>Materia agregada correctamente</strong>
					</div>";
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}

			$conn->close();
			?>
	<br>

		<a href="home.php">Volver</a>
	</body>
</html>
