<?php session_start(); 

 
   include("conexion2.php"); 
   $link=Conectarse(); 

$usuario=$_REQUEST['usuario']; 
$password=$_REQUEST['password'];

print("$usuario");
print("$password");

if ($usuario=="")
   {
	print("Debes poner un usuario");
	echo '<a href="login.php"> Regresar</a></p>';
   }
else if ($password=="")
	{
	   print("Debes colocar tu password");
	   echo '<a href="login.php"> Regresar</a></p>';
	}
else
 {
   $result = mysql_query('SELECT password, usuario FROM usuarios WHERE usuario=\''.$usuario.'\'');
   if($row = mysql_fetch_array($result))
      {
        if($row["password"] == $password)
           {
            $_SESSION["k_username"] = $row['usuario'];           
            echo 'Has sido logueado correctamente '.$_SESSION['k_username'].' <p>';
            echo '<a href="index.php">Index</a></p>';
             // Para redireccionar automaticamente a una pagina: usar cualqueira de las dos opciones:  
            //echo '<SCRIPT LANGUAGE="javascript">  location.href = "index.php";    </SCRIPT>';
            //header("Location: index.php");
           }
        else {
              print("Password incorrecto");
	      echo '<a href="login.php"> Regresar</a></p>';
             } 
      }
   else {
         print("Login incorrecto");
	 echo '<a href="login.php"> Regresar</a></p>';
        }
 }
?> 