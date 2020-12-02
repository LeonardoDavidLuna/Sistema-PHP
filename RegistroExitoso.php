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

<h2>Registrar</h2>

<?php
	$usu=$_REQUEST['usuario'];
	$pass=$_REQUEST['password'];
	$corr=$_REQUEST['correo'];
	$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos
	
	$consulta=mysqli_query($link,"SELECT * from clientes");//Hacer la consulta y guardarlo en la variable $resultado.

	while($row=mysqli_fetch_array($consulta))
	{	
		$usuT=$row['usuario'];
	}

	$n=count($row);
	$f=0;
	for($i=0; $i<$n;$i++)
	{
		if($usu==$usuT)
		{
			$f=1;
		}
	}
	if($f==0)
	{
		$resultado=mysqli_query($link,"INSERT INTO clientes(usuario,password,tipo,email)
			VALUES('$usu','$pass',1,'$corr')");
			echo "<br>Registrado con éxito";
		Mysqli_close($link);
	}else{
		echo "Usuario ya registrado, intenta con otro.<br>";
	}
?>

<a href="index.php">Volver</a>

<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>