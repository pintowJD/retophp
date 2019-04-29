<?php

 function ActualizarDatos($NOMBRE,$Apellido,$Correo,$Numero_de_celular,$Numero_de_documento,$Password,$Acudiente)
{
  $id;
  echo $id;
  // OBTENGO LOS NUEVOS DATOS
  $Nombre=$_POST['Nombre'];
  $Apellido=$_POST['Apellido'];
  $Correo=$_POST['Correo'];
  $Numero_de_celular=$_POST['Numero_de_celular'];
  $Numero_de_documento=$_POST['Numero_de_documento'];
  $Password=$_POST['Password'];
  $Rpassword=$_POST['Rpassword'];
  $Acudiente=$_POST['Acudiente'];
  echo $Nombre;
  echo $Apellido;
  echo $Correo;


  // $eliminar=mysqli_query($link,"UPDATE FROM usuarios SET nombre=$NOMBRE  WHERE id=$id");
  // header("Location:consulta_t.php");

}



 ?>
