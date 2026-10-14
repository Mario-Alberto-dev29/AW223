<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/estilos.css"> 
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
</head>
<body>
  <HEADER>
        <h1> Zona administración</h1>
        <p id="texto"> Formulario para editar</p>
        <a href="admin.php" class="material-symbols-outlined">arrow_back</a>
        <a href="index.php" class="material-symbols-outlined">home</a>
    </HEADER>
    <section id="contacto">

        <h2>Editar mensaje</h2>

        <form>

          <div class="campo">
            <label for="nombre">
              Nombre
            </label>
            <input
              type="text"
              id="nombre"
              name="nombre"
              placeholder="Escribe tu nombre"
            >
          </div>

          <div class="campo">
            <label for="email">
              Correo electrónico
            </label>
            <input
              type="email"
              id="email"
              name="email"
              placeholder="ejemplo@correo.com"
            >
          </div>

          <div class="campo">
            <label for="mensaje">
              Mensaje
            </label>

            <textarea
              id="mensaje"
              name="mensaje"
              rows="5"
              placeholder="Escribe tu mensaje"
            ></textarea>
          </div>

          <button onclick = validar()>
            Enviar mensaje
          </button>

        </form>

      </section>
    <footer>  
        <p> 2026 Mi portafolio web</p>
        <p> Practica de programacion Web todos los derechos reservados </p>
    </footer>
    <script src="cambios.JS">   
    </script>
</body>
</html>