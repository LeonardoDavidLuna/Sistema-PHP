<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Videoteca</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="../style.css" media="screen" />
<style type="text/css">
<!--
.Estilo1 {color: #0099CC}
.Estilo4 {
	color: #FFFFFF;
	font-family: "Times New Roman", Times, serif;
	font-size: 30px;
}
.Estilo5 {color: #9900CC}
-->
</style>
</head>
<body>

<?php session_start();
	if(!isset($_SESSION['k_user']) || $_SESSION['k_tipo']!=1)
		header("Location: ../index.php");
?>

<div id="wrap">

<div id="header">
  <h1 class="Estilo4">Videoteca</h1>
  <h2 class="Estilo5">Algo más que ver...</h2>
 </div>

<div id="top"> </div>
<div id="menu">
<ul>
<li><a href="index.php">Inicio</a></li>
<li><a href="ConsultarUsuario.php">Consultar</a></li>
<li><a href="BuscarUsuario.php">Buscar</a></li>
<li><a href="RentarUsuario.php">Rentar</a></li>
<li><a href="SalirUsuario.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Usuario</h2>
<h2>Rentar</h2>

<!--<form action="RegistroExitoso.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="usuario" required></td>
			</tr>
			<tr>
				<td>Contraseña:</td>
				<td><input type="password" name="password" required></td>
			</tr>
			<tr>
				<td>Correo:</td>
				<td><input type="text" name="correo"></td>
			</tr>
		</table>
	<input type="submit" name="enviar" value="Registrar">
</form>
-->
<div class="articles"></div>
</div>
<?php

	$usu=$_SESSION['k_user'];//Nombre del usuario
	$id=$_REQUEST['id_copia'];//Copia que se rentará
	
	$fecha_ini = date('Y-m-j');//Fecha de renta
	$fecha_fin = strtotime ( '+7 day' , strtotime ( $fecha_ini ) ) ;
	$fecha_fin = date ( 'Y-m-j' , $fecha_fin ); //Fecha de entrega

	$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos
	
	$sSQL="Update copias SET cliente='$usu',fecha_inicio='$fecha_ini',fecha_fin='$fecha_fin' Where id_copia='$id'";
	mysqli_query($link,$sSQL);

	mysqli_close($link);
echo "<a href='RentarUsuario.php'>Regresar</a>";
header("Location: RentarUsuario.php");
?>

<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>