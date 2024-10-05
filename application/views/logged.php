<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?=$preheader?>
<!DOCTYPE html>
<html lang="es">
  <!--HEADER // -->
  <!--//BANNER -->
 <section>
    <div class="jumbotron jumbologueo sliders">
      <div class="landing-container-princ">
        <div class="container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12 col-slider-iz">
              <div class="col-md-8 col-sm-8 col-xs-12 col-xss-12">
                <div class="contenedor-text-izq">
                   <?=$lista?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6 col-xs-6">
                <!-- <img class="man" src="<?php echo $url_sources ?>/images/person3.png" alt="man"> -->
              </div>
            </div>
            <div class="col-md-5 col-sm-12 col-xs-12 col-slider-der">
                <div  class="img-slider-prehome">
                  <img src="<?php echo base_url().'sources/images/logoslider.png';?>" alt="">
                </div>
                <div class="titbanner2">
                  <h2>Inicia sesi&oacute;n y <br /> consulta tu meta</h2>
                </div>
                <div class="formlogin1">
                    <?php $attributes = array('class' => 'form-horizontal form2');
                  echo form_open('secondStep/confirmSignature',  $attributes); ?>
                    <div class="form-group">
                      <div class="col-sm-12 col-xs-12 input-tarje">
                        <input type="password" class="form-control input-lg formdoc" id="numberdoc" name="numberdoc" placeholder="*** Últimos 4 digitos de tu Tarjeta Mastercard Banreservas">
                      </div>
                      <div class="col-sm-12 col-xs-12">
                        <span class="info1">*Puedes ingresar cualquiera de tus Tarjetas Mastercard Banreservas.</span>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-sm-offset-2 col-sm-12 col-xs-12 contentcheck">
                        <div class="checkbox terminoslogueado col-sm-7 col-xs-12">
                          <label>
                            <input type="checkbox" id="termcond" name="termcond"> <a class="termin" href="#" >Acepto T&eacute;rminos y condiciones</a>
                          </label>
                        </div>
                        <div class="col-sm-offset-2 col-sm-5 col-xs-12 contentboton">
                          <button type="submit" id="newGener" class="btn boton btn-default">Iniciar <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                <?php #echo form_close(); ?>
              </form>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--// BANNER  -->
  <!--FOOTER // -->
  <?=$footer?>
</body>
</html>
<script>
$(document).ready(function(){
  
  $("#newGener").on("click", function(e) {
    var n = $( "#numberdoc" ).val();
      if(n==''){
        alert("No data input");
         e.preventDefault();
      }

      var yesTerms = $( "#termcond" ).prop('checked');
      if(yesTerms!=true){
        alert("Please Accept Terms and Conditions to proceed");
         e.preventDefault();
    
      }
      
    
  }); 

      
});
 </script>
