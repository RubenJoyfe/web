<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
	</head>
	<body>
		<center>
			<?php 
			$user = $_POST["usuario"];
			$pass = $_POST["pass"];
			if ($user=="admin" && $pass=="1234") {
				echo "
					<h1>CORRECTO</h1>
					<hr>
					 Hola $user <br>
					 Contraseña: $pass
				 ";
			// Conectando, seleccionando la base de datos
			$link = new mysqli('localhost', 'root', '1234')
			    or die('No se pudo conectar: ' . mysql_error());
			echo 'Connected successfully';
			mysql_select_db('ifkamhar') or die('No se pudo seleccionar la base de datos');

			// Realizar una consulta MySQL
			$query = 'SELECT * FROM funcionario';
			$result = mysql_query($query) or die('Consulta fallida: ' . mysql_error());

			// Imprimir los resultados en HTML
			echo "<table>\n";
			while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
			    echo "\t<tr>\n";
			    foreach ($line as $col_value) {
			        echo "\t\t<td>$col_value</td>\n";
			    }
			    echo "\t</tr>\n";
			}
			echo "</table>\n";

			// Liberar resultados
			mysql_free_result($result);

			// Cerrar la conexión
			mysql_close($link);

			}
			else {
				echo "
					<h1>INCORRECTO</h1>
					<hr>
					Usuario o Contraseña incorrectos
				";
			}
			?>
			

		</center>
	</body>
</html>

<?php 


?>