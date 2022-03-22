<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_imc.css">
    <style>
      .registros {
        width: auto;
        height: auto;
      }
      .registro {
        margin: 0 auto;
        border-collapse: collapse;
        width: 20em;
        text-align: center;
      }
      .registro td,th {
        padding: 10px;
        border: 2px solid black;
      }
    </style>
    <title>Document</title>
</head>
<body>
<?php

    session_start();
    if (!isset($_SESSION["usuario"])) {
    header("Location: login.php");
    }

?>

<div class="registros">
<a href="imc.php" style="text-decoration: none; color: black;"><button class="boton">Volver</button></a>
    <h1 style="text-align: center;">Historial de Registros</h1>
      <table class="registro">
        <tr>
          <th>Usuario</th>
          <th>Fecha</th>
          <th>IMC</th>
          <th><a href="Borrar_Todo.php"><input type="button" value="Borrar Todo" style="padding: 10px;"></a></th>
        </tr>

        <?php 

        $usuario = $_SESSION["usuario"];
        include("Conexion.php");
        $sql = $database->query("SELECT * FROM registros WHERE Usuario='$usuario'");

        while ($fila = $sql->fetch_assoc()) {
          ?>
            <tr>
              <td><?php echo $fila["Usuario"]; ?></td>
              <td><?php echo $fila["Fecha"]; ?></td>
              <td><?php echo $fila["IMC"]; ?></td>
              <td><a href="Borrar.php?id=<?php echo $fila['ID'] ?>"><input type="button" value="Borrar" style="padding: 10px;"></a></td>
            </tr>
          <?php
          
        }
          
          ?>
      </table>
      <style>
          .boton {
              width: 7em;
              height: 50px;
              margin-left: 28.5em;
              cursor: pointer;
            }
      </style>
    </div>
</body>
</html>