<footer class="footer-inicial">
  <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12">
          <!-- <div class="col-md-2 col-sm-2 col-xs-2 footerlogo">
            <img src="images/logoFooter.png" alt="BanReservas">
          </div> -->
          <div class="col-md-12 col-sm-12 col-xs-12 nav-footer">
            <ul class="nav nav-tabs navbar-footer">
              <li role="presentation" class=""><a href="#" data-toggle="modal" data-target="#modalPreguntas">Preguntas Frecuentes</a></li>
              <li role="presentation"><a href="#" data-toggle="modal" data-target="#modalTerminos">T&eacute;rminos y condiciones</a></li>
              <li role="presentation"><a href="#" data-toggle="modal" data-target="#modalinfo">informaci&oacute;n</a></li>
              <li role="presentation"><a href="<?php echo site_url('contactUs');?>">¿Tienes dudas? Escríbenos - NO MO</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 col-xs-12 copy">
          <p>Copyright 2018 Banreservas. Todo los derechos reservados.</p>
        </div>
      </div>
  </div>
</footer>

<!--//FOOTER -->
<!--BOOTSTRAP CORE JAVA SCRIPT -->
<script src="<?php echo base_url().'sources/js/jquery.min.js';?>"> </script>
<script src="<?php echo base_url().'sources/js/bootstrap.min.js';?>"> </script>
<script src="<?php echo base_url().'sources/js/owl.carousel.min.js';?>"> </script>
<script src="<?php echo base_url().'sources/js/main.js';?>"> </script>
<script Type="text/javascript" src="<?php echo base_url().'sources/js/jquery.easing.min.js';?>" > </script>
<!--Scroll  -->
<script src="<?php echo base_url().'sources/js/smooth-scroll.min.js';?>"> </script>
 <?=$modal_infor?>
  <?=$modal_pregu?>
  <?=$modal_termin?>