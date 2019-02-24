
<html>
<body>
<?php
  ob_start();


session_start();

include_once("Clases/Usuarios.php");



?>
<html>
<head>
<title>Problema</title>
</head>
<body>
<?php

$_SESSION['entra']=false;
//Declaro el objeto
$usuario; 




if ($_SESSION['numeroaleatorio']==$_REQUEST['numero']){

    //SI SE INTRODUCE ADMIN SE REDIRECCIONA AL MENU VETERINARIO

    $conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");

    //$sql1= "select * from student where email= '".$_REQUEST['user_id']."' &&  password ='".$_REQUEST['password']."'";

    $registros=mysqli_query($conexion,"select email,nombre,contrasenia from usuario where email= '".$_REQUEST['user_id']."'  and  contrasenia='".$_REQUEST['password']."'") or
    die("Problemas en el select:".mysqli_error($conexion));
    $entra=false;
    while($reg=mysqli_fetch_array($registros))
    {        
            $usuario = new Usuarios($reg['email'],$reg['nombre']);
            //$usuarioser=serialize($usuario);
            $_SESSION['usuario']=$usuario;
            if($reg['email']=="admin@admin"&& $reg['contrasenia']=="admin"){

                    header('Location: MenuVeterinario.php');
                    exit();

            }  
            
            $entra=true;
            header("Location: MenuDeBienvenida.php");
           
    }

    

    if($entra==false){   
        
                
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