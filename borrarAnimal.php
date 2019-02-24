<?php 
include("Clases/Usuarios.php");

//$usuario = new Usuarios;
session_start();


$objeto=$_SESSION['usuario']; 
$email=$objeto->getEmail();

$conexion=mysqli_connect("localhost","root","","proyectophp") or
die("Problemas con la conexión");


mysqli_query($conexion,"delete from animales where Codigochip=$_REQUEST[codigo]") or
die("Problemas en el select:".mysqli_error($conexion));
echo "Se efectuó el borrado del alumno con dicho mail.";

mysqli_close($conexion);

if($email=="admin@admin"){
    header('Location: ListaAnimalestotal.php');
}else{
    header('Location: ListaAnimales.php');
}

?>