<!DOCTYPE html>
<html>
	<head>
		<title>Test</title>
		<?php 
			$variable = 2;
		?>
	</head>
	<body>
		<h1>Hola mundo</h1>
		<?php 
			echo "<h2>Hola " . $variable . "</h2>";
		?>
		<!--<ul>-->
			<?php
				//$array = array("foo","segundo"=>"bar","makako","monkey");
				$array = array(
					array('nombre' => 'Pepe', 'apellidos' => 'Perez'),
					array('nombre' => 'Paco', 'apellidos' => 'Diaz'),
					array('nombre' => 'Ruben', 'apellidos' => 'Zuñiga'),
					array('nombre' => 'Carlota', 'apellidos' => 'Mateo'),
					array('nombre' => 'Bruno', 'apellidos' => 'Garcia'),
					array('nombre' => 'Lucas', 'apellidos' => 'Unknown')
				);
				$x = 3;
				$y = 5;
				$res;
				echo "suma: $x + $y" ;
				sumar($x,$y,$res);
				echo "<br> resultado: ".$res;
				// print_r($array);
				// $len = count($array);
				// for ($i=0; $i < $len; $i++) { 
				// 	echo "<li>" . $array[$i] . "</li>";
				// }

				// foreach ($array as $num => $text) {
				// 	echo "$num - $text <br>";
				// }

				// foreach ($array as $num => $text) { //si pusieramos &texto cambiariamos los valores del array
				// 	// $text = "hola";
				// 	echo "<li> $text </li>";
				// }
				// print_r($array)
			?>
		<!--</ul>-->
		<table style="border: solid 1px black;">
			<tr>
				<th>Nombre</th>
				<th>Apellido</th>
			</tr>
			
			<?php 
			foreach ($array as $num => $persona){
				echo "<tr>
						<td>$persona[nombre]</td>
						<td>$persona[apellidos]</td>
					</tr>"
				;			
			}	
			?>
			

		</table>
	</body>
</html>

<?php 
	function sumar($a, $b, &$res){
		$res=$a+$b;
	}


?>