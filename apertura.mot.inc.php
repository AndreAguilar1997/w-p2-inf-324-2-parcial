<?php
$nombre=$_GET["nombre"];
$sql_c="update academico.alumno set nombre='".$nombre."' where id=1";
$resultado_c=mysqli_query($conn, $sql_c);
?>
