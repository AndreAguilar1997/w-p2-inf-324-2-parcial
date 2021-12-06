<?php
include "conexion.inc.php";
$usuario=$_GET["usuario"];

$sql="select * from usuarios where usuario='".$usuario;

$resultado=mysqli_query($conn, $sql);
$fila=mysqli_fetch_array($resultado);
if ($fila["usuario"]==$usuario )
{
	session_start();
	$_SESSION["usuario"]=$usuario;
	header("Location: desflujo.php");
}
else
{
	header("Location: index.php");
}
?>