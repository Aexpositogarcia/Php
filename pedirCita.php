<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pedir cita</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
    
    <link type="text/css" href="css/bootstrap.min.css" />
    <link type="text/css" href="css/bootstrap-timepicker.min.css" />
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="bootstrap.css">
    <script src="js/index.js"></script>
</head>
<body>
    <?php

        include_once("Clases/Usuarios.php");
        session_start();


        $objeto=$_SESSION['usuario']; 
        $email=$objeto->getEmail();

        if($_SESSION['regsitradoA']==true){
    
            echo " <div class = \"alert alert-success\"><strong>!Registrado!</strong> con exito.</div>";
           
            $_SESSION['regsitradoA']=false;
    
        }

    ?>
 
<div class="container"  id="pedircita">   
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3" style="margin-top:50px" id="registro">
    <h2 class="h2personalizado" >Pedir cita: </h2>
    <hr class="colorgraph">
    <form name="form_login" method="post" action="registrarCitas.php" role="form">
        <div class="form-group">
            <label for="inputEmail">Propietario</label>
            <input type="text" name="nombre" readonly class="form-control" value="<?php echo $email ?>" id="inputPropietario" placeholder="Propietario">
        </div>
        <div class="form-group">
            <label for="inputText">Descripcion</label>
            <input type="text" name="descripcion" class="form-control" id="inputEmail" placeholder="Descripcion" required="required">
        </div>
        <div class="form-group">
            <label for="inputPassword">Fecha Cita</label>
            <input type="datetime-local" name="fecha" class="form-control" id="inputFecha" placeholder="Fecha" required="required">
        </div>
       
        <div class="form-group">

        <label for="inputPassword">Tipo</label><br>
        <select class="combobox input-large form-control" name="animales">

            <?php 


            

            $conexion=mysqli_connect("localhost","root","","proyectophp") or
            die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select 
            
                Nombre
                
                from animales where propietario='".$email."'") or
                die("Problemas en el select:".mysqli_error($conexion));

                while($reg=mysqli_fetch_array($registros))
                {                      

                   echo "<option value=\"$reg[Nombre]\">$reg[Nombre]</option>";
                       
                }
            
            ?>

        </select>
        </div>
        <!------------------------------------------JS-------------------------------------------------------->        
        <hr class="colorgraph">    
        <input type="submit" name="Submit" value="¡Registrar Cita!" class="btn btn-lg btn-success btn-block">
        
        <script type="text/javascript">
            $('#timepicker1').timepicker();
        </script>
        
        </form>
        </div>
</div>



</body>
</html>