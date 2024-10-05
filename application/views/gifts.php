<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?=$header?>
  <section>
    <div class="jumbotron slider-interno jumbointerno2">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-xs-12 col-xss-12">
            <div class="col-md-7 col-sm-6 col-xs-6">
              <div class="contenedor-premio">
                <div class="items-prem">
                  <div class="product-thumbnail more-prem">
                    <img src="<?php echo base_url().'sources/images/'.$item->name.'.png';?>" alt="Image">
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-6 col-xss-12 content-right-text2">
              <div class="tit-text-right2">
                <h3>Este es el premio que<br />vas a canjear</h3>
              </div>
              <div class="line-right">
                <svg  height="26" width="250" style="stroke: #fff; stroke-width: 2;">
                  <line class="line1" x1="0" y1="16" x2="70" y2="16" />
                </svg>
              </div>
              <div class="parraf-slider2">
                <p><?php echo $item->name;?></p>
                <p><?php echo $item->infor;?></p>
                  <br />
              <span>Correspondiente a la<br />
              Meta 1 de Tecnolog&iacute;a</span>
              </div>
            </div>
          </div>
          <div class="col-md-4 hidden-sm hidden-xs">
           
          </div>
        </div>
      </div>
    </div>

  </section>
  <section class="backform">
    <div class="container">
      <div class="landing-container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 containermetas">
            
                    <?php $attributes = array('class' => 'form-horizontal form2');
                  echo form_open('myItems/myBrandItem/'.$item->id.'',  $attributes); ?>
            <div class="imgUser">
              <img src="<?php echo base_url().'sources/images/iconUser.png';?>" alt="">
            </div>
            <div class="linecontainer">
              <svg  height="70" width="60" style="stroke: #264e72; stroke-width: 2;">
                <line class="line1" x1="34" y1="10" x2="34" y2="95" />
              </svg>
            </div>
            <div class="titledatos">
              <h2>Datos personales</h2>
              <span class="obligatorio">(*)campos obligatorios</span>
            </div>
            <div class="formdatos">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Primer Nombre</label><span class="obligatorio">*</span>
                  <input type="text" disabled='disabled'class="form-control personal colorplace" id="inputprimernombre" name="inputprimernombre" placeholder="<?=$firstName?>" value="<?=$firstName?>">
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">Primer Apellido</label><span class="obligatorio">*</span>
                  <input type="text" class="form-control personal colorplace" id="inputprimerapellido" name="inputprimerapellido" placeholder="<?=$lastName?>" value="<?=$lastName?>">
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Segundo Nombre</label>
                  <input type="text" class="form-control personal colorplace" id="InputSegundoNombre" name="InputSegundoNombre" placeholder="<?=$middleName?>" value="<?=$middleName?>">
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">Segundo Apellido</label>
                  <input type="text" class="form-control personal colorplace" id="InputSegundoApellido" name="InputSegundoApellido" placeholder="<?=$secLastName?>" value="<?=$secLastName?>">
                </div>
              </div>

            </div>
            <div class="titleformcontac col-md-12 col-sm-12 col-xs-12">
              <div class="imgDirec col-md-2 col-sm-2 col-xs-2">
                <img src="<?php echo base_url().'sources/images/iconDirec.png';?>" alt="">
                <svg class="linea2" style="stroke: #264e72; stroke-width: 2;">
                  <line class="line1" x1="34" y1="10" x2="34" y2="95" />
                </svg>
              </div>
              <div class="titlecontacto col-md-10 col-sm-10 col-xs-10" >
                <h2>Datos de contacto</h2>
                <span>Tus Datos de contacto son muy importantes para poder entregarte los premios redimidos.</span>
              </div>
            </div>
            <div class="formcontact col-md-12 col-sm-12 col-xs-12">
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Tel&eacute;fono fijo</label><span class="obligatorio">*</span>
                  <input type="number" class="form-control inputcontact" id="fijo" name="fijo"placeholder="536 78 239">
                  <span id="msj" class="msj hidden">El n&uacute;mero ingresado no es valido</span>
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputEmail1">Email</label><span class="obligatorio">*</span>
                  <input type="email" class="form-control inputcontact" id="Email1" name="Email1" placeholder="Email@email.com">
                  <span id="msj" class="msj hidden">El n&uacute;mero ingresado no es valido</span>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">M&oacute;vil</label><span class="obligatorio">*</span>
                  <input type="number" class="form-control inputcontact" id="mobile" name="mobile" placeholder="3113000000">
                  <span id="msj" class="msj hidden">El n&uacute;mero ingresado no es valido</span>
                </div>
                <div class="form-group">
                  <label class="tituloform azul" for="exampleInputPassword1">Direcci&oacute;n</label><span class="obligatorio">*</span>
                  <input type="text" class="form-control inputcontact" id="address" name="address" placeholder="xxx xxx xxx...">
                  <span id="msj" class="msj hidden">El n&uacute;mero ingresado no es valido</span>
                </div>
                    <label class="tituloform azul" for="exampleInputPassword1">Distrito</label><span class="obligatorio">*</span>
                  <select class="form-control inputcontact" name="district" id="district">
                    <option disabled="disabled" selected="selected">Seleccione</option>
                    <option value="1">1</option>
                    <option value="1">2</option>
                    <option value="1">3</option>
                    <option value="1">4</option>
                    <option value="1">5</option>
                  </select>
                  <span id="msj" class="msj hidden">El n&uacute;mero ingresado no es valido</span>
              </div>
          </div>
          <div class="btnform col-xss-12">
            <div class="checkbox">
              <label>
                <input type="checkbox" id="termFinal" name="termFinal"> <a href="#" target="_blank">Acepto los T&eacute;rminos y condiciones de uso</a>
              </label>
            </div>
            <div class="boton2">
              <button type="submit" id="newGener" class="btn btnpuntos btn-default">Canjear premio</button>
              <a href=" <?php $segment= array('inventory','regret',$item->id); echo site_url($segment);?>" class="btn btnpuntos btn-default">Regresar</a>
            </div>

          <?php echo form_close(); ?>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <button type="submit" class="btn btnpuntos btn-default hidden" data-toggle="modal" data-target="#ModalRedencion">canjear premio</button>
        </div>
      </div>
    </div>
  </section>
  <!--FOOTER // -->
  <?=$footer?>
  <!--//FOOTER -->

  <!--MODAL -->
  <!--Modal para productos -->
  <!-- Modal -->
    <div class="modal fade" id="ModalRedencion" role="dialog">
      <div class="modal-dialog">

     <?=$redeem?>
      </div>
    </div>

</body>
</html>
<script>
$(document).ready(function(){
  
  $("#newGener").on("click", function(e) {

      var yesTerms = $( "#termFinal" ).prop('checked');
      if(yesTerms!=true){
        alert("Please Accept Terms and Conditions to proceed");
         e.preventDefault();
    
      }
/*
      else{
        /*
        e.preventDefault();
        $.ajax({
          url: 'myItems/myBrandItem/3',
          type: 'POST',
          data: {
           
            siAll: 'todos',
          },
          dataType : 'json',
          success: function(data, textStatus, xhr) {
           
            alert('FULL');
            $('#ModalRedencion').click();
          },
        
            error: function(xhr, textStatus, errorThrown) {
            //alert(textStatus.reponseText);
            //console.log(textStatus.reponseText);
            console.log("HUY");
            console.warn(xhr);
          }
        });
  

      }
      
    */
  }); 

      
});
 </script>
