<?php $module = $args['module']; ?>
<!--module floor plans starts here-->
<section class="module-floor-plans">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-3 col-lg-4" data-aos="fade-right" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <article>
          <?php get_template_part('partials/title', null, array('title' => $module['title_title'], 'class' => '')); ?>
          <?php echo $module['sub_title']; ?>
          <div class="slick-btn-grp">
            <button id="plan-prev" class="prev-arrow slick-arrow">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/prev-arrow.svg" alt="">
            </button>
            <button id="plan-next" class="next-arrow slick-arrow">
              <img src="<?php echo get_stylesheet_directory_uri();?>/assets/images/next-arrow.svg" alt="">
            </button>
          </div>
          <?php if ($module['link']) { ?>
              <div class="primary-btn">            
                <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => '', 'has_arrow' => false)); ?>
              </div> 
          <?php } ?> 
        </article>
      </div>
      <div class="col-xl-9 col-lg-8" data-aos="fade-left" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <div class="slider loc_slider">
          
          <?php if($module['list']){foreach ($module['list'] as $list) { ?>
              <?php if($list['photo']){?>
                  <figure>
                    <img src="<?=$list['photo']['url']?>" alt="<?=$list['photo']['alt']?>">
                    <figcaption>
                    <h4><?=$list['title']?></h4>
                    </figcaption>

                    <?php if ($list['link']) { ?>
                    <div class="primary-btn">            
                      <?php get_template_part('partials/button', null, array('button' => $list['link'],'class_alt' => '', 'has_arrow' => false)); ?>
                    </div> 
                <?php } ?> 

                  </figure>
              <?php }?>
          <?php }} ?>

        </div>
      </div>
    </div>
  </div>
</section>
<!--module floor plans ends here-->