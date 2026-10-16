<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zona administración</title>
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
    <HEADER>
        <h1> Zona administración</h1>
        <p id="texto"> Mensajes recibidos</p>
    </HEADER>
    <nav>
        <a href="index.php" class="material-symbols-outlined">home</a>
    </nav>
<table align="center" border="1" style="width: 80%; margin-top: 20px; border-collapse: collapse;">
    <h1 align="center"> Mensajes recibidos</h1>
    <thead>  
    <tr>
        <th style="background-color: purple; color: white;">Nombre</th>
        <th style="background-color: purple; color: white;">Correo</th>
        <th style="background-color: purple; color: white;">Mensaje</th>        
        <th style="background-color: purple; color: white;">Fecha</th>
        <th style="background-color: purple; color: white;">Opciones</th>
    </tr>  
    </thead>
    <tbody>
        <?php
        require_once "consulta_mensajes.php";
        $rsMensajes = consultaMensajes();
        while($arrMensaje = mysqli_fetch_assoc($rsMensajes)){
        echo "<tr>
        <td style='background-color: white;'>".$arrMensaje['nombre']."</td>        
        <td style='background-color: white;'>".$arrMensaje['correo']."</td>
        <td style='background-color: white;'>".$arrMensaje['mensaje']."</td>
        <td style='background-color: white;'>".$arrMensaje['timeStamps']."</td>
        <td style='background-color: white;'>
        <span class='material-symbols-outlined'>delete</span>
        <a href='editar.php' class='material-symbols-outlined'>edit</a>
        </td>
        </tr>";
       }
    ?>
    </tbody>      
</table>
<p></p>
<p></p>
<p></p>
<footer>  
        <p> 2026 Mi portafolio web</p>
        <p> Practica de programacion Web todos los derechos reservados </p>
</footer>
</body>
</html>