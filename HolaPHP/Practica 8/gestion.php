<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="bonito.css"> 
</head>
<body>
    <main class="contenedor">
    <a class="volver" href="index.php">Volver al menú</a>
    <table align="center" border="1" style="width: 80%; margin-top: 20px; border-collapse: collapse;">
    <h1 align="center"> Gestion de solicitudes</h1>
    <thead>  
    <tr>
        <th style="background-color: purple; color: white;">id_usuario</th>
        <th style="background-color: purple; color: white;">id_equipo</th>
        <th style="background-color: purple; color: white;">Problema</th>        
        <th style="background-color: purple; color: white;">Estado</th>
        <th style="background-color: purple; color: white;">Observaciones</th>
        <th style="background-color: purple; color: white;">Modificar estado</th>
    </tr>  
    </thead>
    <tbody>
        <?php
        require_once "consulta_solicitudes.php";
        $rsMensajes = consultaSolicitudes();
        while($arrMensaje = mysqli_fetch_assoc($rsMensajes)){
        echo "<tr>
        <td style='background-color: white;'>".$arrMensaje['id_usuario']."</td>        
        <td style='background-color: white;'>".$arrMensaje['id_equipo']."</td>
        <td style='background-color: white;'>".$arrMensaje['problema']."</td>
        <td style='background-color: white;'>".$arrMensaje['estado']."</td>
        <td style='background-color: white;'>".$arrMensaje['observacion']."</td>
        <td style='background-color: white;'>
        <a href='estatus.php?id_usuario=".urlencode($arrMensaje['id_usuario'])."&id_equipo=".urlencode($arrMensaje['id_equipo'])."&problema=".urlencode($arrMensaje['problema'])."&estado=".urlencode($arrMensaje['estado'])."' 
        class='material-symbols-outlined'>Edit </a>
        </td>
        </tr>";
       }
    ?>
    </tbody>      
</table>
</body>
</html>