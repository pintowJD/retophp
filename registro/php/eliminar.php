<?php
include "consulta_t.php";
include "conexion.php";
include "conexiondb.php";
$link;
$db;
$id=$_GET['id'];
$nombre=$_GET['nombre'];
 $eliminar=mysqli_query($link,"DELETE FROM usuarios WHERE id=$id");
 header("Location:consulta_t.php");

?>
