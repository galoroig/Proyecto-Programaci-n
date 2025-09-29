<?php
session_start();
require_once "User.php";
if (isset($_POST["iniciar"])) {
    if (empty($_POST["usuarioInicio"]) || empty($_POST["claveInicio"])) {
        echo "Uno de los campos esta vacio";
    }
    else {
        $user = new User();
        $users = $user->getAll();
        $encontrado = false;
        foreach($users as $u){
            if (($u['nombre_user'] === $_POST["usuarioInicio"])) {
                if (($u["tipo"] === "usuario") && password_verify($_POST["claveInicio"], $u['contrasena'])) {
                    $_SESSION["usuarioInicio"] = $_POST["usuarioInicio"];
                    header("Location: Pagina.php");
                    exit();
                }
                if (($u["tipo"] === "admin") && password_verify($_POST["claveInicio"], $u['contrasena'])) {
                    $_SESSION["usuarioInicio"] = $_POST["usuarioInicio"];
                    header("Location: Admin.php");
                    exit();
                }
                $encontrado = true;
            }
        }
        if ($encontrado = false){
                echo "Usuario no encontrado";
        }
    }
}
?>