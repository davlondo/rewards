<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?=$preheader?>
  <!--HEADER // -->
  <!--//BANNER -->
  <section>
    <div class="jumbotron jumbologin sliders">
      <div class="landing-container-princ">
        <div class="container">
          <div class="row">
            <!--Colum izq -->
            <div class="col-md-7 col-sm-12 col-xs-12 col-slider-iz">
              <div class="col-md-8 col-sm-8 col-xs-12 col-xss-12">
                <div class="contenedor-text-izq">
                  <?=$lista?>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 hidden-xs">
                &nbsp;
              </div>
            </div>

            <!--Colum Der -->
            <div class="col-md-5 col-sm-12 col-xs-12 col-slider-de">
              <div  class="img-slider-prehome">
                <img src="<?php echo base_url().'sources/images/logoslider.png';?>" alt="">
              </div>

              <div class="titbanner1">
                <h2>Inicia sesi&oacute;n y <br>consulta tu meta</h2>
              </div>
              <div class="formlogin">
                <?php $attributes = array('class' => 'form-inline');
                  echo form_open('preInit/guestStart',  $attributes); ?>
                  <div class="form-group formuDi">
                    <input type="number" class="form-control input-lg formdoc" id="numberdoc" name="numberdoc" placeholder="Documento de Identidad">
                  </div>
                  <button type="submit" id="newPin" class="btn boton btn-default">Siguiente <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                  </button>
                <?php echo form_close(); ?>
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


  
  $("#newPin").on("click", function(e) {
    var n = $( "#numberdoc" ).val();
    
    if (n===''){
      alert("No data input");
       e.preventDefault();
    }
    
  }); 

      
});



 </script>