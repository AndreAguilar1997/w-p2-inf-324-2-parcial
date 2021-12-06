<?php
$sql_c="select * from academico.alumno where id=1";
$resultado_c=mysqli_query($conn, $sql_c);
$fila_c=mysqli_fetch_array($resultado_c);
$nombre=$fila_c["nombre"];
?>
