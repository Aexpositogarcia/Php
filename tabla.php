<?php
include("Clases/Usuarios.php");
session_start();


    $objeto=$_SESSION['usuario'];
    
    $nombre=$objeto->getNombre();
    $email=$objeto->getEmail();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tabla citas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/PROJECTO/css/bootstrap.css">
    <link rel="stylesheet" href="tabla.css">
    <script src="main.js"></script>
</head>
<body>
<form action="Gestionarcita.php" method="post">
    <div class="container">
        
    
        <div class="form-group">

        <label for="inputPassword">Seleccione Animal:</label><br>
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
    </div>

    <table> 
        <tr>
            <td></td>
            <td>LUNES</td>
            <td>MARTES</td>
            <td>MIERCOLES</td>
            <td>JUEVES</td>
            <td>VIERNES</td>
        </tr>

    <?php
        
        $z=0;
        $arraydias=array("11:00","12:00","13:00","17:00","18:00","19:00");

        for ($i=0; $i<6; $i++) { 

            echo "<tr>";

            for ($x=0; $x < 6; $x++) { 

                if($x==0){
                    echo  "<td>".$arraydias[$i]."</td>";
                }else{

                    
                            
                    //$_SESSION['usuario']
                    
        
                    $conexion=mysqli_connect("localhost","root","","proyectophp") or
                    die("Problemas con la conexión");
        
                    $registros=mysqli_query($conexion,"select 
        
                        propietario,
                        Mascota,
                        cliqueado
                        from tabla_citas where id='".$z."'") or
                        die("Problemas en el select:".mysqli_error($conexion));
                    
                        while ($reg=mysqli_fetch_array($registros))
                        {

                            $propietario=$reg['propietario'];
                            $mascota=$reg['Mascota'];
                            $cliqueado=$reg['cliqueado'];

                        }

                        $ocupado="action-button shadow animate red";
                        $libre="action-button shadow animate green";

                        if($cliqueado==1){

                            echo "<td>
                                <button name=\"boton\" value=\"$z\" disabled class=\"action-button shadow animate red\"><strong>$propietario</Strong><br>$mascota</button>
                            </td>";

                        }else{
                            echo "<td>
                                <a disabled href=\"Gestionarcita.php?valor=$z\"><button name=\"boton\" value=\"$z\"  class=\"action-button shadow animate green\"><strong>¡PEDIR CITA!</Strong><br></button></a>
                            </td>";
                        }

                       $z++;
                }   
            }     
            echo "</tr>";
        }
            
        ?>           
    </table>
    </form>
    
    <div> 
                  <a href="MenuDeBienvenida.php" name="Submit" class="btn btn-lg btn-primary btn-blockcentro">Volver</a>
        </div>
        
    
</body>
</html>