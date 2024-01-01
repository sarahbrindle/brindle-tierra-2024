<?php $module = $args['module']; ?>
<?php 
$count = 1;
foreach($module['amenities'] as $amenities) { ?>
<section class="module-amenities-grid" data-module="amenities" <?php if(($count % 2) ==1){?>  data-aos="fade-right" <?php }else{?> data-aos="fade-left" <?php }?> data-aos-duration="400" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <figure>
    <a href="<?php echo $amenities['image']['url']; ?>" title="<?php echo $amenities['image']['title']; ?>" class="popup-btn">
      <img src="<?php echo $amenities['image']['url']; ?>" alt="<?php echo $amenities['image']['title']; ?>" />
    </a>
  </figure>
  <article>
    <h2><?php echo $amenities['amenity_title']; ?></h2>
    <?php get_template_part('partials/copy', null, array('copy' => $amenities['amenity_list_details'])); ?>
  </article>
</div>
</section>
<?php 
$count++;
} ?>