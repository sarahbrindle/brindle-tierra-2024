<?php $module = $args['module']; ?>
<?php if($module['info']){ foreach($module['info'] as $amenities) { ?>
	<!--module amenities info starts here-->
<section class="module-amenities-info" <?php if($amenities['info_background']){?> style="background-image: url(<?php echo $amenities['info_background']['url'];?>);" <?php }?>  data-aos="fade-up" data-aos-duration="300" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <div class="row">
    <?php if($amenities['info_title']){?>
        <div class="col-lg-4">
          <h2><?php echo $amenities['info_title'];?></h2>
        </div>
    <?php }?>
    <div class="col-lg-8">
      <?php if($amenities['info_item_list']){?>
      <ul>
          <?php foreach($amenities['info_item_list'] as $items) { ?>
          <li><?php echo $items['title'];?> <?php if($items['photo']){?><a href="<?php echo $items['photo']['url']; ?>" title="<?php echo $items['photo']['title']; ?>" class="gallery-btn"><img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/camera.svg" alt=""></a><?php }?></li>
          <?php } ?>
      </ul>
      <?php }?>
    </div>
  </div>
</div>
</section>
<!--module amenities info ends here-->
<?php }} ?>