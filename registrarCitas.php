<?php
session_start();

$conexion=mysqli_connect("localhost","root","","proyectophp") or
    die("Problemas con la conexión");



                   
            
        mysqli_query($conexion,"insert into citas(propietario,descripcion,fecha,animal) values
        ('$_REQUEST[nombre]','$_REQUEST[descripcion]','$_REQUEST[fecha]','$_REQUEST[animales]')")
        or die("Problemas en el Insert: ".mysqli_error($conexion));
        mysqli_close($conexion);
      
        $_SESSION['regsitradoA']=true;
        header('Location: pedirCita.php');

        


    