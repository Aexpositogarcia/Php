<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registro de Animales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>

    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap.css">

</head>
<body>
    <?php
        error_reporting(0);

        include("Clases/Usuarios.php");

        session_start();


        $objeto=$_SESSION['usuario']; 
        $email=$objeto->getEmail();



        

        if($_SESSION['yaregistradoA']==true){
    
            echo " <div class = \"alert alert-danger\"><strong>!Error!</strong> El id ya existe.</div>";
            $_SESSION['yaregistradoA']=false;
    
        }
    
        if($_SESSION['regsitradoA']==true){
    
            echo " <div class = \"alert alert-success\"><strong>!Registrado!</strong> con exito.</div>";
           
            $_SESSION['regsitradoA']=false;
    
        }
    ?>

<div class="container" id="registro">
    
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:50px" id="registro">
    <h2 class="h2personalizado" >Registrar Animal</h2>
    <hr class="colorgraph">
    <form name="form_login" method="post" action="registrarAnimal.php" role="form">
        <div class="form-group">
            <label for="inputEmail">Propietario</label>
            <input type="propietario" name="propietario" readonly class="form-control" value="<?php echo $email ?>" id="inputPropietario" placeholder="Propietario">
        </div>
        <div class="form-group">
            <label for="inputText">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputEmail" placeholder="Nombre" required="required">
        </div>
        <div class="form-group">
            <label for="inputPassword">Fecha Nacimiento</label>
            <input type="date" name="fecha" class="form-control" id="inputFecha" placeholder="Fecha" required="required">
        </div>
        <div class="form-group">
            <label for="inputPassword">Chip</label>
            <input type="number" name="chip" min="1" max="9999"   required="required" class="form-control" id="inputchip" placeholder="Numero Chip">
        </div>
        <div class="form-group">

        <label for="inputPassword">Tipo</label><br>
        <select class="combobox input-large form-control" name="tipo">
            
            <option value="Perro">Perro</option>
            <option value="Gato">Gato</option>
            <option value="Pez">Pez</option>
            <option value="Anfibio">Anfibio</option>
            <option value="Caballo">Caballo</option>
            <option value="Hamster">Hamster</option>
            <option value="Huron">Huron</option>

        </select>
        <hr class="colorgraph">
        </div>    
        <div class="col-xs-6 col-sm-6 col-md-6"> 
        <input type="submit" name="Submit" value="¡Registrar Animal!" class="btn btn-lg btn-success btn-block">
        </div>
        
        </form>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
                  <a href="MenuDeBienvenida.php" name="Submit" class="btn btn-lg btn-primary btn-block">Volver</a>
        </div>
    
   
</div>

    
</body>
</html>