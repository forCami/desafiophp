<html>
	<head>
		<title>	Desafio </title>

		<meta charset="UTF-8">

		<!-- Esta linea es importante para que la pÃƒÂ¡gina sea responsive: -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
      <li><a href="home.php">Home</a></li>
      <li class="active"><a href="#">Alta de materias</a></li>
    </ul>
  </div>
</nav>
		<h1 class="titulos"> 
			Alta de materias
		</h1>
		<div class="container">
		<form name="formulario" method="post" action="resultado.php">
			<div class="form-group row">
			<div class="col-sm-1"><label for="carrera">Carrera: </label></div>
			<div class="col-sm-3"><select name="carrera" id="carrera" class="form-control">
			
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

	    echo "0 resultados";

	}
	$conn->close();

				?>
						</select></div>
						</div>
						<div class="form-group row">
							<div class="col-sm-1"><label for="nombreMateria">Nombre de la materia: </label></div>
							<div class="col-sm-9"><input type="text" placeholder="Inserte nombre" name="nombreMateria" class="form-control"></div>
						</div>
						<div class="form-group row">
	  						<div class="col-sm-1"><label for="comment">Descripcion:</label></div>
							<div class="col-sm-9"><textarea id="desc" cols="51" rows="4" name="descripcion" placeholder="Inserte descripcion" maxlength="255" class="form-control"></textarea></div>
						</div>
						</br>
						<div class="form-group row">
							<div class="col-sm-1"><label for="comment">Carga horaria:</label></div>
							<div class="col-sm-9">
								<select name="cargaHoraria" id="cargaHoraria" class="form-control">
									<option value="2">2</option>
									<option value="4">4</option>
									<option value="6">6</option>
									<option value="8">8</option>
									<option value="10">10</option>
									</select>
							</div>
						</div>	
							<!-- validar todo con JS... si hay error no se sigue-->
		<center>
		<button id="env" type="submit" value="Submit" class="btn btn-default">Enviar</button>
		<button type="reset" value="Reset" class="btn btn-warning">Resetear</button>
		</center>
		</form>
	<br>

		<a href="home.php">Volver</a>
		</div>
	</body>
</html>

<script type="text/javascript" src="../js/nuevaMateria.js"></script>