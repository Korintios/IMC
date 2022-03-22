<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Register</title>
    <link rel="stylesheet" href="css/style_register.css">
  </head>
  <body>
    <h1 class="titulo">Fórmula IMC</h1>
    <form class="calculator" method="post" action="registro.php">
    <h1>¿Ya estas registrado? <a href="login.php">Logeate</a></h1>
      <table>
        <tbody>
          <tr>
            <td>Usuario:</td>
            <td><input type="text" name="usu" min="0" max="18"></td>
          </tr>
          <tr>
            <td>Contraseña:</td>
            <td><input type="password" name="pass" min="0" max="20"></td>
          </tr>
          <tr>
            <td>Confirmar Contraseña:</td>
            <td><input type="password" name="c_pass" min="0" max="20"></td>
          </tr>
        </tbody>
      </table>
      <button type="submit">Registrar</button>
    </form>
  </body>
</html>