<?php 
$module = $args['module']; 


$no_buttons = 0;
if($module['buttons']){
    $buttons = $module['buttons'];
    $no_buttons = count($buttons);
}
?>
<!--module intro starts here-->
<section class="module-intro" <?php if($module['background']['url']){?> style="background-image: url(<?=$module['background']['url']?>" <?php }?> alt="<?=$module['image']['alt']?>);">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-7"  data-aos="fade-left" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <?php if($module['image']['url']){?>
            <figure>
              <img src="<?=$module['image']['url']?>" alt="<?=$module['image']['alt']?>">
            </figure>
        <?php }?>
      </div>
      <div class="col-lg-5" data-aos="fade-right" data-aos-duration="600" data-aos-easing="cubic-bezier">
        <?php get_template_part('partials/title', null, array('title' => $module['intro_title_title'], 'class' => 'intro-title')); ?>
    <?php get_template_part('partials/copy', null, array('copy' => $module['intro_subtitle'], 'class' => 'hero-subtitle')); ?>
        <?php if ($no_buttons > 1) { ?>
          <div class="cta-btn-grp">
                <?php foreach($buttons as $button) { ?>
                    <div class="primary-btn"><?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => 'button_alt', 'has_arrow' => false)); ?></div>
                <?php } ?>            
          </div>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!--module intro ends here-->