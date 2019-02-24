<!DOCTYPE html>

<html class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>LOGEAR</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap.css">
    
</head>


<!-- NAVBAR
================================================== -->

<body>
  <?php


  //error_reporting(0);
  
  session_start();

  echo $_SESSION['prueba'];
  $_SESSION['prueba']="";
  
  if($_SESSION['entra']==true){
  echo " <div class = \"alert alert-danger\">Error al logearte prueba otra vez.</div>";
  $_SESSION['entra']=false;
  $_SESSION['contranov']=false;
  }


  if($_SESSION['registro']==true){
    echo " <div class = \"alert alert-success\"><strong>¡Exito! </strong> Usuario Registrado.</div>";
   
    $_SESSION['registro']=false;
  }

  
?>

<!--<div class = "alert alert-danger">Error al introducir el login.</div>-->

    <div  class="container" >
      
      <div class="row" style="margin-top:50px" >
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
          <form name="form_login" method="post" action="pagina3.php" role="form">
            <fieldset>
              <h2 class="h2personalizado">Login </h2>
              <hr class="colorgraph">
              <div class="form-group">
                <input name="user_id" type="text" id="user_id" class="form-control input-lg" placeholder="Email Address">
              </div>
              <div class="form-group">
                <input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password">
              </div>
              <div class="form-group">
              <span class="label label-warning">Introducir capcha</span> <img src="pagina2.php" class="img-thumbnail"> 
              </div>
              <div class="form-group">
                <input name="numero" type="text" class="form-control input-lg" placeholder="Capcha">
              </div>

              
              <span class="button-checkbox">
              <!--<button type="button" class="btn" data-color="info">Remember Me</button><!-- Additional Option -->
              <input type="checkbox" name="remember_me"  checked="checked"> ¿Recordar? 
              <hr class="colorgraph">
              <div class="row">
                <div class="col-xs-6 col-sm-6 col-md-6">


                  <input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">
          </form>

          <form  name="login" method="post" action="registro.php">
                </div>
                <!--<input type="submit" name="Submit" value="Login" class="btn btn-lg btn-success btn-block">-->
                <div class="col-xs-6 col-sm-6 col-md-6"> 
                  <input type="submit" name="Submit" value="Registrar" class="btn btn-lg btn-primary btn-block">
                </div>
              </div>
          </form>
            </fieldset>
          
        </div>
      </div>
      
    </div>

  </body>
  </html>