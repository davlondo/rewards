  <?=$top?>
  <section>
    <div class="jumbotron slider-interno jumbointerno3">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12 textslidercontact">
            <h2>Queremos tenerte cerca y <br />para eso necesitamos saber m&aacute;s de ti.</h2>
            <span class="">Ingresa aqu&iacute; tus datos.</span>

          </div>
          <div class="col-md-4 col-sm-4 hidden-xs">
            <!-- <img class="girl2" src="<?php echo $url_sources ?>/images/person5.png" alt=""> -->
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="backform">
    <div class="container">
      <div class="landing-container">
        <div class="row">
          <div class="col-md-12 col-sm-12 containermetas">
            <form>
            <div class="imgUser2 col-xs-2">
              <img src="<?php echo base_url().'sources/images/iconUser.png';?>" alt="">
              <svg class="line1" height="70" width="60" style="stroke: #264e72; stroke-width: 2;">
                <line  x1="34" y1="10" x2="34" y2="95" />
              </svg>
            </div>
            <div class="titledatoscontact col-xs-10">
              <h2>Datos de contacto</h2>
              <p>D&eacute;janos tus datos y tu dudas y nos estaremos comunicando contigo.</p>
            </div>

            <div class="formcontact col-xs-12">
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Nombre completo</label>
                  <input type="number" class="form-control inputcontact" id="fijo" placeholder="Sebastia A. Torres D.">
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">Tel&eacute;fono de contacto</label>
                  <input type="number" class="form-control inputcontact" id="movil" placeholder="3113000000">
                </div>
              </div>
              <div class="col-md-6 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control inputcontact" id="exampleInputEmail1" placeholder="Email@email.com">
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">Direcci&oacute;n</label>
                  <input type="text" class="form-control inputcontact" id="exampleInputPassword1" placeholder="xxx xxx xxx...">
                </div>
              </div>
              <div class="col-md-12 col-xs-12">
                <label class="tituloform azul" for="exampleInputPassword1">Mensaje</label>
                <textarea class="form-control inputcontact" rows="3"></textarea>
              </div>
          </div>
          <div class="btnform-contact col-xs-12">
            <div class="checkboxcontact">
              <label>
                <input type="checkbox"> <a href="#" target="_blank">Acepto los T&eacute;rminos y condiciones de uso</a>
              </label>
            </div>
            <div class="botoncontact">
              <button type="submit" class="btn btnpuntos btn-default">Enviar</button>
              <a href=" <?php echo site_url($return);?>" class="btn btnpuntos btn-default">Regresar</a>
            </div>

          </form>
          </div>
        </div>
      </div>

    </div>
  </section>
<?=$footer?>