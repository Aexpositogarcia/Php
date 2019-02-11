<?php

if($_REQUEST['contrasenia'] == $_REQUEST['contraseniarepetir']){
    $conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");
   mysqli_query($conexion,"insert into usuario(email,nombre,contrasenia) values
    ('$_REQUEST[email]','$_REQUEST[nombre]','$_REQUEST[contrasenia]')")
    or die("Problemas en el select".mysqli_error($conexion));
   mysqli_close($conexion);
}else{
    session_start();
    $_SESSION['contranov']=true;
    
    header('Location: registro.php');
}   
?>