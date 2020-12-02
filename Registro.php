<!DOCTYPE html>
<html>
<head>
<title>Videoteca</title>
<meta http-equiv="Content-Language" content="English" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css" media="screen" />
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
<li><a href="Registro.php">Registro</a></li>
<li><a href="Contacto.php">Contacto</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Registrarse</h2>
<form action="RegistroExitoso.php" method="post" enctype="multipart/form-data"> <!--La accion que hará-->
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
<div class="articles"></div>
</div>
<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>