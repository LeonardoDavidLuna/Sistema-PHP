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

<form action="ActualizarAdministrador2.php" method="post">
  Filtrar por categorias: <br>
  <select name="actualizar">
    <option value="pelicula">Peliculas
    <option value="usuario">Usuarios
    <option value="renta">Rentas
  </select>
  <input type="submit" value="Enviar">
</form>

<?php
  $act=$_REQUEST['actualizar'];
switch ($act)
{
  case 'pelicula':

   include("conexion.php"); 
   $link=Conectarse(); 
   $result=mysqli_query($link,"select * from pelicula"); 
?> 
   <TABLE BORDER=1> 
      <TR><TD bgcolor="#FFFFCC"><B>ID</B></TD>
          <TD bgcolor="#FFFFCC"><B>Titulo</B></TD>    
          <TD bgcolor="#FFFFCC"><B>Director</B></TD>    
          <TD bgcolor="#FFFFCC"><B>Actor</B></TD>   
          <TD bgcolor="#FFFFCC"><B>Ranking</B></TD>   
      <TD bgcolor="#FFFFCC"><B>Actualizar</B></TD> 
      
     </TR> 
<?php       

  while($row = mysqli_fetch_array($result)) 
  { 
    $id=$row["id_pelicula"];
    $ti=$row["titulo"];
    $di=$row["director"];
    $ac=$row["actor"];
    $de=$row["descripcion"];
    $ra=$row["ranking"];
    printf("<tr>
              <td bgcolor='#E6E6FA'>%d</td>
              <td bgcolor='#E6E6FA'>%s</td>
              <td bgcolor='#E6E6FA'>%s</td>
              <td bgcolor='#E6E6FA'>%s</td>
              <td bgcolor='#E6E6FA'>%d</td>
              <td bgcolor='#E6E6FA'><center>
                <a href=\"ActualizarAdministradorPelicula.php?id_pelicula=%s\"><img src='actualiza.jpg' width='25' height='25' border='0'></a>
              </center></td>
       </tr>",$id,$ti,$di,$ac,$ra,$id,$id); 
   }  
   mysqli_free_result($result); 
   mysqli_close($link); 
?>

<?php       
    //header("Location: BajasAdministradorPelicula.php"); 
    break;
  
  case 'usuario':
  $link=mysqli_connect("localhost","root",""); //Conectar al servidor
  mysqli_select_db($link,"rentas");//Seleccionar la base de datos
  $consulta=mysqli_query($link,"SELECT * from clientes");//Hacer la consulta y guardarlo en la variable $resultado.
    echo "<table border=1>";
        //echo "<caption>Clientes registrados</caption>";
        echo "<tr>
          <td bgcolor='#FFFFCC'>Id</td>
          <td bgcolor='#FFFFCC'>Usuario</td>
          <td bgcolor='#FFFFCC'>Tipo</td>
          <td bgcolor='#FFFFCC'>Correo</td>
          <td bgcolor='#FFFFCC'>Actualizar</td>
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
            <td bgcolor='#E6E6FA'><center>
       <a href=\"ActualizarAdministradorUsuario.php?usuario=$usu\"><img src='actualiza.jpg' width='25' height='25' border='0'></a>
       </center></td>
          </tr> ";
      }
    break;
  case 'renta':
  $link=mysqli_connect("localhost","root",""); //Conectar al servidor
  mysqli_select_db($link,"rentas");//Seleccionar la base de datos
  $consulta=mysqli_query($link,"SELECT * from copias");
      echo "<table border=1>";
        echo "<tr>
          <td bgcolor='#FFFFCC'>Id Copia</td>
          <td bgcolor='#FFFFCC'>Formato</td>
          <td bgcolor='#FFFFCC'>Precio</td>
          <td bgcolor='#FFFFCC'>Pelicula</td>
          <td bgcolor='#FFFFCC'>Cliente</td>
          <td bgcolor='#FFFFCC'>Fecha Inicio</td>
          <td bgcolor='#FFFFCC'>Fecha Fin</td>
          <td bgcolor='#FFFFCC'>Actualizar</td>
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
          <td bgcolor='#E6E6FA'><center>
       <a href=\"ActualizarAdministradorRenta.php?id_copia=$cop\"><img src='actualiza.jpg' width='25' height='25' border='0'></a>
       </center></td>
          </tr> ";
      }
    break;
}
?>

</div>
</div>

</body>
</html>