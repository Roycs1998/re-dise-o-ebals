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
        <div class="parallax-container" >
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay background_naranja">
            <div class="container">
              <div class="row row-30 justify-content-end text-left">
                <div class="col-sm-12">
                  <h1 class="wow fadeInLeft">Contáctanos</h1>   
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <!-- Resumen de Servicio-->
    <section class="section section-sm section-fluid bg-default text-left" id="projects">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-lg-12 col-xl-12">
                  <article class="title-classic">
                  <div class="title-classic-title">
                    <h3>SOLICITA TU COTIZACIÓN</h3>
                  </div>
                  </article>
                <form id="contact-form" class="rd-form rd-form-variant-2 rd-mailform"  method="post" action="bat/enviar-datos.php">
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
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-ruc-2" type="text" name="ruc" data-constraints="@Required">
                        <label class="form-label" for="contact-ruc-2">RUC</label>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-wrap">
                        <input class="form-input" id="contact-nombre_empresa-2" type="text" name="nombre_empresa" data-constraints="@Required">
                        <label class="form-label" for="contact-nombre_empresa-2">Nombre de empresa</label>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="form-wrap">
                        <label class="form-label" for="contact-message-2">Mensaje</label>
                        <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                      </div>
                    </div>

                    <div class="col-12">
                      <div class="h-captcha" data-sitekey="2d64e188-b165-4183-a1c4-39cd9ad3ff46"></div>
                    </div> 

                  </div>
                  <button class="button button-primary button-pipaluk" type="submit">Enviar</button>
                </form>
                <p class="form-message"></p>
          </div>

        </div>
      </div>
    </section>

    <section class="container">
          <div class="row">
            <div class="col-md-6 col-lg-6 col-xl-6  wow fadeInUp">
                <div class="container">
                  <div class="row row-30 justify-content-center">
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h4>CELULAR</h4>
                      <article class="contacto-estilo">
                        <div class="box-contacts-icon-fila fl-bigmug-line-cellphone55"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="tel:+51957404672">+51 957404672</a> / <a href="tel:+51981453402">+51 981453402</a></p>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h4>DIRECCIÓN</h4>
                      <article class="contacto-estilo">
                        <div class="box-contacts-icon-fila fl-bigmug-line-up104"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="#">Av. Las Camelias 790, distrito de San Isidro</a></p>
                        </div>
                      </article>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-12 caja-contacto">
                      <h4>CORREO ELECTRÓNICO</h4>
                      <article class="contacto-estilo">
                        <div class="box-contacts-icon-fila fl-bigmug-line-chat55"></div>
                        <div class="texto-contacto">
                          <p class="box-contacts-link"><a href="mailto:ebelin@ebalsconsultores.com">ebelin@ebalsconsultores.com</a></p>
                        </div>
                      </article>
                    </div>
                  </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-6">
              <div class="google-map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d975.3045516563077!2d-77.02858800000001!3d-12.097209!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c868bd340ee1%3A0x14e3b337b0d072f1!2sC.%20las%20Camelias%20790%2C%20San%20Isidro%2015046!5e0!3m2!1ses-419!2spe!4v1653337814802!5m2!1ses-419!2spe"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>

          </div>
    </section>

      <!-- Page Footer-->
      <?php include('php/footer.php');?>
    </div>
  <?php include('php/footer-link.php');?>              
  </body>
</html>