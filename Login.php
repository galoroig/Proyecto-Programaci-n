<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
  <div class="container-fluid row">
    <form method="POST" class="col-4 m-auto">
      <div class="mb-3">
        <h1>Iniciar Sesion</h1>
        <label for="exampleInputEmail1" class="form-label">Usuario</label>
        <input type="text" class="form-control" name="usuarioInicio">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="claveInicio">
      </div>
      <button type="submit" class="btn btn-primary" name="iniciar">Iniciar Sesion</button>
      <br></br>
      <div>
        <a href="Register.php" class="btn btn-primary">Registrar</a>
      </div>
      <?php
      include("controladorLogin.php");
      ?>
      <div>juan 1234 usuario</div>
      <div>galo 12345 admin</div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>