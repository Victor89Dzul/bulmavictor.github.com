<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos">Asientos 100% comodos y adaptables</h1>
        <br>
        <br>

        <div class="row">
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/asiento4.png" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Asiento comodo</h5>
              <p class="card-text">Perfecto para las personas que hacen uso con frecuencia de la bicicleta</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/asiento1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">2 asientos intercambiables</h5>
              <p class="card-text">2 asientos por el precio de 1 faciles de poner y de quitar</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/asiento2.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Asieno profesional ligero</h5>
              <p class="card-text">Asiento para competidores y ciclistas experimentados en su ambito</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/asiento3.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Asiento hibrido</h5>
              <p class="card-text">Comodidad, diseño y sencilles en un solo asiento de nueva generacion</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
      </div>
        
        <br>
  </body>
</html>
_END;
?>