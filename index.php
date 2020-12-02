<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
	<li><a href="Contacto.php">Contacto</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2 class="Estilo1">Bienvenidos a la Videoteca</h2>
<p>Aquí encontrarás las películas más recientes... </p>
<p>&nbsp;</p>
<p><img src="images/videoteca.png" alt="" width="193" height="193" longdesc="images/videoteca.png" /></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="articles"></div>
</div>

<div class="right"> 
	<h2>Login: </h2>
	<form action="validarUsuario.php" method="post">
	  <input type="text" name="usuario" required/>
	  <h2>Password:</h2>
	  <p>
	    <input type="password" name="password" required/>
	    <input type="submit" name="enviar" value="ingresar"/>
	    </p>
	    <h2><p><a href="Registro.php">Crear nuevo usuario</a></p></h1>
	  <p>&nbsp;</p>
	  <!--<p><a href="administrador/index.php">Administrador</a></p>
	  <p><a href="cliente/index.php">Cliente</a></p>-->
	</form>
	</div>
	<div style="clear: both;"> </div>
</div>
</div>
<!--
colores
<td bgcolor='#FFFFCC'>
<td bgcolor='#E6E6FA'>-->

</body>
</html>


