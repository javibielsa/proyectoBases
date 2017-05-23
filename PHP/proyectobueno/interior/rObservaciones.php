<?php
//Recuperamos datos del formulario
$nom=$_POST['nombre'];
$cor=$_POST['correo'];
$tel=$_POST['telefono'];
$com=$_POST['comentario'];

//conectamos con la BD
include("conexion.php");
//creamos consulta
$sql="INSERT INTO observaciones(nombre, correo, telefono, comentario) VALUES ('$nom', '$cor', '$tel', '$com')";
//ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
//cerramos la conexion
mysqli_close($conexion);
//redirigeremos a la pagina inicial
header("location:index1.php");
?>     