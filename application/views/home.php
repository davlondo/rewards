<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<?=$header?>

  <section id="mimeta">
    <div class="jumbotron slider-interno jumbointerno">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 col-xss-12">
            <div class="col-md-5 col-sm-5 col-xs-5 col-xss-12">
              <div class="smartphone">
                <img src="<?php echo base_url().'sources/images/smartphone.png';?>" alt="smartphone">
              </div>
              <div class="content-text-left">
                <h2>Semana <?php echo $actual_week->week_number;?></h2>
                <h3>Meta de <?php echo $actual_week->name;?></h3>
              </div>
            </div>
            <div class="col-md-7 col-sm-7 col-xs-7 col-xs-12 content-right-text">
              <div class="tit-text-right">
                <h2>Hola,</h2>
                <h3><?=$name?></h3>
              </div>
              <div class="parraf-slider">
                <h4>Meta semana <?php echo $actual_week->week_number;?></h4>
                <p>Consume RD$<?=$current?> en POS activando <br>una transacci&oacute;n en la categor&iacute;a de <?php echo $actual_week->name;?></p>
                <p>*Esta meta va del <?php echo $actual_week->starting;?> al <?php echo $actual_week->ending;?>. </p>
              </div>
              <div class="">
                <a class="conoce" href="#" data-toggle="modal" data-target="#myModal">Conoce qu&eacute; incluye esta categoria </a>
              </div>
              <div class="content-btn">
                <a class="btn btn-default btn-block"  <?php if (($actual_week->reached=='1') and ($actual_week->total_redeemed=='added')){ echo ''; }else{ echo 'href="#premios"';}?>>

               <?php if (($actual_week->reached=='1') and ($actual_week->total_redeemed=='added'))
               {?><img src="<?php echo base_url().'sources/images/locked.png';?>" alt="">  <?php } if (($actual_week->reached=='1') and ($actual_week->total_redeemed!='added')){echo 'Ya  puedes canjear tu premio';} if (($actual_week->reached=='0') and ($actual_week->total_redeemed!='added')){echo 'Aún no puedes canjear tu premio';}?></a>
              </div>
              <div class="parraf-info">
                <p>* Este botón se iluminará al cumplir la meta.</p>
                <p>* Meta actualizada 3 días después del fin de la semana.</p>
              </div>
            </div>
          </div>
          <div class="col-lg-5 visible-lg">
            <!-- <img class="man2" src="<?php echo $url_sources ?>/sources/images/person2.png" alt=""> -->
          </div>
        </div>
      </div>
    </div>

  </section>
  <!--Seccion de metas semanales -->
  <section class="allmetas" id="allmetas">
    <div class="container">
      <div class="landing-container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-xss-12 containermetas">
            <div class="imgaward">
              <img src="<?php echo base_url().'sources/images/award.png';?>" alt="">
            </div>
            <div class="linecontainer">
              <svg height="95" width="80" style="stroke: #264e72; stroke-width: 2;">
                <line class="line1" x1="57" y1="5" x2="57" y2="95" />
              </svg>
            </div>
            <div class="titlemetas">
              <h2>Todas <br />las <br /> metas</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?=$metas?>
        </div>

      </div>
    </div>
  </section>
  <!--Catalogo de Productos -->
  <section id="premios" class="CatPremios">
    <div class="container">
      <div class="landing-container premios">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-xss-12">
            <div class="imgprem">
              <img src="<?php echo base_url().'sources/images/shopping-bag.png';?>" alt="">
            </div>
            <div class="linecontainer2">
              <svg height="95" width="100" style="stroke: #264e72; stroke-width: 2;">
                <line class="line1" x1="94" y1="5" x2="94" y2="95" />
              </svg>
            </div>
            <div class="titleprem">
              <h2>Cat&aacute;logo<br />de<br />premios</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?=$catalogo?>
        </div>
      </div>
    </div>
  </section>
  <section id="recomendacion" class="Historial-red">
    <div class="container">
      <div class="landing-container premios">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12 col-xss-12">
            <div class="imgprem">
              <img src="<?php echo base_url().'sources/images/cart.png';?>" alt="">
            </div>
            <div class="linecontainer2">
              <svg height="95" width="100" style="stroke: #264e72; stroke-width: 2;">
                <line class="line1" x1="94" y1="5" x2="94" y2="95" />
              </svg>
            </div>
            <div class="titleprem">
              <h2>historial<br />de<br />Premios</h2>
            </div>
          </div>
        </div>
        <!--Cuadro Sin Historial -->
        <div class="sinhistory">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-xss-12 DialogHistory">
              <h2>¡A&uacute;n no has canjeado<br /> ning&uacute;n premio!</h2>
              <img src="<?php echo base_url().'sources/images/alarm.png';?>" alt="">

            </div>
            <div class="rombo2"></div>
          </div>
        </div>
        <?=$historial?>
        <!--Productos Historial -->
        <div class="products hidden">
          <div class="row">
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- -->
  <?=$footer?>

  <!--MODAL -->
  <!-- Modal 1-->
  <div class="modal fade " id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button id="cerrarmodalCat" type="button" class="close" data-dismiss="modal">Cerrar</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-6 Titlemodal1 azul">
              <h2>¿Qu&eacute; puedes comprar en <br />esta categor&iacute;a?</h2>
              <ul class="listmodal1">
                <li>Compra de computadoras.</li>
                <li>Reparaci&oacute;n de computadoras, televisores, celulares.</li>
                <li>Compra de Software.</li>
                <li>Actualizaci&oacute;n de Software.</li>
                <li>Pago de sistemas IOT</li>
              </ul>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-6 imgmodal">
              <img src="<?php echo base_url().'sources/images/imgModalCompras.png';?>" alt="">
            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
  <!--Modal para productos -->
  <!-- Modal -->
  <?=$supermodals?>
 
  <!--Script Modal -->

</body>

</html>
