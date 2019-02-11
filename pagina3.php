<html>
<body>
<?php
session_start();
?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php
$_SESSION['entra']=false;
if ($_SESSION['numeroaleatorio']==$_REQUEST['numero']){

    echo "Ingresó el valor correcto";

    $conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");

    //$sql1= "select * from student where email= '".$_REQUEST['user_id']."' &&  password ='".$_REQUEST['password']."'";

    $registros=mysqli_query($conexion,"select * from usuario where email= '".$_REQUEST['user_id']."'  and  contrasenia='".$_REQUEST['password']."'") or
    die("Problemas en el select:".mysqli_error($conexion));


    if (mysqli_fetch_array($registros)!=null)
    {
      echo "entro";
    }else{
       //Redirecciona a la pagina menu
       
        $_SESSION['entra']=true;
        header('Location: index.php');
    }

    mysqli_close($conexion);
}
else{
    echo "Incorrecto";

    $_SESSION['entra']=true;

    header("Location: index.php");
}
?>
</body>
</html>