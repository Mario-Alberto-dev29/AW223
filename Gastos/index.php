<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="stylesheet" href="estetica.css"> 
</head>
<body>
    <main class="contenedor">
    <a class="volver" href="index.php">Volver al menú</a>
    <table align="center" border="1" style="width: 80%; margin-top: 20px; border-collapse: collapse;">
    <h1 align="center"> Control de gastos personales</h1>
    <h1 align="center"> Añadir nuevo gasto </h1>   
    <form align="center" method="POST" action="registrar.php" id="formUsuario">
        <label for="nombre">Concepto:</label>
        <input type="text" id="concepto" name="concepto"
               maxlength="100" required>
            <label for="nombre">Monto:</label>
        <input type="text" id="monto" name="monto"
               maxlength="100" required>
            <label for="nombre">Categoria:</label>
        <input type="text" id="categoria" name="categoria"
               maxlength="100" required>
        <button type="submit">Registrar nuevo gasto</button>
    </form> 
    <h1 align="center"> Gastos registrados</h1>
    <thead>  
    <tr>
        <th style="background-color: purple; color: white;">Concepto</th>
        <th style="background-color: purple; color: white;">Monto</th>        
        <th style="background-color: purple; color: white;">Categoria</th>
        <th style="background-color: purple; color: white;">Pagado</th>
        <th style="background-color: purple; color: white;">Fecha</th>
        <th style="background-color: purple; color: white;">Marcar pagado</th>
    </tr>  
    </thead>
    <tbody>
        <?php
        require_once "consulta_gastos.php";
        $rsMensajes = consultaGastos();
        while($arrMensaje = mysqli_fetch_assoc($rsMensajes)){
        echo "<tr>
        <td style='background-color: white;'>".$arrMensaje['concepto']."</td>        
        <td style='background-color: white;'>".$arrMensaje['monto']."</td>
        <td style='background-color: white;'>".$arrMensaje['categoria']."</td>
        <td style='background-color: white;'>".$arrMensaje['pagado']."</td>
        <td style='background-color: white;'>".$arrMensaje['fecha']."</td>
        <td style='background-color: white;'>
        <a href='estatus.php?id=".urlencode($arrMensaje['id'])."' 
        class='material-symbols-outlined'>Edit </a>
        </td>
        </tr>";
       }
    ?>
    </tbody>      
</table>
</body>
</html>