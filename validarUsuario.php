<?php session_start();//Para evitar abrir esta página sin el login

	$usu=$_REQUEST['usuario'];
	$pass=$_REQUEST['password'];
	//echo "Usuario: $usu<br>";
	//echo "Password: $pass";

	$link=mysqli_connect("localhost","root","");
	mysqli_select_db($link,"rentas");
	$resultado=mysqli_query($link,"select usuario, password, tipo from clientes where usuario='$usu'");

	if($row=mysqli_fetch_array($resultado))//Si es verdadero, significa que sí hay datos.
	{
		echo "Si existe el usuario $usu<br>";
		$pa=$row['password'];//Así sacamos un valor de la base de datos.
		$ti=$row['tipo'];
		if($pa==$pass)//Si el password de la base de datos es igual al password del usuario
		{
			//echo "<br>Usuario logueado correctamente<br>";
			$_SESSION["k_user"]=$usu;
			$_SESSION["k_tipo"]=$ti;
			if($ti==0)
				header("Location: ../BasesdeDatos/Administrador/index.php");//Index 2
			else
				header("Location: ../BasesdeDatos/Cliente/index.php");//Index 3
		}
		else
		{
			echo "<br>Contraseña incorrecta<br>";
		}
	}
	else
	{
		echo "No existe el usuario<br>";
	}
?>