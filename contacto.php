<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php  include('php/head-link.php');?>
  <body>
    <div class="ie-panel"></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container"><span></span><span></span><span></span><span></span>
        </div>
      </div>
    </div>
    <div class="page">
      <div id="home">
        <!-- Top Banner-->
        <!-- Page Header-->
        <?php  include('php/header.php');?>
      </div>
    <!-- Cta-->
    <section class="section section bg-default">
        <div class="parallax-container" data-parallax-img="images/parallax-1.jpg">
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay">
            <div class="container">
              <div class="row row-30 justify-content-end text-left">
                <div class="col-sm-12">
                  <h1 class="wow fadeInLeft">Contactanos</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Resumen de Servicio-->
    <section class="section section-sm section-fluid bg-default text-center" id="projects">
      <div class="container-fluid">
        <div class="row row-30 justify-content-center">
         <div class="col-lg-8 col-xl-8">
            <article class="title-classic">
            <div class="title-classic-title">
              <h3>SOLICITA TU COTIZACIÓN</h3>
            </div>
            <div class="title-classic-text">
              <p>Llena nuestro formulario para enviarte una propuesta detallada del servicio.</p>
            </div>
            </article>
                <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                  <div class="row row-14 gutters-14">
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                        <label class="form-label" for="contact-your-name-2">Nombres</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                        <label class="form-label" for="contact-email-2">Email</label>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                        <label class="form-label" for="contact-phone-2">Celular</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Mensaje</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>
                  </div>
                  <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
                </form>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4 text-lg-center wow fadeInUp">
                <div class="container">
                  <div class="row row-30 justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h3>CELULAR</h3>
                      <article class="contacto-estilo">
                        
                        <div class="box-contacts-icon-fila fl-bigmug-line-cellphone55"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="tel:#"> +1 323-913-4688</a> / <a href="tel:#">+1 323-888-4554</a></p>
                          
                        </div>
                        
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h3>DIRECCIÓN</h3>
                      <article class="contacto-estilo">
                        <div class="box-contacts-icon-fila fl-bigmug-line-up104"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="#">Av. Las Camelias 790, distrito de San Isidro</a></p>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h3>CORREO ELECTRÓNICO</h3>
                      <article class="contacto-estilo">
                        <div class="box-contacts-icon-fila fl-bigmug-line-chat55"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="mailto:#">ebelin@ebalsconsultores.com</a></p>
                          
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
          </div>

        </div>

      </div>
    </section>




    <section class="section">
          <div class="google-map-container" data-center="6036 Richmond hwy., Alexandria, VA, 2230" data-zoom="5" data-styles="[{&quot;featureType&quot;:&quot;administrative&quot;,&quot;elementType&quot;:&quot;labels.text.fill&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#444444&quot;}]},{&quot;featureType&quot;:&quot;landscape&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#f2f2f2&quot;}]},{&quot;featureType&quot;:&quot;poi&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;poi.business&quot;,&quot;elementType&quot;:&quot;geometry.fill&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;on&quot;}]},{&quot;featureType&quot;:&quot;road&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;saturation&quot;:-100},{&quot;lightness&quot;:45}]},{&quot;featureType&quot;:&quot;road.highway&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;simplified&quot;}]},{&quot;featureType&quot;:&quot;road.arterial&quot;,&quot;elementType&quot;:&quot;labels.icon&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;transit&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;visibility&quot;:&quot;off&quot;}]},{&quot;featureType&quot;:&quot;water&quot;,&quot;elementType&quot;:&quot;all&quot;,&quot;stylers&quot;:[{&quot;color&quot;:&quot;#b4d4e1&quot;},{&quot;visibility&quot;:&quot;on&quot;}]}]">
            <div class="google-map"></div>
            <ul class="google-map-markers">
              <li data-location="6036 Richmond hwy., Alexandria, VA, 2230" data-description="6036 Richmond hwy., Alexandria, VA, 2230" data-icon="images/gmap_marker.png" data-icon-active="images/gmap_marker_active.png"></li>
            </ul>
          </div>
    </section>
      <!-- Page Footer-->
      <?php include('php/footer.php');?>

      

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    <!-- coded by Himic-->

  </body>
</html>