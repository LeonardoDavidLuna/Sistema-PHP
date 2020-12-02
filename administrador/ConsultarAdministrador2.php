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
table {
       border:1px solid black;
       border-collapse:separate;
       background: white;       
       width: 100%;
       }
    th, td {
       border:1px solid black;
       }
-->
</style>
</head>
<body>


</div>
<div class="articles">
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
<h2>Consultar</h2>
<!--
<form action="ConsultarAdministrador.php" method="post">
	Buscar:
	<input type="radio" name="buscar" value="copias">Rentas
	<input type="radio" name="buscar" value="pelicula">Peliculas
	<input type="radio" name="buscar" value="clientes">Clientes
	<input name="Submit" type="submit" value="Enviar">
</form>
-->
<form action="ConsultarAdministrador2.php" method="post">
	Filtrar por categorias: <br>
	<select name="buscar">
		<option value="copias">Rentas
		<option value="pelicula">Peliculas
		<option value="clientes">Clientes
	</select>
	<input type="submit" value="Enviar">
</form>

<hr>
</div>
<div style="clear: both;"> </div>

<?php
$link=mysqli_connect("localhost","root",""); //Conectar al servidor
	mysqli_select_db($link,"rentas");//Seleccionar la base de datos

	$buscar=$_REQUEST['buscar'];
	$consulta=mysqli_query($link,"SELECT * from $buscar");//Hacer la consulta y guardarlo en la variable $resultado.

	switch($buscar)
	{
		case "copias":
			echo "<table border=1>";
				echo "<tr>
				<td bgcolor='#FFFFCC'>Id Copia</td>
				<td bgcolor='#FFFFCC'>Formato</td>
				<td bgcolor='#FFFFCC'>Precio</td>
				<td bgcolor='#FFFFCC'>Pelicula</td>
				<td bgcolor='#FFFFCC'>Cliente</td>
				<td bgcolor='#FFFFCC'>Fecha Inicio</td>
				<td bgcolor='#FFFFCC'>Fecha Fin</td>
		  	</tr>";
			while($row=mysqli_fetch_array($consulta))
			{
				$cop=$row['id_copia'];
				$form=$row['formato'];
				$pre=$row['precio'];
				$peli=$row['titulo'];
				$cli=$row['cliente'];
				$feini=$row['fecha_inicio'];
				$fefin=$row['fecha_fin'];
				echo "<tr>
					<td bgcolor='#E6E6FA'>$cop</td>
					<td bgcolor='#E6E6FA'>$form</td>
					<td bgcolor='#E6E6FA'>$pre</td>
					<td bgcolor='#E6E6FA'>$peli</td>
					<td bgcolor='#E6E6FA'>$cli</td>
					<td bgcolor='#E6E6FA'>$feini</td>
					<td bgcolor='#E6E6FA'>$fefin</td>
			  	</tr> ";
			}
		break;
		
		case "pelicula":
			echo "<table border=0>";
			//echo "<caption>Peliculas registradas</caption>";
			echo "<tr>
				<td bgcolor='#FFFFCC'>Id Pelicula</td>
				<td bgcolor='#FFFFCC'>Titulo</td>
				<td bgcolor='#FFFFCC'>Director</td>
				<td bgcolor='#FFFFCC'>Actor</td>
				<td bgcolor='#FFFFCC'>Imagen</td>
				<td bgcolor='#FFFFCC'>Descripcion</td>
				<td bgcolor='#FFFFCC'>Ranking</td>
		  </tr>";	
		  	while($row=mysqli_fetch_array($consulta))
			{
				$id_pel=$row['id_pelicula'];
				$ti=$row['titulo'];
				$di=$row['director'];
				$ac=$row['actor'];
				$im=$row['imagen'];
				$de=$row['descripcion'];
				$ra=$row['ranking'];
					echo "<tr>
					<td bgcolor='#E6E6FA'>$id_pel</td>
					<td bgcolor='#E6E6FA'>$ti</td>
					<td bgcolor='#E6E6FA'>$di</td>
					<td bgcolor='#E6E6FA'>$ac</td>
					<td bgcolor='#E6E6FA'><img width=100 height=100 src='../MisImagenes/$im'></td>
					<td bgcolor='#E6E6FA'>$de</td>
					<td bgcolor='#E6E6FA'>$ra</td>
			  	</tr> ";
			}
		break;
		case "clientes";
		echo "0: Administrador<br>";
		echo "1: Cliente";
				echo "<table border=0>";
				//echo "<caption>Clientes registrados</caption>";
				echo "<tr>
					<td bgcolor='#FFFFCC'>Id</td>
					<td bgcolor='#FFFFCC'>Usuario</td>
					<td bgcolor='#FFFFCC'>Tipo</td>
					<td bgcolor='#FFFFCC'>Correo</td>
		  		</tr>";	
		  	while($row=mysqli_fetch_array($consulta))
			{
				$id_cli=$row['id_cliente'];
				$usu=$row['usuario'];
				$tip=$row['tipo'];
				$cor=$row['email'];
				
					echo "<tr>
					<td bgcolor='#E6E6FA'>$id_cli</td>
					<td bgcolor='#E6E6FA'>$usu</td>
					<td bgcolor='#E6E6FA'>$tip</td>
					<td bgcolor='#E6E6FA'>$cor</td>
			  	</tr> ";
			}
		break;
	}	
mysqli_close($link);
?>	
<br>

</div>

</body>
</html>