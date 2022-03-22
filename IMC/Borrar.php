<?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
    }

    $id = $_GET["id"];

    include("Conexion.php");

    $sql = $database->query("DELETE FROM registros WHERE ID='$id'");

    if ($sql == true) {
        echo "Eliminacion Exitosa :)";
    } else {
        echo "Error :(";
    }

    header("Location: historial.php")

?>