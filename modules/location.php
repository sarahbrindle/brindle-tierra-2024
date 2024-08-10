<?php $module = $args['module']; ?>
<!--module locations starts here-->
<section class="module-locations">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-easing="cubic-bezier">
        <div class="text-container">
          <?php get_template_part('partials/title', null, array('title' => $module['location_title_title'], 'class' => '')); ?>
          <?php get_template_part('partials/copy', null, array('copy' => $module['location_subtitle'], 'class' => '')); ?>   

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
      <div class="col-lg-6" data-aos="fade-right" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <?php if($module['map']['url']){?>
            <figure>
              <img src="<?=$module['map']['url']?>" alt="<?=$module['map']['alt']?>">
            </figure>
        <?php }?>
      </div>
    </div>
  </div>
</section>
<!--module locations ends here-->