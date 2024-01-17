<?php $module = $args['module']; ?>
<!--module-slider-1 starts here-->
<section class="module-slider-1"  data-aos="fade-down" data-aos-duration="600" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
    <div class="slider">
      <?php if($module['images']){ foreach ($module['images'] as $image) { ?>
      <figure>
        <img src="<?=$image['image']['url']?>" alt="<?=$image['image']['alt']?>">
      </figure>
      <?php }} ?>
    </div>
    <article>
      <h4 class="title-dynamic"></h4>
      <div class="slider-nav">
        <button id="slick-prev" class="slick-button">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/prev-arrow.svg" alt="">
        </button>
        <button id="slick-next" class="slick-button">
          <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/next-arrow.svg" alt="">
        </button>
      </div>
    </article>
  </div>
</section>
<!--module-slider-1 ends here-->