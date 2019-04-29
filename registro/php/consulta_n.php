<?php
include "conexion.php";
include "conexiondb.php";
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="../css/consulta_n.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="centro">
      <div class="busqueda">
        <form  action="consulta_n.php" method="post">
          <input class="consulta" type="number" name="CnumeroD" value="" placeholder="Numero de identificacion">
          <input class="Boton1" type="submit" name="boton1" value="Consultar">
          <input class="Boton2" type="button" name="" value="Volver atras" onclick="location.href='../consulta.html'">
        </form>
      </div>

      <table width="70%" border="1">
				<thead>
					<tr class="table-head">
						<th><h5><center>Nombre</center></h5></th>
						<th><h5><center>Apellido</center></h5></th>
						<th><h5><center>Correo</center></h5></th>
						<th><h5><center>Numero celular</center></h5></th>
						<th><h5><center>Numero de documento</center></h5></th>
						<th><h5><center>Acudiente</center></h5></th>
            <th><h5><center>Accion</center></h5></th>
					</tr>
				</thead>
        <tbody>

  </body>

<?php if (isset($_POST['boton1'])) {
  $CnumeroD=$_POST['CnumeroD'];
  $consultaC=mysqli_query($link,"SELECT * FROM usuarios WHERE numero_de_documento=$CnumeroD") or die ( "<tr>".
  "<td>"."El "."</td>".
   "<td>"."Usuario "."</td>".
   "<td>"." que ha "."</td>".
 "<td>"." ingresado no "."</td>".
   "<td>"."esta"."</td>".
   "<td>"."registrado"."</td>".
   "</tr>");
  $consultaC_array=mysqli_fetch_array($consultaC);

if ($consultaC_array['numero_de_documento']==$CnumeroD) {
  echo "<tr>";
  echo "<td>".$consultaC_array['nombre']."</td>";
  echo "<td>".$consultaC_array['apellido']."</td>";
  echo "<td>".$consultaC_array['correo']."</td>";
  echo "<td>".$consultaC_array['numero_de_celular']."</td>";
  echo "<td>".$consultaC_array['numero_de_documento']."</td>";
  echo "<td>".$consultaC_array['acudiente']."</td>";
  echo "</tr>";
}
else {
  echo "<tr>";
  echo "<td>"."El "."</td>";
  echo "<td>"."Usuario "."</td>";
  echo "<td>"." que ha "."</td>";
  echo "<td>"." ingresado no "."</td>";
  echo "<td>"."esta"."</td>";
  echo "<td>"."registrado"."</td>";
  echo "</tr>";
}


}
?>
    </tbody>
  </div>


</html>
