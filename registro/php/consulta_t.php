<?php
	include "conexion.php";
 	include "conexiondb.php";
	$consultar_u= mysqli_query($link,"SELECT * FROM usuarios");
	$uno=1;
 ?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" href="../css/consulta_t.css">
</head>
<body>
	<div>
			<table width="70%" border="1">
				<thead>
					<tr class="table-head">
						<th><h3><center>Nombre</center></h2></th>
						<th><h3><center>Apellido</center></h2></th>
						<th><h3><center>Correo</center></h2></th>
						<th><h3><center>Numero celular</center></h2></th>
						<th><h3><center>Numero de documento</center></h2></th>
						<th><h3><center>Acudiente</center></h2></th>
						<th><h3><center>Accion</center></h2></th>

					</tr>
				</thead>
				<tbody>


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
 					echo "<td>";
		 							echo "<div class='editar_y_eliminar'>";
					 				echo "<button class='editar' name='Editar' value='EDITAR'>";
									?>
									<a href="editar.php?id=<?php echo $consulta['id'];?>">EDITAR</a>
											</button>
									</button>
								<?php
									echo 	"&nbsp &nbsp";

									echo	"<button class='eliminar' type='button' name='Eliminar' value='ELIMINAR'>"
?>
									<a href="eliminar.php?id=<?php echo $consulta['id'];?>&nombre=<?php echo $consulta['nombre']; ?>">ELIMINAR</a>
											</button>
<?php
									echo "</div>";
	 							echo "</td>";
 					echo "</tr>";
					}
?>

</tbody>
 		 	</table>



	</div>
<br>
	<button class="volver" type="button" name="button" onclick="location.href='../consulta.html'">Volver atras</button>


</body>
</html>
