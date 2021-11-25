<?php
  /* Call the PHP file with thr SQL query to insert data in database */
  require_once('./controller/createreg.php'); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/logo-spidy.png">
    <title>Spidy Bank Data</title>
    <!-- CSS files calls -->
    <link rel="stylesheet" href="./css/spidy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.css">
  </head>
  <body>
    <!-- Main header of landing page -->
    <div class="wrapper">
    <header>
      <div class="logo">
        <img src="images/logo-spidy.png" alt="">
      </div>
      <nav>
        <ul>
          <li><a class="btn" id="sc-js" href="javascript:;">Contactanos</a></li>
        </ul>
      </nav>
    </header>
    <!-- Mobile view container -->
    <div class="swiper-container v-hid">
      <div class="swiper-wrapper">
        <!-- Start of slide sections -->
        <div class="swiper-slide">
          <div class="text">
            <h1 class="pb-2">Spidy Bank Data</h1>
            <p>Transforma el rumbo de tu negocio, tenemos las <span>soluciones tecnológicas correctas</span>, hechas a tu medida</p>  
          </div>
        </div>
        <div class="swiper-slide">
          <div class="text">
            <h1 class="pb-2">Estadística</h1>
            <p>Conoce el comportamiento de tu negocio en todo momento, te ofrecemos el mejor servicio de estadísticas, facíl de manejar e interpretar</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="text">
            <h1 class="pb-2">Análisis</h1>
            <p>Comprende mejor lo que tus datos te quieren decir con nuestro servicio de análisis que integra todas las fuentes que necesites y dándoles un tratamiento adecuado</p>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="text">
            <h1 class="pb-2">BI</h1>
            <p>Toma las mejores decisiones para tu negocio aplicando las mejores técnicas de visualización, tratamientos y análisis de datos en un solo sistema</p>
          </div>
        </div>
        <div class="swiper-slide">
          <!-- Form card element -->
          <div class="text">
            <div class="card">
              <div class="card-header">
                  <h5 class="card-title">Formulario</h5>
              </div>
              <div class="card-body">
                <!-- PHP action to call this actual file again -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Nombre*</label>
                        <input name="spname" type="text" class="form-control" placeholder="Nombre(s)" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Apellido paterno*</label>
                        <input name="spap" type="text" class="form-control" placeholder="Apellido paterno" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Apellido materno</label>
                        <input name="spam" type="text" class="form-control" placeholder="Apellido materno" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Correo electrónico*</label>
                        <input name="spmail" type="text" class="form-control" placeholder="Correo" value="">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Teléfono*</label>
                        <input name="spnum" type="text" class="form-control" placeholder="Número" value="">
                        <small>* Campos obligatorios</small>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="mx-auto">
                      <button class="btn" type="submit" name="spsend">Enviar</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="text">
            <p>Ponte en contacto con nosotros y comienza el cambio en:</p> <br>
              <h3>spidybankdata@contacto.</h3><br>
              <p>o a nuestro número telefónico:</p>
              <h3>4421234567</h3>
          </div>
        </div>
        <!-- Full logo section for lower resolutions -->
        <div class="swiper-slide" id="logo-f">
          <div class="logo-f">
            <img src="images/logo-spidy.png" alt="">
          </div>
        </div>
        <!-- End of slide sections -->
      </div>
      <!-- Swiper bullet call -->
      <div class="swiper-pagination"></div>
    </div>
    <!-- Main desktop view container -->
    <div class="content">
      <div id="desktext" class="text">
        <p class="oc" id="mit">Transforma el rumbo de tu negocio, tenemos las <span>soluciones tecnológicas correctas</span>, hechas a tu medida</p>
        <p class="v-hid oc rimg1" id="i-it">Conoce el comportamiento de tu negocio en todo momento, te ofrecemos el mejor servicio de estadísticas, facíl de manejar e interpretar</p>
        <p class="v-hid oc rimg2" id="ii-it">Comprende mejor lo que tus datos te quieren decir con nuestro servicio de análisis que integra todas las fuentes que necesites y dándoles un tratamiento adecuado</p>
        <p class="v-hid oc rimg3" id="iii-it">Toma las mejores decisiones para tu negocio aplicando las mejores técnicas de visualización, tratamientos y análisis de datos en un solo sistema</p>
        <!-- Form card element -->
        <div class="card v-hid oc rimg4" id="iv-it">
          <div class="card-header">
              <h5 class="card-title">Formulario</h5>
          </div>
          <div class="card-body">
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Nombre*</label>
                    <input name="spname" type="text" class="form-control" placeholder="Nombre(s)" required="required" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Apellido paterno*</label>
                    <input name="spap" type="text" class="form-control" placeholder="Apellido paterno" required="required" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Apellido materno</label>
                    <input name="spam" type="text" class="form-control" placeholder="Apellido materno" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Correo electrónico*</label>
                    <input name="spmail" type="text" class="form-control" placeholder="Correo" required="required" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Teléfono*</label>
                    <input name="spnum" type="text" class="form-control" placeholder="Número" required="required" value="">
                    <small>* Campos obligatorios</small>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="mx-auto">
                  <button class="btn" type="submit" name="spsend">Enviar</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="v-hid oc rimg5" id="v-it">
          <p>Ponte en contacto con nosotros y comienza el cambio en:<br>
          spidybankdata@contacto.<br>
          o a nuestro número telefónico:<br>
          4421234567</p>
        </div>
        <a class="oc" id="sc-js2" href="javascript:;">Comenzar el cambio</a>
      </div>
      <!-- Container of dinamic images/icons -->
      <div class="img">
        <div class="social-icons">
          <input type="radio" name="fav-sel" id="neutral">
          <input type="radio" id="fimg" name="fav-sel" value="fimg">
          <label for="fimg"><img class="fimg coinch" src="images/Icono-1.png" alt="" id="focicon1"></label>
          <input type="radio" id="simg" name="fav-sel" value="simg">
          <label for="simg"><img class="simg coinch" src="images/Icono-2.png" alt="" id="focicon2"></label>
          <input type="radio" id="timg" name="fav-sel" value="timg">
          <label for="timg"><img class="timg coinch" src="images/Icono-3.png" alt="" id="focicon3"></label>
          <input type="radio" id="foimg" name="fav-sel" value="foimg">
          <label for="foimg"><img class="foimg coinch" src="images/Icono-4.png" alt="" id="focicon4"></label>
          <input type="radio" id="fiimg" name="fav-sel" value="fiimg">
          <label for="fiimg"><img class="fiimg coinch" src="images/Icono-5.png" alt="" id="focicon5"></label>
        </div>
        <img class="email-icon" src="images/Icono-central.png" alt="">
      </div>
    </div>
    <!-- Wave animation call -->
    <div class="wave"></div>
    <!-- JS files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.0/js/swiper.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/spidy.js"></script>
  </body>
</html>