<?php
    $footer = get_field('footer', 'options');
    $show_section = get_field('show_section');
    $edit_section = get_field('edit_section_content_for_this_page');
    if ($edit_section) {
        $book_a_tour = get_field('overwrite_section_content')['book_a_tour'];
    } else {
        $book_a_tour = get_field('book_a_tour', 'options');
    }
?>

<?php if ($show_section) { ?>
<!--module contact strip starts here-->
<section class="module-contact-strip" data-aos="fade-down" data-aos-duration="300" data-aos-easing="cubic-bezier">
  <div class="container-fluid">
    <div class="text-container" data-aos="fade-down" data-aos-duration="500" data-aos-easing="cubic-bezier">
      <?php get_template_part('partials/title', null, array('title' => $book_a_tour['title_title'], 'class' => 'book-a-tour-title')); ?>
      <?php get_template_part('partials/copy', null, array('copy' => $book_a_tour['copy'], 'class' => '')); ?> 
      

      <?php 
      $buttons = $book_a_tour['buttons'];
      $no_buttons = count($buttons) == 0;
      if (!$no_buttons) { ?>
          <div class="cta-btn-grp">
            <?php foreach($buttons as $button) { ?>
                    <div class="btn-white-line"><?php get_template_part('partials/button', null, array('button' => $button['link'],'class_alt' => '','has_arrow' => false)); ?></div>
                <?php } ?>            
          </div>
        <?php } ?>

    </div>
  </div>
</section>
<!--module contact strip ends here-->
<?php } ?>


<!--footer starts here-->
    <footer class="site-footer">
      <div class="container-fluid">
        <div class="footer-widgets">
          <div class="widget-1">
              <?php if ($footer['logo']['url']) { ?>
                  <figure><a href="<?php echo home_url(); ?>" class="home-link"><img src="<?=$footer['logo']['url']?>" alt="<?=$footer['logo']['alt']?>" /></a></figure>
              <?php } ?>
          </div>
          <div class="widget-2">
            <address>
              <?php get_template_part('partials/copy', null, array('copy' => $footer['address'], 'class' => '')); ?>   
              <a target="_blank" href="<?=$footer['directions']['url']?>"><?=$footer['directions']['title']?> <i class="fa-solid fa-arrow-right-long"></i></a>
            </address>
            
            <div class="phone">
              <a href="tel:<?=$footer['phone_number']?>" class="address phone-number"><?=$footer['phone_number']?></a>
            </div>

            <div class="office-timings">
              <?=$footer['office_timing']?>
            </div>
          </div>
          <div class="widget-3">
            <div class="footer-menu">
              <?php wp_nav_menu(array('theme_location' => 'footer-left-menu')); ?>
            </div>
          </div>
          <div class="widget-4">
            <div class="footer-menu">
              <?php wp_nav_menu(array('theme_location' => 'footer-right-menu')); ?>
            </div>
            <div class="social-icons">
              <?php wp_nav_menu(array('theme_location' => 'social-menu')); ?>
            </div>
          </div>
        </div>
      </div>
    </footer><!--footer starts here-->

    <!--footer bar starts here-->
    <footer class="footer-bar">
      <div class="container-fluid">
        <?php if ($footer['copyright']) { ?>
        <div class="copyright-info">
          <p><?php

          $copyright = $footer['copyright'];
          $copyright = str_replace('{YEAR}', date('Y'), $copyright);
          echo $copyright;

          ?></p>          
          <?php foreach ($footer['icons'] as $icons) { ?>
                    
                    <figure>
                        <?php if ($icons['link'] != "") { ?>
                            <a href="<?php echo $icons['link']; ?>" target="_blank">
                        <?php } ?> 
                              <img src="<?php echo $icons['icon']['url']; ?>" alt="<?php echo $icons['icon']['alt']; ?>" />
                        <?php if ($icons['link'] != "") { ?></a><?php } ?> 
                    </figure>
          <?php } ?>

        </div>
        <?php } ?>
        
        <?php foreach ($footer['design_by_icons'] as $icons) { ?>
                    
                    <figure>
                        <?php if ($icons['link'] != "") { ?>
                            <a href="<?php echo $icons['link']; ?>" target="_blank">
                        <?php } ?> 
                              <img src="<?php echo $icons['icon']['url']; ?>" alt="<?php echo $icons['icon']['alt']; ?>" />
                        <?php if ($icons['link'] != "") { ?></a><?php } ?> 
                    </figure>
          <?php } ?>


      </div>
    </footer>
    <!--footer bar ends here-->