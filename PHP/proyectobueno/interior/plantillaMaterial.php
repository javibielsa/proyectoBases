<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
<HEAD>
<TITLE> registrar material </TITLE>
<META NAME="Generator" CONTENT="EditPlus">
<META NAME="Author" CONTENT="">
<META NAME="Keywords" CONTENT="">
<META NAME="Description" CONTENT="">
<link rel="stylesheet" href="css1/main.css" />


</HEAD>

<BODY>
<div id="wrapper">

<?php
session_start();
include("conexion.php");
?>
<form name="alumnos" id="alumnos" method="post" action="regmaterial.php">
<table align="center" width="50%">
<tr>
	<td colspan="2" align="center"><img src="./img/logosz.jpg" width="500"></td>
</tr>
<tr>
	<td colspan="2" align="center"><h2> RESGISTRAR MATERIAL</h2></td>
</tr>
<tr>
	<td colspan="2" align="right"><?php echo "Usuario: $_SESSION[proveedorusuario]"?>&nbsp; &nbsp;  <a href="index1.php">Volver</a>&nbsp; &nbsp;  <a href="logout.php">Logout</a></td>
</tr>
<tr>
	<td>Aparato: </td>
	<td><input type="text" name="aparato" id="aparato" placeholder="Aparato">
</tr>
<tr>
	<td>Proveedor</td>
	<td><select name="proveedor" id="proveedor" placeholder="Proveedor">
	<option value="">
		<?php
			$sql="SELECT * FROM proveedores";
			$registros=mysqli_query($conexion,$sql);
			while($linea=mysqli_fetch_array($registros))
			{
				echo"<option value='$linea[idProveedor]'>$linea[nombre]";
			}
			?>
		</select>

	</td>
</tr>
<tr>
	<td>Marca</td>
	<td><select name="marca" id="marca" placeholder="Marca">
	<option value="">
		<?php
			$sql="SELECT * FROM marca";
			$registros=mysqli_query($conexion,$sql);
			while($linea=mysqli_fetch_array($registros))
			{
				echo"<option value='$linea[idMarca]'>$linea[marca]";
			}
			?>
		</select>

</tr>

<tr>
	<td>Modelo</td>
	<td><input type="text" name="modelo" id="modelo" placeholder="Modelo electronico"></td>
</tr>
<tr>
	<td>Numero serie (opcional)</td>
	<td><input type="text" name="numserie" id="numserie" placeholder="Numero de serie"></td>
</tr>
<tr>
	<td>Numero interno (opcional)</td>
	<td><input type="text" name="nint" id="nint" placeholder="Numero interno en el centro"></td>
</tr>

<tr>
	<td>Autorizador</td>
	<td><select name="autorizador" id="autorizador" placeholder="Autorizador">
		<option value="">
		<?php
			$sql="SELECT * FROM usuarios";
			$registros=mysqli_query($conexion,$sql);
			while($linea=mysqli_fetch_array($registros))
			{
				echo"<option value='$linea[dni]'>$linea[nombre]";
			}
			?>
		</select>
	</td>
	
</tr>


<tr>
	<td>Ubicacion</td>
	<td><select name="ubicacion" id="ubicacion" placeholder="Ubicacion">
		<option value="">
		<?php
			$sql="SELECT * FROM ubicacion";
			$registros=mysqli_query($conexion,$sql);
			while($linea=mysqli_fetch_array($registros))
			{
				echo"<option value='$linea[idUbicacion]'>$linea[ubicacion]";
			}
			?>
		</select>
	</td>
	
</tr>
<tr>
	<td>Garantia</td>
	<td><input type="text" name="garantia" id="garantia" placeholder="Garantia"></td>
</tr>
<tr>
	<td>Fecha de Alta</td>
	<td><input type="date" name="falt" id="falt" placeholder="Fecha de Alta"></td>
</tr>
<tr>
	<td>Fecha de baja</td>
	<td><input type="date" name="fbaj" id="fbaj" placeholder="Fecha de baja"></td>
</tr>
<tr>
	<td>Observaciones</td>
	<td><input type="text" name="observaciones" id="observaciones" placeholder="Observaciones"></td>
</tr>
<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Registrar">
		<a href="index1.php"><input type="button" value="Ver"></a>
	</td>
</tr>
</table>
</form>
</div>
</BODY>
</HTML>
