<?php
session_start();
require_once "User.php";
if (isset($_POST["iniciar"])) {
    if (empty($_POST["usuarioInicio"]) || empty($_POST["claveInicio"])) {
        echo "Uno de los campos esta vacio";
    }
    else {
        $_SESSION["usuarioInicio"] = $_POST["usuarioInicio"];
        $_SESSION["claveInicio"] = $_POST["claveInicio"];
        $user = new User();
        $users = $user->getAll();
        foreach($users as $u){
            if (($u['nombre_user'] === $_SESSION["usuarioInicio"])) {
                if (password_verify($_SESSION["claveInicio"], $u['contrasena'])) {
                    header("Location: Pagina.php");
                }
            }
            else {
                echo "usuario no encontrado";
            }
        }
    }
}
?>