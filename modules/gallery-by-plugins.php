<?php $module = $args['module']; ?>
<!--module gallery starts here-->
<section class="module-gallery" data-aos="fade-up" data-aos-duration="400" data-aos-easing="cubic-bezier">
  <div class="container-fluid">

            <?php if(isset($module['shortcode'])){?>
                <?php echo do_shortcode($module['shortcode']); ?>
            <?php }?>
          
  </div>
</section>
<!--module gallery ends here-->