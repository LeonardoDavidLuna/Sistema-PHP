<!DOCTYPE html PUBLIC>
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
<li><a href="Contacto.php">Contacto</a></li>
</ul>
</div>

<div id="content">
<div class="left"> 

<h2>Buscar Disponibles</h2>

<form action="BuscarUsuario.php" method="post">
	Buscar:
	<input type="text" name="nombre" value="" required><br>
	<input name="Submit" type="submit" value="Enviar">
</form>
<p>Necesitas estar registrado para rentar películas</p>
<hr>
	<div class="articles"></div>
	</div>

<?php
	$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos

if(isset($_POST['Submit']))
{
	$nombre=$_REQUEST['nombre'];
	//Hacer la consulta y guardarlo en la variable $resultado.

			$consulta=mysqli_query($link,"SELECT * from copias where titulo='$nombre' and cliente IS null");
			echo "<table border=1>";
				echo "<tr>
				<td bgcolor='#FFFFCC'><b>Id</b></td>
				<td bgcolor='#FFFFCC'>Formato</td>
				<td bgcolor='#FFFFCC'>Precio</td>
				<td bgcolor='#FFFFCC'>Pelicula</td>
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
			  	</tr> ";
			}
}
mysqli_close($link);
?>
<div style="clear: both;"> </div>
</div>

</div>

</body>
</html>