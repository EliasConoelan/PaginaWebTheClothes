<?php 
	$usuario = "root";
	$password = "CzHq2019A";
	$servidor = "localhost";
	$basededatos = "minimarket";
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta = "SELECT * FROM productos";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	echo "<table borde='2'>";
	echo "<tr>";
	echo "<th>id_producto</th>";
	echo "<th>nombreProd</th>";
	echo "<th>cantidad</th>";
	echo "<th>precioUnit</th>";
	echo "<th>imagen</th>";
	echo "<th>id_categoria</th>";
	echo "</tr>";
	while ($columna = mysqli_fetch_array( $resultado ))
	{
		echo "<tr>";
		echo "<td>" . $columna['id_producto'] . "</td>
				<td>" . $columna['nombreProd'] . "</td>
				<td>" . $columna['cantidad'] . "</td>
				<td>" . $columna['precioUnit'] . "</td>
				<td>" . $columna['imagen'] . "</td>
				<td>" . $columna['id_categoria'] . "</td>";
		echo "</tr>";
	}
	
	echo "</table>"; // Fin de la tabla
	
	// cerrar conexión de base de datos
	mysqli_close( $conexion);
?>
