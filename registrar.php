<?php

session_start();

$conexion=mysqli_connect("localhost","root","","proyectophp") or die("Problemas con la conexión");

    $registros=mysqli_query($conexion,"select * from usuario where email= '".$_REQUEST['email']."'") or
    die("Problemas en el select:".mysqli_error($conexion));

    if (mysqli_fetch_array($registros)!=null)
    {

        //variable de sesion para ver si esta registrado
        $_SESSION['yaregistrado']=true;

        mysqli_close($conexion);

        header('Location: registro.php');
      
    }else{

        if($_REQUEST['contrasenia'] == $_REQUEST['contraseniarepetir']){
            
            
        mysqli_query($conexion,"insert into usuario(email,nombre,contrasenia) values
            ('$_REQUEST[email]','$_REQUEST[nombre]','$_REQUEST[contrasenia]')")
            or die("Problemas en el select".mysqli_error($conexion));
        mysqli_close($conexion);
        
        $_SESSION['registro']=true;

      $entra=false;
        if(isset($_REQUEST['notificaciones'])){

            $entra=true;

            $to      = $_REQUEST['email'];
            $subject = $_REQUEST['nombre'];
            $message = 'hello';
            $headers = array(
                'From' => 'clinicpett@gmail.com',
                'Reply-To' => 'clinicpett@gmail.com',
                'X-Mailer' => 'PHP/' . phpversion()
            );

            mail($to, $subject, $message, $headers);
        }
        if($entra=true){
            header('Location: index.php');
        }        

        }else{
            $_SESSION['contranov']=true;

            echo $_REQUEST['contrasenia'] ;
            
            header('Location: registro.php');
        }   

    }


?>