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
    <th class="text-left">Propietario</th>
    <th class="text-left">Descripcion</th>
    <th class="text-left">Fecha</th>
    <th class="text-left">Animal</th>
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
            
                id,
                propietario,
                descripcion,
                fecha,
                animal
                from citas") or
                die("Problemas en el select:".mysqli_error($conexion));


            while ($reg=mysqli_fetch_array($registros))
            {
                
                echo "<tr>";
                echo "<td class=\"text-left\">".$reg['propietario']."</td>";
                echo "<td class=\"text-left\">".$reg['descripcion']."</td>";
                echo "<td class=\"text-left\">".$reg['fecha']."</td>";
                echo "<td class=\"text-left\">".$reg['animal']."</td>";
                echo "<td class=\"text-left\"><a href=\"borrarCita.php?codigo=".$reg['id']."\" class=\"btn btn-info btn-lg\">
                <span class=\"glyphicon glyphicon-trash\"></span> Trash</a></td>";
                echo "</tr>";
            }
        ?>       

    </tbody>
    
</table>
    


  

</body>

</html>