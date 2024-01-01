<?php $module = $args['module']; ?>

<!--module gallery starts here-->
<section class="module-gallery" data-aos="fade-up" data-aos-duration="400" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <div class="row" data-masonry='{"percentPosition": true }'>
    
    <?php $imgCount = 1; foreach($module['images'] as $image) { ?>
    <div class="col-lg-3 col-md-4 col-sm-6">
      <figure>
        <a href="<?php echo $image['image']['url']; ?>" title="<?php echo $image['image']['title']; ?>" class="gallery-btn">
          <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['title']; ?>">
        </a>
      </figure>
    </div>
    <?php $imgCount++; } ?>           
  </div>
</div>
</section>
<!--module gallery ends here-->