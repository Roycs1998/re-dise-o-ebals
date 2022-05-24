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
          <div class="parallax-content section-xl context-dark bg-overlay-68 bg-mobile-overlay" style="background:#f0512d;">
            <div class="container">
              <div class="row row-30 justify-content-end text-left">
                <div class="col-sm-12">
                  <h1 class="wow fadeInLeft">Nuestros proyectos</h1>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Latest Projects-->
      <section class="section section-sm section-fluid bg-default text-center" id="projects">
        <div class="container-fluid">
          <h2 class="wow fadeInLeft">Nuestros clientes son nuestra mayor satisfacción</h2>
          <p class="  " >Estos son algunos de nuestros servicios ofrecidos a distintas empresas.</p>
          <div class="isotope-filters isotope-filters-horizontal">
            <button class="isotope-filters-toggle button button-md button-icon button-icon-right button-default-outline button-wapasha" data-custom-toggle="#isotope-3" data-custom-toggle-hide-on-blur="true" data-custom-toggle-disable-on-blur="true"><span class="icon fa fa-caret-down"></span>FILTROS</button>
            <ul class="isotope-filters-list" id="isotope-3">
              <li><a class="active" href="#" data-isotope-filter="*" data-isotope-group="gallery">TODOS</a></li>
              <li><a href="#" data-isotope-filter="Type 1" data-isotope-group="gallery">CAJA AREQUIPA</a></li>
              <li><a href="#" data-isotope-filter="Type 2" data-isotope-group="gallery">YMCA</a></li>
              <li><a href="#" data-isotope-filter="Type 3" data-isotope-group="gallery">GLISAC</a></li>
              <li><a href="#" data-isotope-filter="Type 4" data-isotope-group="gallery">TONDERO</a></li>
              <li><a href="#" data-isotope-filter="Type 5" data-isotope-group="gallery">PIMENTEL</a></li>
              <li><a href="#" data-isotope-filter="Type 6" data-isotope-group="gallery">IBT Group</a></li>
            </ul>
          </div>
          <div class="row row-30 isotope" data-isotope-layout="fitRows" data-isotope-group="gallery" data-lightgallery="group">
            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 2">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/ymca_foto_chico.png" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >YMCA</h4> 
                    <img class="tamano30" src="images/ymca.png" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a class="icon" href="images/ymca_foto.png" data-lightgallery="item">
                      <img src="images/ymca_foto.png" alt="Enfermera Ocupacional in House" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Enfermera Ocupacional in House
                      </a>
                    </h4>
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Servicios de Educación</p>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 1" data-wow-delay=".1s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/capacitacion-online.png" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >CAJA AREQUIPA</h4> 
                    <img class="tamano30" src="images/empresa_caja_arequipa.png" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a class="icon" href="images/capacitacion-arequipa.png" data-lightgallery="item">
                      <img src="images/capacitacion-arequipa.png" alt="Capacitación Online" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Capacitación Online
                    </a>
                    </h4>
                    
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Financiera</p>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 3" data-wow-delay=".2s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/glisac_foto_chico.png" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >GLISAC</h4> 
                    <img class="tamano30" src="images/glisac.png" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a class="icon" href="images/glisac_foto.png" data-lightgallery="item">
                      <img src="images/glisac_foto.png" alt="Brigadas de Emergencia" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Brigadas de Emergencia
                      </a>
                    </h4>
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Avipecuaria</p>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInRight" data-filter="Type 4" data-wow-delay=".3s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/tondero_foto_chico.png" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >TONDERO</h4> 
                    <img class="tamano30" src="images/tondero.png" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">

                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a  class="icon" href="images/tondero_foto.png" data-lightgallery="item">
                      <img src="images/tondero_foto.png" alt="Plan de Prevención y Control Covid-19" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Plan de Prevención y Control Covid-19
                      </a>
                    </h4>
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Entretenimiento</p>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 5" data-wow-delay=".4s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/pimentel_foto_chico.png" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >PIMENTEL</h4> 
                    <img class="tamano30" src="images/pimentel.png" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a  class="icon" href="images/pimentel_foto.png" data-lightgallery="item">
                      <img src="images/pimentel_foto.png" alt="Vigilancia Médica remota" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Vigilancia </br>Médica remota
                      </a>
                    </h4>
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Automotriz</p>
                </div>
              </article>
            </div>

            <div class="col-sm-6 col-lg-4 col-xxl-3 isotope-item wow fadeInLeft" data-filter="Type 6" data-wow-delay=".5s">
              <!-- Thumbnail Classic-->
              <article class="thumbnail thumbnail-classic thumbnail-md">
                <div class="thumbnail-classic-figure">
                  <img src="images/ibt_foto_chico.jpg" alt="" width="420" height="350"/>
                  <div class="nombre-empresa-proyecto">
                    <h4 class="letra-blanca" >IBT Group</h4> 
                    <img class="tamano30" src="images/ibt.jpg" /> 
                  </div>
                </div>

                <div class="thumbnail-classic-caption">
                  <div class="thumbnail-classic-title-wrap">
                    <h4>
                      <a  class="icon" href="images/ibt_foto.png" data-lightgallery="item">
                      <img src="images/ibt_foto.png" alt="Auditoría y Vigilancia Médica" width="420" height="350"/>
                      <i class="fa-solid fa-eye"></i> Auditoría y Vigilancia Médica
                      </a>
                    </h4>
                  </div>
                  <p class="thumbnail-classic-text">Rubro: Infraestructuras, Energía, Agua, Salud, Edificación</p>
                </div>
              </article>
            </div>



          </div>
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