<?php
    global $post;
    $currentPostId = $post->ID;
    $logo = get_field('logo', 'options'); 
    $hamburg_menu_disabled_pages = array(); 
    if(get_field('hamburg_menu_disabled_pages', 'options')){
      $hamburg_menu_disabled_pages = get_field('hamburg_menu_disabled_pages', 'options'); 
    }
    $menu_for_hamburg_menu_disabled_pages = get_field('menu_for_hamburg_menu_disabled_pages', 'options'); 
?>
<!--header starts here-->
    <header class="site-header">
      <div class="container-fluid">
        
            <div class="site-logo">
              <?php if($logo){?>
                  <a href="<?php echo home_url(); ?>" class="home-link"><img src="<?=$logo['url']?>" alt="<?=$logo['alt']?>" class="header-logo" /></a>
              <?php }?>
            </div>
        

        <div class="nav-right">
          
          <?php if(!(in_array($currentPostId, $hamburg_menu_disabled_pages))){?>
              <div class="site-navigation">            
                <?php wp_nav_menu(array('theme_location' => 'header-menu','menu_class'=> "primary-menu")); ?>
              </div>
              <button class="navbar-toggler">
                <span></span><span></span><span></span>
              </button>
          <?php }else{?>
                <?php if($menu_for_hamburg_menu_disabled_pages !=''){?>
                    <div class="site-navigation">            
                      <?php wp_nav_menu(array('menu' => $menu_for_hamburg_menu_disabled_pages,'menu_class'=> "primary-menu")); ?>
                      </div>
                <?php }else{?>
                      <div class="site-navigation">            
                      <?php wp_nav_menu(array('theme_location' => 'header-menu','menu_class'=> "primary-menu")); ?>
                      </div>
                <?php }?>
          <?php }?>

        </div>        
      </div>
    </header><!--header ends here-->

    <!--overlay-menu starts here-->
    <section class="overlay-nav">
      
      <?php wp_nav_menu(array('theme_location' => 'full-screen-menu','menu_class'=> "overlay-menu")); ?>
    </section>
    <!--overlay-menu starts here-->