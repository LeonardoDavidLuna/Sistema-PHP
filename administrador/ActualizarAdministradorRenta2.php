<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Actualizar</title>
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
<h2>Bajas</h2>
<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
<H2>Editar Películas</H2> 

<?php
   include("conexion.php"); 
   $link=Conectarse(); 

$id_cop=$_REQUEST["id_copia"];
$for=$_REQUEST["formato"];
$pre=$_REQUEST["precio"];
$ti=$_REQUEST["titulo"];
$cli=$_REQUEST["cliente"];
$feini=$_REQUEST["fecha_inicio"];
$fefin=$_REQUEST["fecha_fin"];

/*echo "$id_cop<br>";
echo "$for<br>";
echo "$pre<br>";
echo "$ti<br>";
echo "$cli<br>";
echo "$feini<br>";
echo "$fefin<br>";
*/
$sSQL="UPDATE copias SET id_copia='$id_cop',formato='$for',precio='$pre',titulo='$ti',cliente='$cli',fecha_inicio='$feini',fecha_fin='$fefin' WHERE id_copia=$id_cop";
mysqli_query($link,$sSQL);

mysqli_close($link);
header("Location: ActualizarAdministrador.php");
?>

</div>
</div>
</body>
</html>