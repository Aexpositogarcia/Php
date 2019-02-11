<?php
if (isset($_REQUEST['Submit'])) //here give the name of your button on which you would like    //to perform action.
{
   
    $conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");
    $sql1= "select * from student where email= '".$_REQUEST['user_id']."' &&  password ='".$_REQUEST['password']."'";
    $registros=mysqli_query($conexion,"select * from usuario where email= '".$_REQUEST['user_id']."' &&  contraseña='".$_REQUEST['password']."'") or
    die("Problemas en el select:".mysqli_error($conexion));


      if (mysqli_fetch_array($registros)==null)
    {

      echo "entro";

    }else{
      header('Location: login.php');
    }
    
    mysqli_close($conexion);
}
  ?>