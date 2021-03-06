<footer class="section section footer-minimal context-dark">
        <div class="bg-gray-15">
          <div class="container-fluid">
            <div class="footer-minimal-inset oh">
              <ul class="footer-list-category-2">
                <li class="rd-nav-item "><a class="rd-nav-link" href="inicio">Inicio</a></li>
                <li class="rd-nav-item "><a class="rd-nav-link" href="nosotros">Nosotros</a></li>
                <li class="rd-nav-item "><a class="rd-nav-link" href="servicios">Servicios</a></li>
                <li class="rd-nav-item "><a class="rd-nav-link" href="proyectos">Proyectos</a></li>
                <li class="rd-nav-item "><a class="rd-nav-link"   href="contacto">Contactanos</a></li>
                <li class="rd-nav-item "><a class="rd-nav-link" href="blog">Blog</a></li>
              </ul>
            </div>
            <div class="footer-minimal-bottom-panel text-sm-left">
              <div class="row row-10 align-items-md-center">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                  <div>
                    <ul class="list-inline list-inline-sm footer-social-list-2">
                      <li><a class="icon fa fa-facebook" href="https://www.facebook.com/ebalsconsultoressst" target="_blank"></a></li>
                      <li><a class="fa-brands fa-linkedin-in" href="https://www.linkedin.com/company/ebalsconsultoria/" target="_blank"></a></li>
                      <li><a class="icon fa fa-youtube" href="https://www.youtube.com/channel/UCbidtbuBCL4x7oI-H5yAxJg" target="_blank"></a></li>
                      <li><a class="icon fa fa-instagram" href="https://www.instagram.com/ebals_consultores/" target="_blank"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                  <!-- Rights-->
                  <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span> <span>RatherApp</span>
                  </p>
                </div>
                <div class="col-sm-6 col-md-4 text-md-right"><span>Todos los derechos reservados.</span> <span>Design&nbsp;by&nbsp;<a href="">EBALS</a></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <a href="https://web.whatsapp.com/send?phone=51989032838&text=Hola%20vengo%20de%20la%20web,%20quisiera%20m??s%20informaci??n%20sobre%20el%20servicio%20de%20consultoria." class="btn-wsp" target="_blank">
    <i class=" fa-whatsapp"></i>
    </a>
    <div class="modal fade" id="modalCta" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Contactanos</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
            </div>
            <div class="modal-body">
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
    </div>
    <div class="modal fade" id="modalBrochure" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h4>Descarga nuestro brochure</h4>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">??</span></button>
            </div>
            <div class="modal-body">
             
                <div class="row row-14 gutters-14">

                  <div class="col-12">
                    <a class="button button-primary button-pipaluk" href="documentos/brochure_salud_ebals.pdf"  target="_blank" download="Brochure-Salud" > Salud</a>
                  </div>
                  <div class="col-12">
                    <a class="button button-primary button-pipaluk" href="documentos/brochure_seguridad_ebals.pdf" download="Brochure-Seguridad"  target="_blank"> Seguridad</a>
                  </div>
                  <div class="col-12">
                    <a class="button button-primary button-pipaluk" href="documentos/brochure_de_capacitaciones_ebals.pdf" download="Brochure-Capacitacion" target="_blank"> Capacitaci??n</a>
                  </div>
                  <div class="col-12">
                    <a class="button button-primary button-pipaluk" href="documentos/brochure_iso_ebals.pdf" download="Brochure-ISOS"  target="_blank"> ISOS</a>
                  </div>
                </div>
              
            </div>
          </div>
        </div>
    </div>