<?php
  require_once 'header.php';
  $error = $user = $pass = "";

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

echo <<<_END
      <form method='post' action='login.php'>
        <div>
          <label></label>
          <span class='error'>$error</span>
        </div>
        <div>
            <label></label>
            Porfavor Ingresa tus datos para Ingresar
        </div>  
        <div class="registrar" id="ini">
            <label>Nombre de Usuario:</label><br>
            <input class="llenado" type='text' maxlength='16' name='user' value='$user'>
            <br>
            <label>Contraseña:</label><br>
            <input class="llenado" type='password' maxlength='16' name='pass' value='$pass'>
        </div>
        <br>
        <div>
            <label></label>
            <input class="btn btn-success" type='submit' value='login'>
        </div>
      </form>
    </div>
  </body>
</html>
_END;
?>