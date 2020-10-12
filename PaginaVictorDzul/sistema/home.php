<?php
  require_once 'header.php';

echo <<<_END
        <br>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
         <div class="carousel-inner">
           <div id= "centro" class="carousel-item active">
             <img src="../img/carrusel1.png" class="tamaño" alt="...">
           </div>
           <div id= "centro" class="carousel-item">
             <img src="../img/carrusel2.png" class="tamaño" alt="...">
           </div>
           <div id= "centro" class="carousel-item">
             <img src="../img/carrusel3.png" class="tamaño" alt="...">
           </div>
         </div>
         <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
           <span class="carousel-control-next-icon" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div>
        <br>

        <br>
        <div>
        <h1 class="titulos">Puede consultar cualquir producto aqui!!!</h1>
        <br>
        </div>
        <br>
        <div class="row">
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/bici1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Bicicletas</h5>
              <a href="modelo.php" class="btn btn-primary">Ver Mas</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/llanta1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Llantas</h5>
              <a href="llantas.php" class="btn btn-primary">Ver Mas</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/asiento1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">Asientos</h5>
              <a href="Asientos.php" class="btn btn-primary">Ver Mas</a>
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="card">
          <img src="../img/cuadro1.jpg" class="imgcarta" alt="...">
            <div class="card-body">
              <h5 class="card-title">marcos</h5>
              <a href="cuadros.php" class="btn btn-primary">Ver Mas</a>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>

      <div class="row">
        <div class="col-sm-4">
          <div class="">
          <img src="../img/correo.png" class="contactos" alt="...">
            <div class="card-body">
              <h5 class="titulos">servicletas@gmail.com</h5>
              <p class="titulos">Correo de contacto</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="">
          <img src="../img/tel.png" class="contactos" alt="...">
            <div class="card-body">
              <h5 class="titulos">55-983-002-24-06</h5>
              <p class="titulos">Telefono de contacto</p>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="">
          <img src="../img/feis.png" class="contactos" alt="...">
            <div class="card-body">
              <h5 class="titulos">"Servicletas" en facebook</h5>
              <p class="titulos">Dale like a nuestra pagina</p>
            </div>
          </div>
        </div>
      </div>
      
      <br>
      <div class="pie">
      <h5>Web App from <i><a href='...'
      target='_blank'>Web Development</a></i></h5>
      <h6>Echo en mexico. CBTIS 253, Todos los derechos reservados ?-2020</h6>
      <h6>Esta pagina puede ser reproducida con fines no lucrativos siempre y cuando no se mutile, se cite la fuente completa y su direccion electronica</h6>
    </div>
  </body>
</html>
_END;
?>