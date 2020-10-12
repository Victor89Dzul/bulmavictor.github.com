<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <h1 class="titulos">Marcos con exelentes diseños</h1>
        <br>
        <br>

        <div class="row">
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/cuadro1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cuadro General</h5>
              <p class="card-text">Para todo tipo de remplazo</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/cuadro2.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cuadro Profecional</h5>
              <p class="card-text">Para uso personal/Profecional</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/cuadro3.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cuadro Multiterreno</h5>
              <p class="card-text">Pon a prueba su resistencia</p>
              <a href="pago.php" class="btn btn-success">Comprar <img src="../img/carrito.webp" class="carrito"></a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/cuadro4.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Cuadro Multiuso</h5>
              <p class="card-text">Para una mejor experiencia</p>
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