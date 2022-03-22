<?php

    $usuario = $_POST["usu"];
    $password = $_POST["pass"];
    $confirm_password = $_POST["c_pass"];

    include("Conexion.php");

    if ($database->connect_error) {
        echo "Error :(";
    }

    if ($password == $confirm_password) {
        $sql = $database->query("INSERT INTO usuarios (Usuario,Contrasena) VALUES ('$usuario','$password')");

        if ($sql == true) {
            echo "Registro Exitoso";
            header("Location: login.php");
        } else {
            echo "Registro Fallido";
        }
    } else {
        header("Location: registro.php");
    }

?>