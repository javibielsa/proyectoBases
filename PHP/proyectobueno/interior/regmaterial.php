<?php
// Recuperamos datos del formulario
$ap=$_POST['aparato'];
$pro=$_POST['proveedor'];
$mar=$_POST['marca'];
$mod=$_POST['modelo'];
$ser=$_POST['numserie'];
$cant = 3;
$nint=$_POST['nint'];
$aut=$_POST['autorizador'];
$ubi=$_POST['ubicacion'];
$gar=$_POST['garantia'];
$fba=$_POST['fbaj'];
$obs=$_POST['observaciones'];
$fal=$_POST['falt'];



// conectamos con la BD
include("conexion.php");
// creamos consulta
$sql="INSERT INTO materiales(aparato,idProveedor,idMarca,modelo,numSerie,cantidad,numInterno,idAutorizador,idUbicacion,garantia,fechaBaja,observaciones,fechaEntrada) VALUES ('$ap','$pro','$mar','$mod','$ser','$cant','$nint','$aut','$ubi','$gar','$fba','$obs', '$fal')";

// ejecutamos la consulta
mysqli_query($conexion,$sql) or die("Error en la consulta de inserción $sql");
// cerramos la conexion
mysqli_close($conexion);
// redirigimos a la pagina inicial
header("location:plantillaMaterial.php");
?>
