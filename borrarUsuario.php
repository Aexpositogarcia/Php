<?php 
$conexion=mysqli_connect("localhost","root","","proyectophp") or
die("Problemas con la conexión");


mysqli_query($conexion,"delete from usuario where email='$_REQUEST[codigo]'") or
die("Problemas en el select:".mysqli_error($conexion));
echo "Se efectuó el borrado del alumno con dicho mail.";

mysqli_close($conexion);

header('Location: ListaUsuario.php');

?>