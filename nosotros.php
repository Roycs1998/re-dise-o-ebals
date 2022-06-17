<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<?php  include('php/head-link.php');?>
  <body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
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
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay" style="background:#f0512d;">
            <div class="container">
              <div class="row row-30 justify-content-end text-left">
                <div class="col-sm-12">
                  <h1 class="wow fadeInLeft">SOBRE EBALS</h1>
                  
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
            <div class="col-lg-7 col-xl-7">
            <h2>NOSOTROS</h2>
              <p>
              Somos una empresa líder en asesoría, consultoría, capacitación y formación; que brinda soluciones integrales en 
              Seguridad, Salud en el Trabajo, Calidad, Medio Ambiente y Responsabilidad Social. Enfocados en el desarrollo 
              empresarial de la micro, pequeña, mediana y gran empresa. Nos basamos
              en los lineamientos de reconocidas normas nacionales e internacionales aplicables a todos los sectores: 
              producción, servicios, industria y otros.            
              </p>
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 text-lg-center wow fadeInUp"><img src="images/nosotros_1.jpg" alt="" width="415" height="592"/>
            </div>

        </div>

        </div>
    </section>

      <!-- You dream — we embody-->
    <section class="section  text-md-left section-fuerte">
        <div class="container">
          <div class="row row-50 align-items-center justify-content-center justify-content-xl-between ">
            <div class="col-lg-6 col-xl-5 wow fadeInLeft">
              <h2>Más sobre nosotros</h2>
              <!-- Bootstrap tabs-->
              <div class="tabs-custom tabs-horizontal tabs-line tabs-line-big text-center text-md-left" id="tabs-6">
                <!-- Nav tabs-->
                <ul class="nav nav-tabs">
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big active" href="#tabs-6-1" data-toggle="tab">Misión</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big" href="#tabs-6-2" data-toggle="tab">Visión</a></li>
                  <li class="nav-item" role="presentation"><a class="nav-link nav-link-big" href="#tabs-6-3" data-toggle="tab">Valores</a></li>
                </ul>
                <!-- Tab panes-->
                <div class="tab-content">
                  <div class="tab-pane fade show active" id="tabs-6-1">
                      <p>Desarrollar e implementar soluciones integrales generando valor mediante 
                        la atención personalizada. Nuestro objetivo es guiar a las empresas hacia 
                        la excelencia empresarial mediante la seguridad y salud de sus 
                        trabajadores.</p>
                  </div>

                  <div class="tab-pane fade" id="tabs-6-2">
                    <p>Ser una empresa lider en consultoria integral de seguridad y salud 
                      convirtiendonos en aliados estratégicos con resultados para nuestros clientes.</p>
                  </div>

                  <div class="tab-pane fade" id="tabs-6-3">
                    <ul class="box-pricing-list">
                        <li class="active">Honestidad</li>
                        <li class="active">Compromiso</li>
                        <li class="active">confianza</li>
                        <li class="active">Puntualidad</li>
                        <li class="active">Innovación</li>
                        <li class="active">Integridad</li>
                    </ul>
                  </div>

                </div>

              </div>

            </div>
            <div class="col-lg-6 text-center wow fadeInUp" data-wow-delay=".1s">
              <div class="owl-carousel owl-style-1" data-items="2" data-stage-padding="0" data-loop="true" data-margin="0" data-mouse-drag="true" data-autoplay="true">
                <img class="box-device" src="images/nosotros_2.jpg" alt="imagen de medicina" width="313" height="580"/>
                <img class="box-device" src="images/nosotros_3.jpg" alt="carro tondero cine exterior" width="313" height="580"/>
                <img class="box-device" src="images/nosotros_4.jpg" alt="capacitación" width="313" height="580"/>
                <img class="box-device" src="images/nosotros_3.jpg" alt="imagen de medicina" width="313" height="580"/>
              </div>
            </div>

          </div>
        </div>
    </section>

    <!-- Nuestro Team-->
    <section class="section section-sm section-fluid bg-default text-left" id="projects">
        <div class="container">
          <h2>Nuestro equipo</h2>
        <div class="row row-30 justify-content-center">
            <div class="col-lg-7 col-xl-7">
              <ul class="box-pricing-list">
                
                <li class="active">Consultores SST</li>
                <li class="active">Auditores MINTRA</li>
                <li class="active">Prevencionistas de Riesgos</li>
                <li class="active">Médicos Ocupacionales</li>
                <li class="active">Enfermeras Ocupacionales</li>
                <li class="active">Instructores y Bomberos</li>
                <li class="active">Psicólogos Organizacionales.</li>
                <li class="active">Ergónomos</li>
                <li class="active">Abogados Laboristas</li>
              </ul>
            </div>

            <div class="col-md-7 col-lg-5 col-xl-5 text-lg-center wow fadeInUp"><img src="images/nosotros_5.jpg" alt="" width="415" height="592"/>
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