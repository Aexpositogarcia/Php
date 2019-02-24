<?php
session_start();

$conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");


    $registros=mysqli_query($conexion,"select * from animales where Codigochip=$_REQUEST[chip]") or
    die("Problemas en el select:".mysqli_error($conexion));


    if (mysqli_fetch_array($registros)!=null)
    {
        //variable de sesion para ver si esta registrado
        $_SESSION['yaregistradoA']=true;

       

        header('Location: registroAnimal.php');
      
    }else{
        $chip=$_REQUEST['chip'];
        $tipo=$_POST['tipo'];
        echo $tipo;

        echo "Insert into animales(Propietario,Nombre,Fecha_nac,Codigochip,Tipo) values
        ('".$_REQUEST['propietario']."','".$_REQUEST['nombre']."','".$_REQUEST['fecha']."',".$chip.",'".$tipo."')";
        echo "<br>";

                   
            
        mysqli_query($conexion,"insert into animales(Propietario,Nombre,Fecha_nac,Tipo,Codigochip) values
        ('$_REQUEST[propietario]','$_REQUEST[nombre]','$_REQUEST[fecha]','$_REQUEST[tipo]',$_REQUEST[chip])")
        or die("Problemas en el Insert: ".mysqli_error($conexion));
        mysqli_close($conexion);
      
        $_SESSION['regsitradoA']=true;
        header('Location: registroAnimal.php');

        


    }
    ?>