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
<h2>Actualizar</h2>
<div class="articles"></div>
</div>

<div style="clear: both;"> </div>
<H2>Editar Películas</H2> 

<?php
   include("conexion.php"); 
   $link=Conectarse(); 
   
   $usu=$_GET['usuario'];
   //echo "<br> id Pelicula = $id";
  echo '<FORM METHOD="POST" ACTION="ActualizarAdministradorUsuario2.php">';

//Creamos la sentencia SQL y la ejecutamos
//$sSQL="Select titulo,director, actor,ranking From pelicula where id_pelicula='$id'";
//$result=mysql_query($sSQL);

  $result=mysqli_query($link,"select * from clientes where usuario='$usu'");
  $row = mysqli_fetch_array($result);
  $id_cli=$row["id_cliente"];
  $usu=$row["usuario"];
  $pas=$row["password"];
  $tip=$row["tipo"];
  $cor=$row["email"];

  echo "Id: <INPUT TYPE='text' NAME='id_cliente' value='$id_cli' SIZE='50'><br>";
  echo "Usuario: <INPUT TYPE='text' NAME='usuario' value='$usu' SIZE='50'><br>";
  echo "Contraseña: <INPUT TYPE='text' NAME='password' value='$pas' SIZE='50'><br>";
  echo "Tipo: <INPUT TYPE='text' NAME='tipo' value='$tip' SIZE='50'><br>";
  echo "Correo: <INPUT TYPE='text' NAME='email' value='$cor' SIZE='50'><br>";
  echo "<input type='hidden' name='id' value='$usu'>";
?>
<INPUT TYPE="SUBMIT" value="Actualizar">
<br>
<a href="ActualizarAdministrador.php">Cancelar</a>
</div>

</div>

</body>
</html>