<?php
  
  require_once 'header.php';

  echo "<div class='center'>Bienvenido,";

  if ($loggedin) echo " $user, Ya estas en tu secion";
  else           echo ' porfavor inicia secion o registrate para continuar';

  echo <<<_END
      </div><br>
    </div>
    <br>
    <br>
    <br>
    <div class="pie">
      <h4>Web App from <i>
      target='_blank'>Web Development</a></i></h4>
      <h6>Echo en mexico. CBTIS 253, Todos los derechos reservados ?-2020</h6>
      <h6>Esta pagina puede ser reproducida con fines no lucrativos siempre y cuando no se mutile, se cite la fuente completa y su direccion electronica</h6>
    </div>
  </body>
</html>
_END;        

?>