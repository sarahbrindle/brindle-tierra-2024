<?php $module = $args['module'];
$bgimage = ''; 
if(($module['banner_background'])){
  $bgimage = $module['banner_background']['url'];
}

$bgColor = 'secondary-color';
if(($module['background_color'])){
  $bgColor = $module['background_color'];
}
?>
<!--module floorplans starts here-->
<section class="module-intro-block" <?php if($bgimage !=''){?>style="background-image: url(<?php echo $bgimage;?>);"<?php }else{?> style="background-color: var(--<?php echo $bgColor;?>);" <?php }?>>
<div class="container-fluid">
  <article class="welcome-block"  data-aos="fade-up" data-aos-duration="300" data-aos-easing="cubic-bezier">
    <?php get_template_part('partials/title', null, array('title' => $module['banner_title_title'], 'class' => '')); ?>
    <?php get_template_part('partials/copy', null, array('copy' => $module['banner_content'])); ?>
    <?php if ($module['banner_editor'] != "") { ?>
        <?php echo $module['banner_editor'];?>
    <?php } ?>

    <?php if ($module['link']) { ?>
        <div class="primary-btn text-center">     
          <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => '', 'has_arrow' => false)); ?>
        </div> 
    <?php } ?> 

    <?php if ($module['shortcode'] != "") { ?>
    <div class="container container-full">
        <?php echo do_shortcode($module['shortcode']); ?>
    </div>
    <?php } ?>

  </article>
</div>
</section>
<!--module floorplans ends here-->