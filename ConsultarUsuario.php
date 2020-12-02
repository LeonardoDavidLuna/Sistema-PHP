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

<h2 class="Estilo1">Consultar Películas</h2>

<form action="ConsultarUsuario2.php" method="post">
	Filtrar por categorias: <br>
	<select name="categoria">
		<option value="Todo">Todo
		<option value="Accion">Acción
		<option value="Ciencia Ficcion">Ciencia Ficción
		<option value="Comedia">Comedia
		<option value="Fantasia">Fantasia
		<option value="Suspenso">Suspenso
		<option value="Terror">Terror
	</select>
	<input type="submit" value="Enviar">
</form>
<p>&nbsp;</p>
<p><img width=750 height=400 src='MisImagenes/pelicula5.jpg'>


<p>&nbsp;</p>
<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>