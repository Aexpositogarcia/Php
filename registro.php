<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <?php
    //error_reporting(0);
    session_start();
   

    if($_SESSION['contranov']==true){

        echo " <div class = \"alert alert-danger\">Error la contraseña no es igual.</div>";
        $_SESSION['contranov']=false;

    }

    if($_SESSION['yaregistrado']==true){

        echo " <div class = \"alert alert-danger\"><strong>Error </strong>ya esta registrado este email.</div>";
        $_SESSION['yaregistrado']=false;

    }
    ?>
  
   



<div class="container"  id="registro">
    
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:50px" id="registro">
    <h2 class="h2personalizado" >Registro</h2>
    <hr class="colorgraph">
    <form name="form_login" method="post" action="registrar.php" role="form">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>
        <div class="form-group">
            <label for="inputText">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="inputEmail" placeholder="Nombre">
        </div>
        <div class="form-group">
            <label for="inputPassword">Contraseña</label>
            <input type="password" name="contrasenia" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputPassword">Repita Contraseña</label>
            <input type="password" name="contraseniarepetir" class="form-control" id="inputPassword" placeholder="Password">
        </div>
        <div class="checkbox">
            <label><input type="checkbox" required >Aceptas los terminos y condiciones</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="notificaciones ">Quiero recibir notificaciones en el correro</label>
        </div>
        <hr class="colorgraph">
        <div class="col-xs-6 col-sm-6 col-md-6" >
        <input type="submit" name="Submit" value="¡Registrar!" class="btn btn-lg btn-success btn-block">
        </div>
        
        </form>
        <div class="col-xs-6 col-sm-6 col-md-6"> 
                  <a href="index.php" name="Submit" class="btn btn-lg btn-primary btn-block">Volver</a>
        </div>
        
        </div>
        
    
   
</div>

    
</body>


</html>