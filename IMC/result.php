

<?php

$bmi = 0;

function calcBMI($weight, $height) { // Esta funcion calcula el IMC.
  return $weight/($height*$height);
}

$weight = $_GET['weight']; // Peso KG
$height = $_GET['height']; // Altura CM 

$error = false;
$error_msg = "";

// Parametros de Validacion
if (!is_numeric($weight)) {
  $error = true;
  $error_msg = "Peso Invalido, Ingresa Correctamente!";
}

if (!is_numeric($height)) {
  $error = true;
  $error_msg = "Alto Invalido, Ingresa Correctamente!";
}

// If not error
if (!$error) {
  $height /= 100; // Set to M
  $bmi = calcBMI($weight, $height);
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator - Result</title>
    <link rel="stylesheet" href="css/style_result.css">
  </head>
  <body>
  <?php
    
    session_start();

    if (!isset($_SESSION["usuario"])) {
        header("Location: Login.php");
    }

?>
    <div class="result">
      <?php if (!$error): ?>
        <div>Tu Peso: <?= $weight ?></div>
        <div>Tu Altura: <?= $height ?></div>
        
        <div>Estado Actual de <?php echo $_SESSION["usuario"] ?>: 

        <?php if ($bmi < 18.5):?>
          Bajo peso <br>
        <?php elseif ($bmi < 25): ?>
          Normal <br>
        <?php elseif ($bmi < 30): ?>
          Sobrepeso <br>
        <?php elseif ($bmi < 35): ?>
          Obesidad 1 <br>
        <?php elseif ($bmi < 40): ?>
          Obesidad 2 <br>
        <?php elseif ($bmi < 50): ?>
          Obesidad 3 <br>
        <?php elseif ($bmi >= 50): ?>
          Obesidad 4 <br>
        <?php endif; ?>

        <?php if ($bmi < 18.5): /* Set video*/ ?>
          <a href="https://www.topdoctors.es/diccionario-medico/bajo-peso">Subir de peso</a>
          <video src="video.mp4" width="640" height="480"></video>
          <?php elseif ($bmi >= 25): ?>
          <a href="https://fundaciondelcorazon.com/nutricion/dieta.html">Bajar de peso</a>
        <?php endif; ?>
        </div>
        <div class="bmi">Tu IMC: <?= number_format($bmi) ?></div>
      <?php else:  /* If error */ ?> 
        <div class="error"><?= $error_msg ?></div>
      <?php endif ?>
      <a href="index.php">
        <a href="imc.php"><button>Volver</button></a>
      </a>
    </div>
    <br>
    <?php 

        $usuario = $_SESSION["usuario"];
        include("Conexion.php");
        $sql = $database->query("INSERT INTO registros (ID,Usuario,Fecha,IMC) VALUES (null,'$usuario',CURRENT_TIMESTAMP(),'$bmi')");

        if ($sql == false) {
          echo "Registro Fallido :(";
        }

    ?>
    <div>
      <table class="tabla_resultado">
        <tr>
          <th>IMC</th>
          <th>Estado</th>
        </tr>

        <tr>
          <td>18.5</td>
          <td>Bajo Peso</td>
        </tr>

        <tr>
          <td>18.5-24.9</td>
          <td>Normal</td>
        </tr>

        <tr>
          <td>25-29.9</td>
          <td>Sobrepeso</td>
        </tr>

        <tr>
          <td>30-34.9</td>
          <td>Obesidad I</td>
        </tr>

        <tr>
          <td>35-39.9</td>
          <td>Obesidad II</td>
        </tr>
        
        <tr>
          <td>40-49.9</td>
          <td>Obesidad III</td>
        </tr>

        <tr>
          <td>50+</td>
          <td>Obesidad IV</td>
        </tr>
      </table>
    </div>
  </body>
</html>

