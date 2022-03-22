<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
    }

    $usuario = $_SESSION["usuario"];

    include("Conexion.php");

    $sql = $database->query("DELETE FROM registros WHERE Usuario='$usuario'");

    if ($sql == true) {
        echo "Eliminacion Exitosa :)";
    } else {
        echo "Error :(";
    }

    header("Location: historial.php")

?>