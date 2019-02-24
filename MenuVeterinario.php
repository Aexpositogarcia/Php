<!DOCTYPE html>

<?php 
include("Clases/Usuarios.php");

//$usuario = new Usuarios;
session_start();


$objeto=$_SESSION['usuario']; 
$nombre=$objeto->getNombre();



?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Auto Typing Text (function)</title>


  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/stylemenu.css">


</head>

<body>

  <div style="width: 50%" style="align-content: center">

    <div class="type-js headline">
      

      <h1 class="text-js"> ¡Bienvenido, Doctor!</h1>

    </div>

    <div class=" headline">

      <h2>¿Que quieres consultar?</h2>

    </div>

    <div style="align-content: center">

        <div style=margin-top:20px class="row">

                <div >
                <a href="ListaUsuario.php" class="action-button shadow animate blue">Listar usuarios</a>
                </div>
                <div >
                <a href="tablaVeterinario.php" class="action-button shadow animate red">Listar Citas</a>
                </div>
                <div >
                <a href="ListaAnimalestotal.php" class="action-button shadow animate green">Lista Animales</a>
                </div>

        </div>

     


    </div>

  </div>

  <a href="https://twitter.com/alberexgar" class="credit" target="_blank">Twitter</a>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>