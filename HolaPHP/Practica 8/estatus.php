<?php
$id_usuario = $_GET['id_usuario'] ?? '';
$id_equipo  = $_GET['id_equipo'] ?? '';
$problema   = $_GET['problema'] ?? '';
$estado     = $_GET['estado'] ?? '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bonito.css"> 
</head>
<body>
<HEADER>
    <h1>Editar estatus de solicitud</h1>
    <nav>
        <a href="index.php" class="material-symbols-outlined">home</a>
    </nav>
</HEADER>
 <h2>Editar mensaje</h2>

        <form id="formulario" action="mandar.php" method="post">

        <input type="hidden" name="id_usuario" value="<?= htmlspecialchars($id_usuario, ENT_QUOTES, 'UTF-8') ?>">

        <input type="hidden" name="id_equipo" value="<?= htmlspecialchars($id_equipo, ENT_QUOTES, 'UTF-8') ?>">

        <input type="hidden" name="problema" value="<?= htmlspecialchars($problema, ENT_QUOTES, 'UTF-8') ?>">

         <div class="campo">
            <label for="nombre">
              Estado
            </label>
            <input
              type="text"
              id="estado"
              name="estado"
              value="<?= htmlspecialchars($estado, ENT_QUOTES, 'UTF-8') ?>"
              required>
          </div>

          <div class="campo">
            <label>
              Observaciones (opcional)
            </label>
            <input
              type="text"
              id="observacion"
              name="observacion"
              placeholder="Escribe aqui las observaciones que tengas"
              >
          </div>
          <button type="submit">
          Enviar modificaciones
          </button>
        </form>
</body>
</html>