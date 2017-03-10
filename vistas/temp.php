<?php
		$host = 'localhost';
		$user = 'root';
		$pass = '';
		$db = 'desafio';

		$conn = new mysqli($host,$user,$pass,$db);

		
		$sql = "INSERT INTO 
					materias (carrera_id, nombre, descripcion, carga_horaria)
				VALUES 
					(".   'John', 'Doe', 'john@example.com'      .")";

		if ($conn->query($sql) === TRUE) {
		    echo "Materia agregada!";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();

		?>*/
