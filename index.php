<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EJERCICIO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body class="bg-success">
  <!-- Button trigger modal -->
  <button type="button" class="btn btn-primary ms-3 mt-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
    DESPLEGAR
  </button>

  <!-- Modal -->
  <div class="modal fade bg-primary" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content bg-warning">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">EJERCICIO</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="cuadro">
            <h2>Iniciar Sesión</h2>
            <form action="" method="post">
              <div class="form-group">
                <label for="usuario">Nombre:</label>
                <input type="text" id="usuario" name="usuario" required>
              </div>
              <div class="form-group">
                <label for="contrasena">Apellido:</label>
                <input type="password" id="contrasena" name="contrasena" required>
              </div>
              <div class="form-group">
                <label for="contrasena">Catalogo:</label>
                <input type="password" id="contrasena" name="contrasena" required>
              </div>
              <div class="form-group">
                <label for="contrasena">Rango:</label>
                <input type="password" id="contrasena" name="contrasena" required>
              </div>
              <div class="form-group">
                <label for="contrasena">Dirección:</label>
                <input type="password" id="contrasena" name="contrasena" required>
              </div>
              <div class="form-group">
                <button type="submit"><a href="#">Enviar</a></button>
              </div>
            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-primary">¿Desea enviar esta informacion?</button>
        </div>
      </div>
    </div>
  </div>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>