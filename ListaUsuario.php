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

<table class="table-fill">
<thead>

<tr>
    <th class="text-left">Email</th>
    <th class="text-left">Nombre</th>
    <th class="text-left">Contraseña</th>
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
            
                email,
                nombre,
                contrasenia

                from usuario") or
                die("Problemas en el select:".mysqli_error($conexion));


            while ($reg=mysqli_fetch_array($registros))
            {
                //Si no es admin no se imprime
                if($reg['email']!="admin@admin"){
                
                echo "<tr>";
                echo "<td class=\"text-left\">".$reg['email']."</td>";
                echo "<td class=\"text-left\">".$reg['nombre']."</td>";
                echo "<td class=\"text-left\">".$reg['contrasenia']."</td>";
                
                echo "<td class=\"text-left\">
                <a href=\"borrarUsuario.php?codigo=".$reg['email']."\" class=\"material-icons button delete\">delete</a></td>";
                
                echo "</tr>";
                }
            }
        ?>       

    </tbody>
</table>


</div>
  

</body>
</html>