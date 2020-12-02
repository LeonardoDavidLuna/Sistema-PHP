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
<div class="articles"></div>
</div>
<?php
	$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos

	$usuario=$_SESSION['k_user'];
		$consulta=mysqli_query($link,"SELECT * from copias where cliente IS null");
			echo "<table border=1>";
				echo "<tr>
				<td bgcolor='#FFFFCC'>Id</td>
				<td bgcolor='#FFFFCC'>Formato</td>
				<td bgcolor='#FFFFCC'>Precio</td>
				<td bgcolor='#FFFFCC'>Pelicula</td>
				<td bgcolor='#FFFFCC'>Disponible</td>
		  	</tr>";						  
			while($row=mysqli_fetch_array($consulta))
			{
				$cop=$row['id_copia'];
				$form=$row['formato'];
				$pre=$row['precio'];
				$peli=$row['titulo'];
				
				echo "<tr>
					<td bgcolor='#E6E6FA'>$cop</td>
					<td bgcolor='#E6E6FA'>$form</td>
					<td bgcolor='#E6E6FA'>$pre</td>
					<td bgcolor='#E6E6FA'>$peli</td>
					<td bgcolor='#E6E6FA'><a href='RentarUsuario2.php?id_copia=$cop'>Rentar</a></td>
			  	</tr> ";
			}
mysqli_close($link);
?>


<div style="clear: both;"> </div>
</div>
</div>

</body>
</html>