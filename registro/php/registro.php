<?php
//conexion
	include "conexion.php";
	include "conexiondb.php";
	$link;
	$db;
//datos
	$Nombre=$_POST['Nombre'];
	$Apellido=$_POST['Apellido'];
	$Correo=$_POST['Correo'];
	$Numero_de_celular=$_POST['Numero_de_celular'];
	$Numero_de_documento=$_POST['Numero_de_documento'];
	$Password=$_POST['Password'];
	$Rpassword=$_POST['Rpassword'];
	$Acudiente=$_POST['Acudiente'];
	$consulta_email = mysqli_query($link,"SELECT * FROM usuarios") or die ("<h1>No se ha podido realizar la consulta</h1>");
  $consulta_email_array= mysqli_fetch_array($consulta_email);
 //Consulta de email
	if ($consulta_email_array['correo']==$Correo || $consulta_email_array['numero_de_documento']==$Numero_de_documento) {
			header("location:../sesion_ocupada.html");
	}
	if ($consulta_email_array['correo']!=$Correo) {
		// ENVIAR DATOS
		$enviar_datos = mysqli_query($link,"INSERT INTO usuarios VALUES ('','$Nombre','$Apellido','$Correo','$Password','$Numero_de_celular','$Numero_de_documento','$Acudiente' )") or die ("<h2>Error de envio de datos</h2>");
		 header("location:../registrado.html");
	}

 ?>
