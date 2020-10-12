<?php
  require_once 'header.php';
  /*$error = $user = $pass = "";

  if (isset($_POST['user']))
  {
    $user = sanitizeString($_POST['user']);
    $pass = sanitizeString($_POST['pass']);

    if ($user == "" || $pass == "")
      $error = 'No se llenaron todos los campos';
    else
    {
      $result = queryMySQL("SELECT user,pass FROM members 
        WHERE user='$user' AND pass='$pass'");

      if ($result->num_rows == 0)
      {
        $error= "Intento de Ingreso Invalido";
      }
      else
      {
        $_SESSION['user'] = $user;
        $_SESSION['pass'] = $pass;
        die("<div class= 'center'>Ya has iniciado. dirijase a Home
              <a data-transition='slide' href='members.php?view=$
              Para Continar.</div></div></body></html>");
      }
    }    
  }
*/
echo <<<_END
            Porfavor Ingresa tus datos para Ingresar
        </div>  
        <div class="registrar" id="ini">
        <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4">Usuario</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress">Nombre/s</label>
          <input type="text" class="form-control" id="inputAddress">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Apellidos</label>
          <input type="text" class="form-control" id="inputAddress2">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">Número de Tarjeta</label>
            <input type="text" class="form-control" id="inputCity" maxlength='16'>
          </div>
          <div class="form-group col-md-2">
            <label for="inputState">Fecha de</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Dia/Mes" maxlength='4'>
          </div>
          <div class="form-group col-md-2">
            <label for="inputState">Expiracion</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Año" maxlength='4'>
          </div>
          <div class="form-group col-md-2">
            <label for="inputZip">Seguridad</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="3 Digitos" maxlength='3'>
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Estoy de acuerdo con los terminos y condiciones
            </label>
          </div>
        </div>
        <a class="btn btn-success" href='home.php'>Realizar Pago</a>
      </form>

  </body>
</html>
_END;
?>