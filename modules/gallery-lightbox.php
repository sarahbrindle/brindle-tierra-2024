<?php $module = $args['module']; ?>
<!--module gallery starts here-->
<section class="module-gallery" data-aos="fade-up" data-aos-duration="400" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
          <div class="gallery-container">
                <?php foreach($module['images'] as $image) { ?>
                    <figure>
                      <a href="<?php echo $image['image']['url']; ?>" title="<?php echo $image['image']['title']; ?>" class="gallery-btn">
                          <img src="<?php echo $image['image']['url']; ?>" alt="<?php echo $image['image']['title']; ?>" />    
                      </a>                  
                    </figure>
                  <?php } ?>         
            
          </div>
  </div>
</section>
<!--module gallery ends here-->