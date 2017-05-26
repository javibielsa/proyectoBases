<?php
// Recuperamos datos del formulario
$inc=$_POST['incidencia'];
$fci=$_POST['fechain'];
$sol=$_POST['solucion'];
$fcs=$_POST['fechaso'];
$idm=$_POST['sel'];
// conectamos con la BD
include("conexion.php");

// creamos consulta
$sql="INSERT INTO incidencias(fechaIncidencia, incidencia, fechaSolucion, solucion, idmaterial) VALUES ('$fci','$inc', '$fcs', '$sol', $idm)";

// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de insercion $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:index1.php");
?>




