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

	    echo "0 results";

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
