<?php $module = $args['module']; ?>
<!--inner banner starts here-->
<section class="module-inner-banner" style="background-image: url(<?=$module['banner_image']['url']?>);"  data-aos="fade-up" data-aos-duration="300" data-aos-easing="cubic-bezier">
<div class="container-fluid">
  <?php get_template_part('partials/title', null, array('title' => $module['page_title_title'], 'class' => '')); ?>
</div>
</section>
<!--inner banner ends here-->