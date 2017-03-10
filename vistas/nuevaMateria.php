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

		<form name="formulario" method="post" action="resultado.php">
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

	    echo "0 resultados";

	}
	$conn->close();

				?>
						</select>
						<input type="text" placeholder="Inserte nombre" name="nombreMateria">
						<textarea cols="51" rows="5" name="descripcion" placeholder="Inserte descripcion" maxlength="255"></textarea>
						<select name="cargaHoraria" id="cargaHoraria">
							<option value="2">2</option>
							<option value="4">4</option>
							<option value="6">6</option>
							<option value="8">8</option>
							<option value="10">10</option>
							</select>
							<!-- validar todo con JS... si hay error no se sigue-->
		
		<button type="submit" value="Submit">Enviar</button>
		<button type="reset" value="Reset">Resetear</button>
		</form>
	<br>

		<a href="home.php">Volver</a>
	</body>
</html>
