<?php foreach($items as $post){?>
  <div class="modal fade" id="ModalProduct<?php echo $post['id'];?>" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button id="cerrarmodal<?php echo $post['id'];?>" type="button" class="close" data-dismiss="modal">cerrar</button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-7 col-sm-6 col-xs-6 Titlemodal2 azul">
              <h2><?php echo $post['name'];?></h2>
              <p><?php echo $post['infor'];?></p>
              <a <?php if (($post['qty']==0) or ($pending==0))
              { echo '';}else{echo 'href="';
                $segment= array('gifts','finalStep',$post['id']); echo  site_url($segment); echo '"';}?>"
                id="btnCarShop<?php echo $post['id'];?>" class="btn btn-default btn-car"><img src="<?php echo base_url().'sources/images/imgBtnCar.png';?>" alt="">  (<?php echo $post['qty'];?>) Unidades disponibles.</a>
            </div>
            <div class="col-md-5 col-sm-6 col-xs-6 imgmodal imgmodalproduct">
              <img src="<?php echo base_url().'sources/images/'.$post['image_url'].'.png';?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }?> 