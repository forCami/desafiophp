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
		<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Desafio PHP</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="home.php">Inicio</a></li>
      <li class="active"><a href="#">Alta de materias</a></li>
    </ul>
  </div>
</nav>
		<h1 class="titulos"> 
			Alta de materias
		</h1>
		<div class="container">
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
<form name="formulario" method="post" action="resultado.php">
			<div class="form-group row">
			<div class="col-sm-1"><label for="carrera">Carrera: </label></div>
			<div class="col-sm-3"><select name="carrera" id="carrera" class="form-control" disabled>
			<option><?php echo $carrera;?></option>
						</select></div>
						</div>
						<div class="form-group row">
							<div class="col-sm-1"><label for="nombreMateria">Nombre de la materia: </label></div>
							<div class="col-sm-9"><input type="text" placeholder="Inserte nombre" name="nombreMateria" class="form-control" value="<?php echo $nombreMateria;?>" disabled></div>
						</div>
						<div class="form-group row">
	  						<div class="col-sm-1"><label for="comment">Descripcion:</label></div>
							<div class="col-sm-9"><textarea cols="51" rows="5" name="descripcion" placeholder="Inserte descripcion" maxlength="255" class="form-control" disabled><?php echo $descripcion;?></textarea></div>
						</div>
						</br>
						<div class="form-group row">
							<div class="col-sm-1"><label for="comment">Carga horaria:</label></div>
							<div class="col-sm-9">
								<select name="cargaHoraria" id="cargaHoraria" class="form-control" disabled>
									<option selected><?php echo $cargaHoraria?></option>
									</select>
							</div>
						</div>	
							<!-- validar todo con JS... si hay error no se sigue-->

		</form>

		<a href="home.php"><button type="button" class="btn btn-warning">Volver</button></a>
		</div>
	</body>
</html>
