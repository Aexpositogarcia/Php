<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
   
    
  </head>
</head>

<body>

    <table class="table-fill" >
        
    <thead>

    <tr>
        <th class="text-left">Nombre</th>
        <th class="text-left">Fecha</th>
        <th class="text-left">Codigo Chip</th>
        <th class="text-left">Tipo</th>
        <th class="text-left">Propietario</th>
        <th class="text-left">Admin</th>
    </tr>
    </thead>
        <tbody class="table-hover">
            <?php
                include_once("Clases/Usuarios.php");
                include("Clases/Animales.php");
                session_start();


                $objeto=$_SESSION['usuario']; 
                $email=$objeto->getEmail();

                $conexion=mysqli_connect("localhost","root","","proyectophp") or
                die("Problemas con la conexión");

                $registros=mysqli_query($conexion,"select 
                
                    Nombre,
                    Fecha_nac,
                    Codigochip,
                    Tipo,
                    propietario
                    from animales ") or
                    die("Problemas en el select:".mysqli_error($conexion));


                while ($reg=mysqli_fetch_array($registros))
                {
                    
                    $animal=new Animales($reg['Fecha_nac'],$reg['Nombre'],$reg['Codigochip'],$reg['Tipo']);
                    //SE SERIALIZA EL OBJETO PARA PASARLO POR PARAMETRO
                    $animals=serialize($animal);
                    echo "<tr>";
                    echo "<td class=\"text-left\">".$reg['Nombre']."</td>";
                    echo "<td class=\"text-left\">".$reg['Fecha_nac']."</td>";
                    echo "<td class=\"text-left\">".$reg['Codigochip']."</td>";
                    echo "<td class=\"text-left\">".$reg['Tipo']."</td>";
                    echo "<td class=\"text-left\">".$reg['propietario']."</td>";
                    echo "<td class=\"text-left\">
                    

                    <a href=\"modificarAnimal.php?animal=$animals\" class=\"material-icons button edit\">edit</a>
                    <a href=\"borrarAnimal.php?codigo=".$reg['Codigochip']."\" class=\"material-icons button delete\">delete</a></td>";
                    

                    echo "</tr>";
                }
            ?>       
            

        </tbody>
       
    </table>
        

</div>
<div> 
                  <a href="MenuDeBienvenida.php" name="Submit" class="btn btn-lg btn-primary btn-blockcentro">Volver</a>
        </div>

</body>
</html>