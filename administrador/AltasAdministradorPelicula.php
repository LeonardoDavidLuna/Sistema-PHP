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
	$ti=$_REQUEST['titulo'];
	$di=$_REQUEST['director'];
	$ac=$_REQUEST['actor'];
	$ra=$_REQUEST['rank'];
	$desc=$_REQUEST['comentario'];

	$tam=$_FILES['archivo']['size']; // Para el tamaño
	$tipo=$_FILES['archivo']['type']; //Para el tipo
	$nombre=$_FILES['archivo']['name']; //Para el nombre

	/*echo "Titulo = $ti<br>";
	echo "Director = $di<br>";
	echo "Actor = $ac<br>";
	echo "Ranking = $ra<br>";
	echo "Comentario = $desc<br>";

	//echo "Nombre: $nombre <br>";
	echo "Tipo: $tipo <br>";
	echo "Tamaño: $tam <br>";*/

	$ruta="../MisImagenes/".$nombre;
	if(is_uploaded_file($_FILES['archivo']['tmp_name']))
	{
		copy($_FILES['archivo']['tmp_name'],$ruta);//Copiamos a nuestro servidor
	
		$link=mysqli_connect("localhost","root",""); //Conectar al servidor
		mysqli_select_db($link,"rentas");//Seleccionar la base de datos
		$resultado=mysqli_query($link,"INSERT INTO pelicula(titulo,director,actor,ranking,imagen,descripcion)
			values('$ti','$di','$ac',$ra,'$nombre','$desc')");

	echo "¡Agregado con exito!";
	header("Location: AltasAdministrador.php");
	}
	else
	{
		echo "¡No se pudo agregar!";
	}
	Mysqli_close($link);
?>
<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>