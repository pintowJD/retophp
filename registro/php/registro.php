<?php
//conexion
$link=mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor<h/2>");
$db=mysqli_select_db($link,'registro') or die ("<h2>Error de conexion</h2>");
//datos
$Nombre=$_POST['Nombre'];
$Apellido=$_POST['Apellido'];
$Correo=$_POST['Correo'];
$Numero_de_celular=$_POST['Numero_de_celular'];
$Numero_de_documento=$_POST['Numero_de_documento'];
$Password=$_POST['Password'];
$Rpassword=$_POST['Rpassword'];
$Acudiente=$_POST['Acudiente'];
 //ENVIAR DATOS
 mysqli_query($link,"INSERT INTO usuarios VALUES ('','$Nombre','$Apellido','$Correo','$Password','$Numero_de_celular','$Numero_de_documento','$Acudiente')") or die ("<h2>Error de envio de datos</h2>");
    header("location:../registrado.html");



 ?>
