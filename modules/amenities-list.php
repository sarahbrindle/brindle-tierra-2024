<?php $module = $args['module']; ?>
<?php foreach($module['info'] as $amenities) { ?>
	<!--module amenities info starts here-->
<section class="module-amenities-info" style="background-image: url(<?php echo $amenities['info_background'];?>);"  data-aos="fade-up" data-aos-duration="300" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4">
      <h2><?php echo $amenities['info_title'];?></h2>
    </div>
    <div class="col-lg-8">
      <?php echo $amenities['info_item_list'];?>
    </div>
  </div>
</div>
</section>
<!--module amenities info ends here-->
<?php } ?>