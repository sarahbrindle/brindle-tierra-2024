<?php $module = $args['module']; ?>
<!--module tour starts here-->
<section class="module-tour" data-aos="fade-left" data-aos-duration="600" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6" data-aos="fade-left" data-aos-duration="900" data-aos-easing="cubic-bezier">
        <?php if($module['photo']){?>
            <figure><img src="<?=$module['photo']['url']?>" alt="<?=$module['photo']['alt']?>" alt=""></figure>
        <?php }?>
      </div>
      <div class="col-lg-6">
        <div class="text-container">
          <?php get_template_part('partials/title', null, array('title' => $module['banner_title_title'], 'class' => '')); ?>
    <?php get_template_part('partials/copy', null, array('copy' => $module['banner_subtitle'], 'class' => '')); ?>          
          <?php if ($module['link']) { 
            $linkClass = '';
            if(isset($module['link_class'])){
                $linkClass = $module['link_class'];
            }
            ?>
              <div class="btn-white-line">            
                <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => $linkClass, 'has_arrow' => false)); ?>
              </div> 
          <?php } ?> 


        </div>
      </div>
    </div>
  </div>
</section>
<!--module tour ends here-->