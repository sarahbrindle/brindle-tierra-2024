<?php $module = $args['module']; ?>
<!--module gallery starts here-->
<section class="module-gallery" data-aos="fade-up" data-aos-duration="600" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
    <div class="slider">
      <?php foreach ($module['gallery'] as $image) { ?>
      <figure>
        <img src="<?=$image['photo']['url']?>" alt="<?=$image['photo']['alt']?>">
      </figure>
      <?php } ?>
    </div>
    <article>
      <?php get_template_part('partials/title', null, array('title' => $module['gallery_title_title'], 'class' => '')); ?>
    <?php get_template_part('partials/copy', null, array('copy' => $module['gallery_subtitle'], 'class' => '')); ?>   
      <div class="cta-btn-grp">
        
        <?php if ($module['link']) { ?>
            <div class="page-btn">            
              <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => '', 'has_arrow' => false)); ?>
            </div> 
        <?php } ?> 

        <div class="slick-nav">
          <button id="gal-prev" class="slick-arrow">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/prev-arrow.svg" alt="">
          </button>
          <button id="gal-next" class="slick-arrow">
            <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/next-arrow.svg" alt="">
          </button>
        </div>
      </div>
    </article>
  </div>
</section>
<!--module gallery ends here-->