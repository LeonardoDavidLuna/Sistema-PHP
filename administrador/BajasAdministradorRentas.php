<html>
<head><title>Eliminar</title>
</head>
<body>
<?php 
   include("conexion.php"); 
   $link=Conectarse(); 
   $id=$_GET['id_copia'];
	//echo "el valor es : $id";  
   mysqli_query($link,"delete from copias where id_copia = '$id'"); 
   header("Location: BajasAdministrador.php"); 
?> 
</body>