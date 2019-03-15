<?php include_once 'header.php'?>
            <!-- end .header-->
        <div class="section-title-page area-bg area-bg_dark area-bg_op_60">
          <div class="area-bg__inner">
            <div class="container">
              <div class="row">
                <div class="col offset-lg-3">
                  <div class="b-title-page__wrap">
                    <h1 class="b-title-page">Contacto</h1>
                    <nav aria-label="breadcrumb">
                      <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index">Inicio</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contacto</li>
                      </ol>
                      <!-- end breadcrumb-->
                    </nav>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end .b-title-page-->
        <main class="l-main-content">
          <div class="container">
            <div class="section-area">
              <div class="row">
                <div class="col-md-6 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-direction"></i>
                    <div class="b-contacts__title">Ubicación</div>
                    <div class="b-contacts__info">Av. Revolución No. 157 <br> Colonia Ejidal Emiliano Zapata <br> Ecatepec de Morelos Edo. Mex.</div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-call-end bg-primary"></i>
                    <div class="b-contacts__title">Telefono</div>
                    <div class="b-contacts__info">Celular: <br> 55 1115 5467 <br>&nbsp;</div>
                  </div>
                </div>
                <div class="col-md-6 col-lg-4">
                  <div class="b-contacts"><i class="ic icon-envelope"></i>
                    <div class="b-contacts__title">Email</div>
                    <div class="b-contacts__info">info [at] domain.com<br>support [at] domain.com <br>&nbsp;</div>
                  </div>
                </div>
              </div>
              <!-- end .b-contacts-->
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="map" id="map"></div>
              </div>
              <div class="col-md-6">
                <section class="section-form-contacts">
                  <h2 class="ui-title-inner">Envianos un <span class="text-primary"> Mensaje</span></h2>
                  <p>En caver siempre tenemos estamos para ayudarte y brindarte el mejor servicio.</p>
                  <div id="success"></div>
                  <form class="b-form-contacts ui-form" id="contactForm" action="#" method="post">
                    <div class="form-group">
                      <input class="form-control" id="user-name" type="text" name="user-name" placeholder="Tu nombre" required="required"/>
                    </div>
                    <div class="form-group">
                      <input class="form-control" id="user-email" type="email" name="user-email" placeholder="Tu email"/>
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" id="user-message" rows="5" placeholder="Tu mensaje" required="required"></textarea>
                    </div>
                    <button class="btn btn-primary">Send Message</button>
                  </form>
                </section>
                <!-- end .b-form-contact-->
              </div>
            </div>
          </div>
        </main>



<?php include_once 'fotter.php'?>