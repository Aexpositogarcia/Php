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
    session_start();
    if($_SESSION['contranov']==true)
    echo " <div class = \"alert alert-danger\">Error la contraseña no es igual.</div>";
    $_SESSION['contranov']=false;
    
    ?>
  
   
<form>


<div class="container"  id="registro">
    
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:50px" id="registro">
    <h2>Registro</h2>
    <hr class="colorgraph">
    <form action="registrar.php" method="post">
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
            <label><input type="checkbox">Aceptas los terminos y condiciones</label>
        </div>
        <div class="checkbox">
            <label><input type="checkbox">Quiero recibir notificaciones en el correro</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <hr class="colorgraph">
        </div>
    </form>
   
</div>
</form>
    
</body>
</html>