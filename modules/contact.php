<?php $module = $args['module']; ?>
<!--module contact starts here-->
<section class="module-contact" data-aos="fade-up" data-aos-duration="300" data-aos-easing="cubic-bezier" data-module="contact">
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-6">
      <?php get_template_part('partials/title', null, array('title' => $module['contact_title_title'], 'class' => 'hero-title')); ?>
      <?php if($module['copy']) { echo $module['copy'];} ?>
    </div>
    <div class="col-lg-6">
      <?php get_template_part('partials/title', null, array('title' => $module['form_title_title'], 'class' => 'hero-title')); ?>
        <?php if($module['shortcode']){ ?>
            <?php echo do_shortcode($module['shortcode']); ?>
        <?php }?>
    </div>
  </div>
</div>
</section>
<!--module contact ends here-->