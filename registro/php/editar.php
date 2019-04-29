<?php
  include "consulta_t.php";
  include "conexion.php";
  include "conexiondb.php";
  $link;
  $db;

 ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="../css/editar.css">
	<title></title>
</head>

<body>
	<div class="centro">
    <div class="campos">
      <div class="datos">
        <div class="llenar">
          <form class="" action="editar.php " method="get">
             <input type="text" name="Nombre" href="editar.php?Nombre=3>" placeholder="Nombre"  required>  <br><br>
            <input type="text" name="Apellido" value="" placeholder="Apellido" required><br><br>
            <input type="email" name="Correo" value="" placeholder="Correo" required><br><br>
            <input type="number" name="Numero_de_celular" value="" placeholder="Numero de celular" ><br><br>
            <input type="number" name="Numero_de_documento" value="" placeholder="Numero de documento" required><br><br>
            <input type="password" name="Password" value="" placeholder="Password" required><br><br>
            <input type="password" name="Rpassword" value="" placeholder="Repetir Password" required><br><br>
            <input type="text" name="Acudiente" value="" placeholder="Acudiente" required><br><br>
          <div class="botones">
      			<button  class="Boton1" name="Boton1" >Confirmar</button>
      			<button class="Boton2" type="button" name="button" onclick="location.href='consulta_t.php'" >Cancelar</button>
      		</div>

  		</div>

		</div>


	</div>
</form>
<?php
  if (isset($_POST['Boton1'])) {
    $id=$_GET['id'];
    $Nombre=$_GET['Nombre'];
    echo $id;
    echo "string";
     $editar=mysqli_query($link,"UPDATE FROM usuarios SET nombre=$NOMBRE  WHERE id=$id");
  // include "editarAD.php";
  // ActualizarDatos($NOMBRE,$Apellido,$Correo,$Numero_de_celular,$Numero_de_documento,$Password,$Acudiente);

}
?>
</body>
</html>
