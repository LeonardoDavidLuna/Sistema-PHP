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
-->
</style>
</head>
<body>

<?php session_start();
	if(!isset($_SESSION['k_user']) || $_SESSION['k_tipo']!=0)//Si la variable de sesión no es verdadera, redirijimos
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
<li><a href="ConsultarAdministrador.php">Consultar</a></li>
<li><a href="BuscarAdministrador.php">Buscar</a></li>
<li><a href="AltasAdministrador.php">Altas</a></li>
<li><a href="BajasAdministrador.php">Bajas</a></li>
<li><a href="ActualizarAdministrador.php">Actualizar</a></li>
<li><a href="SalirAdministrador.php">Salir</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Administrador</h2>
<h2>Altas</h2>

<?php
	$al=$_REQUEST['alta'];

	switch ($al)
	{
		case 'pelicula':
?>

<form action="AltasAdministradorPelicula.php" method="post" enctype="multipart/form-data"> <!--La accion que hará-->
	<table>
			<tr>
				<td>Titulo:</td>
				<td><input type="text" name="titulo"></td>
			</tr>
			<tr>
				<td>Director:</td>
				<td><input type="text" name="director"></td>
			<tr>
				<td>Actor</td>
				<td><input type="text" name="actor"></td>
			</tr>
			<tr>
				<td>Ranking:</td>
				<td><input type="range" name="rank" min="10" max="100" value="50" step="5"><!--HTML5 (Necesita script para mostrar los números--></td>
			</tr>
			<tr>
				<td>Imagen:</td>
				<td><input type="file" name="archivo"></td>
			</tr>
			<tr>
				<td>Descripcion:</td>
				<td><textarea cols="40" rows="4" name="comentario">Esta pelicula me parece...
				</textarea></td>
			</tr>
			<tr>
				<td><input type="submit" name="enviar" value="Agregar Pelicula"></td>
			</tr>
	</table>
</form>
<?php
			break;
		case 'usuario':
?>
	<form action="AltasAdministradorUsuario.php" method="post" enctype="multipart/form-data"> <!--La accion que hará-->
		<table>
			<tr>
				<td>Usuario:</td>
				<td><input type="text" name="usuario"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="text" name="password"></td>
			<tr>
				<td>Tipo:</td>
				<td><input type="text" name="tipo"></td>
			</tr>
			<tr>
				<td>Correo:</td>
				<td><input type="text" name="correo"></td>
			</tr>
			<tr>
				<td><input type="submit" name="enviar" value="Agregar Usuario"></td>
			</tr>
		</table>
	</form>
<?php
	break;
		
		case 'renta':
?>
		<form action="AltasAdministradorRentas.php" method="post" enctype="multipart/form-data"> <!--La accion que hará-->
		<table>
			<tr>
				<td>Id Copia:</td>
				<td><input type="text" name="id_copia"></td>
			</tr>
			<tr>
				<td>Formato:</td>
				<td><input type="text" name="formato"></td>
			<tr>
				<td>Precio:</td>
				<td><input type="text" name="precio"></td>
			</tr>
			<tr>
				<td>Titulo:</td>
				<td><input type="text" name="titulo"></td>
			</tr>
			<tr>
				<td>Cliente:</td>
				<td><input type="text" name="cliente"></td>
			</tr>
			<tr>
				<td>Fecha de Inicio:</td>
				<td><input type="date" name="fecha_inicio"></td>
			</tr>
			<tr>
				<td>Fecha de Entrega:</td>
				<td><input type="date" name="fecha_fin"></td>
			</tr>
			<tr>
				<td><input type="submit" name="enviar" value="Agregar Renta"></td>
			</tr>
		</table>
	</form>
<?php
			break;
	}
?>
<a href="AltasAdministrador.php">Cancelar</a>

<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>