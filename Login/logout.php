<?php session_start(); 
// Borramos toda la sesion
session_destroy(); 
echo 'Ha terminado la sesion <p><a href="index.php">index</a></p>';

//echo '<SCRIPT LANGUAGE="javascript"> location.href = "index.php"; </SCRIPT>';
?>