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

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'desafio';

		$conn = new mysqli($host,$user,$pass,$db);

		$sql = "SELECT 
					materias.carrera_id,
					materias.nombre as materiasNombre, /*defino un alias ya que hay dos columnas con el mismo nombre*/
					materias.descripcion,
					materias.carga_horaria,
					carreras.id,
					carreras.nombre 
				FROM 
					materias,carreras
				WHERE 
					materias.carrera_id = carreras.id";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

	    echo "<center><div><table border=\"0\"><tr><th>Nombre</th><th>Descripcion</th><th>Carga Horaria</th><th>Carrera</th><th>Carga Horaria</th></tr>";


	    while($row = $result->fetch_assoc()) {


	         echo "<tr><td><center>".$row["materiasNombre"]."</center></td><td> ".$row["descripcion"]."</td><td><center>".$row["carga_horaria"]." horas</center></td><td>".$row["nombre"]."</td></tr>";

	    }

	    echo "</table></div></center>";

	} else {

	    echo "0 results";

	}

	$conn->close();

		?>

		<a href="nuevaMateria.php">Nueva materia</a>
	</body>
</html>
