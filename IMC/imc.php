<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <link rel="stylesheet" href="css/style_imc.css">
  </head>
  <body>
    <?php
    
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location: login.php");
    }
    
    ?>
    <h1 class="titulo">Fórmula IMC</h1>
    <div class="imc">
    <form class="calculator" method="GET" action="result.php">
      <h1>Calculo de IMC</h1>
      <h1>Hola <?php echo $_SESSION["usuario"] ?></h1>
      <table class="calculo">
        <tbody>
          <tr>
            <td style="border: none;">Altura (CM)</td>
            <td style="border: none;"><input type="number" name="height" min="0" max="230"></td>
          </tr>
          <tr>
            <td style="border: none;">Peso</td>
            <td style="border: none;"><input type="number" name="weight" min="0" max="150"></td>
          </tr>
        </tbody>
      </table>
      <button type="submit">Calcular</button> <br>
      <button> <a href="Cerrar.php" style="text-decoration: none; color: black;"> Cerrar Seccion </a> </button>
      <button> <a href="historial.php" style="text-decoration: none; color: black;"> Ver Historial </a> </button>
    </form>
    </div>
  </body>
</html>
