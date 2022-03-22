<?php 

    $user = $_POST["usu"];
    $pass = $_POST["pass"];

    include("Conexion.php");

    if ($database->connect_error) {
        echo "Error :(";
    }

try {
    $sql = $database->query("SELECT * FROM usuarios WHERE Usuario='$user' AND Contrasena='$pass'");

    if ($sql->num_rows != 0) {
        session_start();
        $_SESSION["usuario"]=$user;
        header("Location: imc.php");
    } else {
        header("Location: login.php");
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>