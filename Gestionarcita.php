<?php
    include_once("Clases/Usuarios.php");
    session_start();
    $objeto=$_SESSION['usuario'];                
    $nombre=$objeto->getNombre();
    $email=$objeto->getEmail();

$conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");



              
        echo $_REQUEST['boton'];
        mysqli_query($conexion,"Update tabla_citas set propietario='$nombre',Mascota='$_REQUEST[animales]',cliqueado=1 
         where id=$_REQUEST[boton]")
        or die("Problemas en el Insert: ".mysqli_error($conexion));
        mysqli_close($conexion);
      
        $_SESSION['regsitradoA']=true;
        header('Location: tabla.php');

?>