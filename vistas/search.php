<html>
	<head>
		<title>	Desafio </title>

		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Esta es la forma de levantar archivos JS -->
		<script type="text/javascript" src="../js/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<!-- Esta es la forma de levantar archivos de CSS -->
		<link rel="stylesheet" href="../css/estilos.css">
		
	</head>
	
	<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Desafio PHP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="nuevaMateria.php">Alta de materias</a></li>
    </ul>
  </div>
</nav>
		<h1 class="titulos"> 
			Bienvenido al Desafio! 
		</h1>
<div class="container">
	
		
		<?php

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'desafio';

		$palabraClave = $_POST['busqueda']; //Contenido a buscar

		$conn = new mysqli($host,$user,$pass,$db);

		$sql = "SELECT
					materias.id as materiasID,
					materias.carrera_id,
					materias.nombre as materiasNombre, /*defino un alias ya que hay dos columnas con el mismo nombre*/
					materias.descripcion,
					materias.carga_horaria,
					carreras.id,
					carreras.nombre 
				FROM 
					materias,carreras
				WHERE 
					materias.carrera_id = carreras.id AND
					materias.nombre LIKE '%{$palabraClave}%'";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

	    echo "<center><div><table border=\"0\" class=\"table table-striped\"><tr><th>Nombre</th><th>Descripcion</th><th>Carga Horaria</th><th>Carrera</th><th>Opciones</th></tr>";


	    while($row = $result->fetch_assoc()) {


	         echo "<tr><td><center>".$row["materiasNombre"]."</center></td><td> ".$row["descripcion"]."</td><td><center>".$row["carga_horaria"]." horas</center></td><td>".$row["nombre"]."</td><td><a href=\"editarMateria.php\"><input type=\"submit\" class=\"btn btn-primary\" method=\"post\" action=\"ejemploPost.php\" value=\"Editar\"></a> <button class=\"btn btn btn-danger\" type=\"submit\" name=\"remove\" value=\"{$row['materiasID']}\" onClick=\"return confirm('Desea eliminar?');\">Remove</button></tr>";

	    }

	    echo "</table></div></center>";

	} else {

	    echo "0 resultados";

	}

	if(isset($_POST['eliminar'])){
	
		$sql2= "DELETE FROM `materias` WHERE `materias`.`id` = {$_POST['eliminar']}";
		$result2 = $conn->query($sql2);
	}

	$conn->close();


		?>

		<a href="home.php">Volver</a>
		</div>
	</body>
</html>
