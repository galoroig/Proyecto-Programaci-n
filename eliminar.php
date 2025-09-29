<?php
if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    require_once "Motos.php";
    $moto = new Moto();
    $moto -> delete($id);
}
?>