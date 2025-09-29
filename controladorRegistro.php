<?php
require_once "User.php";
if (isset($_POST["registrar"])) {
    if (empty($_POST["usuario"]) || empty($_POST["clave"])) {
        echo "Uno de los campos esta vacio";
    }
    else {
        $usuario = $_POST["usuario"];
        $clave = $_POST["clave"];
        $hash = password_hash($clave, PASSWORD_DEFAULT);
        $user = new User();
        $user->add($usuario,$hash,"usuario");
        echo "registro exitoso";
    }
}
?>