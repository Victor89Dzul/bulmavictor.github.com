<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos">Seleccion de Llantas disponibles</h1>
        <br>
        <br>
        
        <div class="row">
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/llanta1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rines para llantas</h5>
              <p class="card-text">perfecto para cambio de llantas o repuesto</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/llanta2.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Rines llantas profecionales</h5>
              <p class="card-text">Uso competitivo</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/llanta3.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Llantas todo terreno</h5>
              <p class="card-text">Para poner a prueba todo terreno</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/llanta4.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Llantas ligeras de montaña</h5>
              <p class="card-text">Para uso rudo</p>
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