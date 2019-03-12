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
          <input class="consulta" type="text" name="CnumeroD" value="" placeholder="Numero de identificacion">
          <input class="Boton1" type="submit" name="boton1" value="Consultar">
          <input class="Boton2" type="submit" name="" value="Volver atras" onclick="location.href='../consulta.html'">
        </form>
      </div>

      <table width="100%" border="1">
					<tr>
						<td><h3><center>Nombre</center></h2></td>
						<td><h3><center>Apellido</center></h2></td>
						<td><h3><center>Correo</center></h2></td>
						<td><h3><center>Numero celular</center></h2></td>
						<td><h3><center>Numero de documento</center></h2></td>
						<td><h3><center>Acudiente</center></h2></td>
					</tr>

  	</div>
  </body>




<?php if (isset($_POST['boton1'])) {
  $CnumeroD=$_POST['CnumeroD'];
  $consultaC=mysqli_query($link,"SELECT * FROM usuarios WHERE numero_de_documento=$CnumeroD") or die ("no se pudo consultar");
  $consultaC_array=mysqli_fetch_array($consultaC);

  echo $consultaC_array['nombre'];
  echo $consultaC_array['numero_de_documento'];
}?>


</html>
