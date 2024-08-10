<?php $module = $args['module']; ?>
<!--module floor plans starts here-->
<section class="module-floor-plans">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-4" data-aos="fade-right" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <article>
          <?php get_template_part('partials/title', null, array('title' => $module['floorplan_title_title'], 'class' => '')); ?>
          <?php get_template_part('partials/copy', null, array('copy' => $module['floorplan_subtitle'], 'class' => '')); ?>
          <div class="slick-btn-grp">
            <button id="plan-prev" class="slick-arrow">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/prev-arrow.svg" alt="">
            </button>
            <button id="plan-next" class="slick-arrow">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/next-arrow.svg" alt="">
            </button>
          </div>
          <?php if ($module['link']) { 
              $linkClass = '';
              if(isset($module['link_class'])){
                  $linkClass = $module['link_class'];
              }
            ?>
              <div class="primary-btn">            
                <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => $linkClass, 'has_arrow' => false)); ?>
              </div> 
          <?php } ?> 
        </article>
      </div>
      <div class="col-xl-9 col-lg-8" data-aos="fade-left" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <div class="slider floor_slider">
          
          <?php if($module['images']){foreach ($module['images'] as $image) { ?>
          <figure>
            <img src="<?=$image['photo']['url']?>" alt="<?=$image['photo']['alt']?>">
            <figcaption>
            <h4><?=$image['photo']['alt']?></h4>
            </figcaption>
          </figure>
          <?php }} ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!--module floor plans ends here-->