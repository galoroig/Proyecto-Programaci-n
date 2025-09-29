<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["usuarioInicio"])) {
    header("Location: Login.php?cerrado=1");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="btn btn-primary" href="Logout.php">Cerrar Sesion</a>
    <a class="btn btn-primary" href="agregarMoto.php">Agregar Moto</a>
  </div>
</nav>
<div class="p-4 container-fluid">
  <div class="row">
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Tipos</th>
            </tr>
        </thead>
        <tbody>
          <?php
            require_once "User.php";
            $user = new User();
            $users = $user->getAll();
            foreach ($users as $u) {
              echo "<tr>" .
                "<th scope='row'>" . $u['id_users'] . "</th>
                <td>" . $u['nombre_user'] . "</td>
                <td>" . $u['tipo'] . "</td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Cilindrada</th>
            <th scope="col">Presupuesto</th>
            <th scope="col">Potencia</th>
            <th scope="col">Combustible</th>
            <th scope="col">Peso</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <?php
            include "eliminar.php";
            require_once "Motos.php";
            $moto = new Moto();
            $motos = $moto->getAll();
            foreach ($motos as $m) {
              echo "<tr>" .
                "<th scope='row'>" . $m['id'] . "</th>
                <td>" . $m['nombre'] . "</td>
                <td>" . $m['tipo'] . "</td>
                <td>" . $m['cilindrada'] . "</td>
                <td>" . $m['presupuesto'] . "</td>
                <td>" . $m['potencia'] . "</td>
                <td>" . $m['combustible'] . "</td>
                <td>" . $m['peso'] . "</td>
                <td>
                  <a href='Admin.php?id={$m['id']}'>Eliminar</a>" . "-" .
                  "<a href='editar.php?id={$m['id']}'>Editar</a>
                </td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
<?php
require_once "Motos.php";
?>