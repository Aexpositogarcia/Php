<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <link rel="stylesheet" href="css/stylemenu.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   
    
  </head>
</head>

<body>

<table class="table-fill">
<thead>

<tr>
    <th class="text-left">Nombre</th>
    <th class="text-left">Fecha</th>
    <th class="text-left">Codigo Chip</th>
    <th class="text-left">Tipo</th>
    <th class="text-left">Borrar</th>
</tr>
</thead>
    <tbody class="table-hover">
        <?php
            include_once("Clases/Usuarios.php");
            session_start();


            $objeto=$_SESSION['usuario']; 
            $email=$objeto->getEmail();

            $conexion=mysqli_connect("localhost","root","","proyectophp") or
            die("Problemas con la conexión");

            $registros=mysqli_query($conexion,"select 
            
                Nombre,
                Fecha_nac,
                Codigochip,
                Tipo
                from animales where propietario='".$email."'") or
                die("Problemas en el select:".mysqli_error($conexion));


            while ($reg=mysqli_fetch_array($registros))
            {
                
                echo "<tr>";
                echo "<td class=\"text-left\">".$reg['Nombre']."</td>";
                echo "<td class=\"text-left\">".$reg['Fecha_nac']."</td>";
                echo "<td class=\"text-left\">".$reg['Codigochip']."</td>";
                echo "<td class=\"text-left\">".$reg['Tipo']."</td>";
                echo "<td class=\"text-left\"><a href=\"borrarAnimal.php?codigo=".$reg['Codigochip']."\" class=\"btn btn-info btn-lg\">
                <span class=\"glyphicon glyphicon-trash\"></span> Trash</a></td>";
                echo "</tr>";
            }
        ?>       

    </tbody>
</table>


</div>
  

</body>
</html>