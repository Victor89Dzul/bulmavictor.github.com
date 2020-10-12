<?php
  require_once 'header.php';

echo <<<_END
    <br>
    <h1 class="titulos">Modelos de bicicletas disponibles</h1>
    <br>
    <br>

    <div class="row">
      <div class="col-sm-3">
        <div class="card">
        <img src="../img/bici1.jpg" class="imgcarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bicicleta de montaña</h5>
            <p class="card-text">Bicicleta de uso rudo para montaña</p>
            <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
        <img src="../img/bici2.jpg" class="imgcarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bicicleta profesional</h5>
            <p class="card-text">Bicicleta para competidores profesionales</p>
            <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
        <img src="../img/bici3.jpg" class="imgcarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bicicleta para niña/o</h5>
            <p class="card-text">Bicicleta Comoda y sencilla para todos</p>
            <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
          </div>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="card">
        <img src="../img/bici4.jpg" class="imgcarta" alt="...">
          <div class="card-body">
            <h5 class="card-title">Bicicleta de carreras</h5>
            <p class="card-text">Bicicleta Ligera y compacta de uso profesional</p>
            <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
          </div>
        </div>
      </div>
    </div>
    
    <br>
    <br>
    <footer class="pie">
    dawdadawd
    </footer>
  </body>
</html>
_END;
?>