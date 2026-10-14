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
        <a href="index.php" class="material-symbols-outlined">home</a>
    </HEADER>
<table align="center" border="1" style="width: 80%; margin-top: 20px; border-collapse: collapse;">
    <h1 align="center"> Mensajes recibidos</h1>
    <tr>
        <th style="background-color: violet; color: white;">ID</th>        
        <th style="background-color: violet; color: white;">Nombre</th>
        <th style="background-color: violet; color: white;">Correo</th>
        <th style="background-color: violet; color: white;">Mensaje</th>
        <th style="background-color: violet; color: white;">Opciones</th>
    </tr>    
        <tr>
        <th style="background-color: white;">1</th>        
        <th style="background-color: white;">Ana</th>
        <th style="background-color: white;">ana@example.com</th>
        <th style="background-color: white;">Hola, me interesa tu portafolio</th>
        <th style="background-color: white;">
        <span class="material-symbols-outlined">delete</span>
        <a href="editar.php" class="material-symbols-outlined">edit</a>
        </th>
    </tr>
    </tr>    
        <tr>
        <th style="background-color: white;">1</th>        
        <th style="background-color: white;">Jose</th>
        <th style="background-color: white;">jose@example.com</th>
        <th style="background-color: white;">Quisiera mas informacion sobre tus proyectos</th>
        <th style="background-color: white;">
        <span  href="eliminar.php" class="material-symbols-outlined">delete</span>
        <a href="editar.php" class="material-symbols-outlined">edit</a>
        </th>
    </tr>        
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