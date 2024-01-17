<?php $module = $args['module']; ?>
<?php 
$count = 1;
if($module['amenities']){
foreach($module['amenities'] as $amenities) { ?>
<section class="module-amenities-grid" data-module="amenities" <?php if(($count % 2) ==1){?>  data-aos="fade-right" <?php }else{?> data-aos="fade-left" <?php }?> data-aos-duration="400" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <?php if($amenities['image']){?>
      <figure>
        <a href="<?php echo $amenities['image']['url']; ?>" title="<?php echo $amenities['image']['title']; ?>" class="popup-btn">
          <img src="<?php echo $amenities['image']['url']; ?>" alt="<?php echo $amenities['image']['title']; ?>" />
        </a>
      </figure>
  <?php }?>
  <article>
    <?php if($amenities['amenity_title']){?>
        <h2><?php echo $amenities['amenity_title']; ?></h2>
    <?php }?>
    <?php get_template_part('partials/copy', null, array('copy' => $amenities['amenity_list_details'])); ?>
  </article>
</div>
</section>
<?php 
$count++;
}} ?>