<html>
<head><title>Eliminar</title>
</head>
<body>
<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $id=$_GET['id_usuario'];
	echo "el valor es : $id";  
   mysqli_query($link,"delete from clientes where usuario = '$id'"); 
   header("Location: BajasAdministrador.php"); 
?> 
</body>