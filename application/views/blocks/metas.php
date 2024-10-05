<div class="row-produc">
<?php $sem=1; foreach($goal as $post){?>
  <div class="item">
    <div class="offer rounded-circle badge-danger top-left position-absolute w-25 m-3">
      <img src="<?php echo base_url().'sources/images/iconsmartphone.png';?>" alt="">
    </div>
    <div class="info-prem">
	
		<div class="block<?php if($post['locking']=='y'){echo ' active';}else{ echo '';}?>">		
			<img class="btnmore" src="<?php echo base_url().'sources/images/lockedBlock.png';?>" alt="">
		</div>	  
      <p class="metaCard">Meta</p>
      <p class="subTitleMetaCard text-bold"><?php echo $post['name'];?> <?php if($post['week_goal']=='9'){echo $sem; }else{echo $post['week_number'];}?></p>
      <p class="fechaMetaCard">*<?php echo $post['starting'];?> - <?php echo $post['ending'];?></p>
    </div>
    <div class="content-btn">
      <a <?php  if (($post['total']=='added') and ($post['reached']=='0')){ echo "";} if (($post['total']=='added') and ($post['reached']=='1')){ echo "href=#premios";}?> class="btn btnRedimir btn-warning width90 text-center <?php if (($post['total']=='added') and ($post['reached']=='1')){echo 'bgSilver';} if (($post['total']=='added') and ($post['reached']>0)){echo 'bgorange';}if ($post['reached']==0){ echo 'bgFuchsia'; };?> positionBtnMetas">
		
        <span class="textRedimir color-White"> <?php if (($post['total']=='added') and ($post['reached']=='1')){ echo 'Canjeado tu premio';} if (($post['total']!='added') and ($post['reached']=='1')){echo 'Reclama tu premio';}if ($post['reached']==0){ echo 'Aún no puedes canjearlo'; };?></span>
		
      </a>
    </div>
  </div>
  <?php $sem++;}?> 
 </div>
  