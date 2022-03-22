<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Login</title>
    <link rel="stylesheet" href="css/style_login.css">
  </head>
  <body>
    <h1 class="titulo">Fórmula IMC</h1>
    <form class="calculator" method="post" action="comprobar_login.php">
      <h1>¿No te has registrado? <a href="register.php">Registrate</a></h1>
      <table>
        <tbody>
        <tr>
            <td>Usuario:</td>
            <td><input type="text" name="usu" min="0" max="230"></td>
          </tr>
          <tr>
            <td>Contraseña:</td>
            <td><input type="password" name="pass" min="0" max="150"></td>
          </tr>
        </tbody>
      </table>
      <button type="submit">Ingresar</button>
    </form>
  </body>
</html>