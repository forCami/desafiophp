<html>
	<head>
		<title>	Desafio </title>
		
		<meta charset="UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Esta es la forma de levantar archivos JS -->
		<script type="text/javascript" src="js/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.css"/>
		 
		<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.13/datatables.min.js"></script>

		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.dataTables.min.css"/>
		 
		<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>

		<!-- Esta es la forma de levantar archivos de CSS -->
		<link rel="stylesheet" href="css/estilos.css">
		
	</head>
	
	<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Desafio PHP</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li><a href="nuevaMateria.php">Alta de materias</a></li>
    </ul>
  </div>
</nav>
		<h1 class="titulos"> 
			Busqueda de las materias que contienen "<?php echo $_GET['busqueda'];?>"
		</h1>
<div class="container-fluid">
	
		<?php

		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'desafio';

		$palabraClave = $_GET['busqueda']; //Contenido a buscar

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
					(materias.carrera_id = carreras.id AND
					materias.nombre LIKE '%{$palabraClave}%') OR
					(materias.carrera_id = carreras.id AND
					materias.descripcion LIKE '%{$palabraClave}%') OR
					(materias.carrera_id = carreras.id AND
					carreras.nombre LIKE '%{$palabraClave}%')";

		$result = $conn->query($sql);

		if ($result->num_rows > 0) {

	    echo "<form method=\"post\" action=\"\"><center><div class=\"table-responsive\"><table border=\"0\" class=\"table table-striped \" id=\"tabla\"><thead><tr><th>Nombre</th><th>Descripcion</th><th>Carga Horaria</th><th>Carrera</th><th>Opciones</th></tr></thead>";


	    while($row = $result->fetch_assoc()) {

	         echo "<tr><td><center>".$row["materiasNombre"]."</center></td><td> ".$row["descripcion"]."</td><td><center>".$row["carga_horaria"]." horas</center></td><td>".$row["nombre"]."</td><td><a href=\"editarMateria.php\"><input type=\"submit\" class=\"btn btn-primary\" method=\"post\" action=\"ejemploPost.php\" value=\"Editar\"></a><button class=\"btn btn btn-danger\" type=\"submit\" name=\"remove\" value=\"{$row['materiasID']}\" onClick=\"return confirm('Desea eliminar?');\">Eliminar</button></tr>";
	    }

	    echo "</table></div></center></form>";
	} 

	else {

	    echo "<br><h3 class=\"texto\">0 resultados</h3><br><br>";
	}

		 if(isset($_POST['remove'])){
	     $id = (int)$_POST['remove'];
	     $removeQuery = "DELETE FROM `materias` WHERE `materias`.`id` = $id";
	     $result2 = $conn->query($removeQuery);
	     header("Location: search.php?busqueda={$palabraClave}");
 	}

	$conn->close();

		?>

		<a href="home.php"><button type="button" class="btn btn-warning">Volver</button></a>
		<a href="nuevaMateria.php"><button type="button" class="btn btn-info">Nueva materia</button></a>
		</div>
	</body>
</html>

<script type="text/javascript" src="js/home.js"></script>