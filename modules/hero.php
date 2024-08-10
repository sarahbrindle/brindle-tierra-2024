<?php $module = $args['module']; ?>
<!--module banner starts here-->
<section id="form" class="module-banner <?php if ($module['shortcode'] != "") { ?>module-banner-form-landing<?php }?>" data-aos="fade-up" data-aos-duration="400" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-4 col-lg-5">
        <div class="text-container">
          <?php get_template_part('partials/title', null, array('title' => $module['hero_title_title'], 'class' => 'hero-title')); ?>
          <?php get_template_part('partials/copy', null, array('copy' => $module['hero_subtitle'], 'class' => 'hero-subtitle')); ?>
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


        </div>
      </div>
      <div class="col-xl-8 col-lg-7">
        
        <figure>
              <?php if($module['image']['url']){?>
                <img src="<?=$module['image']['url']?>" alt="<?=$module['image']['alt']?>" >
              <?php }?>
              <?php if ($module['shortcode'] != "") { ?>
                  <div class="form-landing">
                      <?php echo do_shortcode($module['shortcode']); ?>
                  </div>
              <?php } ?>
        </figure>
        
        
      </div>
    </div>
  </div>
</section>
<!--module banner ends here-->