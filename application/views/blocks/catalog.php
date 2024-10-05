<div class="cat-prem">
  <?php foreach($items as $post){?>
     <div class="list-prem">
        <div class="items">
          <div class="contnt-btnmas">
            <a href="#" data-toggle="modal" data-target="#ModalProduct<?php echo $post['id'];?>"><img class="btnmas" src="<?php echo base_url().'sources/images/btnmas.png';?>" alt=""></a>
          </div>
          <div class="product-thumbnail more-prem">
            <img src="<?php echo base_url().'sources/images/'.$post['image_url'].'.png';?>" alt="Image">
          </div>
        </div>
        <div class="">
          <p class="textCatalogueAwards"><?php echo $post['name'];?></p>
        </div>
    </div>
  <?php }?> 
</div>


