<?php
	include "conexion.php";
 	include "conexiondb.php";
	$consultar_u= mysqli_query($link,"SELECT * FROM usuarios");
 ?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/consulta_t.css">
</head>
<body>
	<div>
			<table width="100%" border="1">
					<tr>
						<td><h3><center>Nombre</center></h2></td>
						<td><h3><center>Apellido</center></h2></td>
						<td><h3><center>Correo</center></h2></td>
						<td><h3><center>Numero celular</center></h2></td>
						<td><h3><center>Numero de documento</center></h2></td>
						<td><h3><center>Acudiente</center></h2></td>
					</tr>

<?php
// Hacer consulta
 	include "conexion.php";
 	include "conexiondb.php";
 	while ($consulta = mysqli_fetch_array($consultar_u)) {

					echo "<tr>";
					echo "<td>".$consulta['nombre']."</td>";
					echo "<td>".$consulta['apellido']."</td>";
					echo "<td>".$consulta['correo']."</td>";
					echo "<td>".$consulta['numero_de_celular']."</td>";
					echo "<td>".$consulta['numero_de_documento']."</td>";
					echo "<td>".$consulta['acudiente']."</td>";
					echo "</tr>";
					}
?>
 		 	</table>


	</div>


</body>
</html>
