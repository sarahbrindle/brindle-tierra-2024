<style>
  .section-hero-lp {
    width: 100%;
    padding-top: 50px;
    padding-bottom: 120px;
    background-position: bottom center;
    background-repeat: no-repeat;
    background-size: 100%;
  }
  @media(max-width:1560px) {
    .section-hero-lp {
      padding-left: 8%;
    }
  }
  .section-hero-lp .container-fluid {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
    max-width: 1393px;
  }

  .section-hero-lp .row-wrapper {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0;
    background-color: #f3f3f3;
    border-radius: 20px;
  }

  .section-hero-lp .row-wrapper .text-container {
    padding: 75px 50px 65px 100px;
  }

  .section-hero-lp .row-wrapper .text-container h2 {
    color: #000;
    font-family: "Open Sans", sans-serif;
    font-size: 70px;
    font-style: normal;
    font-weight: 600;
    line-height: 1.3;
    text-transform: capitalize;
    margin-bottom: 10px;
  }

  .section-hero-lp .row-wrapper .text-container h4 {
    color: #000;
    font-family: "Open Sans", sans-serif;
    font-size: 32px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.3;
    letter-spacing: 2.56px;
    text-transform: uppercase;
    margin-bottom: 20px;
  }

  .section-hero-lp .row-wrapper .text-container p {
    color: #000;
    font-family: "Open Sans", sans-serif;
    font-size: 18px;
    font-style: normal;
    font-weight: 400;
    line-height: 1.7;
    margin-bottom: 24px;
  }

  .section-hero-lp .btn-secondary a {
    display: inline-flex;
    min-width: 250px;
    padding: 24px 35px 24px 35px;
    justify-content: center;
    align-items: center;
    flex-shrink: 0;
    border-radius: 3px;
    background-color: #9E182A;
    box-shadow: 0em 1px 4px 0px rgba(18, 25, 97, 0.08);
    color: #F0EFEA;
    text-align: center;
    font-family: "Open Sans", sans-serif;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: 1.3;
    text-transform: uppercase;
    transition: all .2s ease-in-out;
    border: 0;
    outline: none;
  }

  .section-hero-lp .btn-secondary a:hover {
    background-color: #790817;
  }

  .section-hero-lp .row-wrapper figure {
    display: block;
    margin: 0 0 0;
  }

  .section-hero-lp .row-wrapper figure img {
    transform: scale(1.17) translateY(45px);
  }
  .visible-lg {
    display: block;
  }
  @media(min-width:767.1px) {
    .visible-sm {
      display: none;
    }
  }

  .lp-strip {
    width: 100%;
    background-color: #000;
    color: #fff;
    padding: 45px 0 45px;
  }

  .lp-strip .container-fluid {
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 20px;
    padding-right: 20px;
    max-width: 1707px;
  }

  .lp-strip .container-fluid .row-wrapper {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 30px;
    flex-wrap: wrap;
  }

  .lp-strip .row-wrapper .text-container {
    flex-shrink: 0;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    gap: 17px;
  }

  .lp-strip .row-wrapper .text-container figure {
    flex-shrink: 0;
    margin: 0 0 0;
    height: 35px;
  }

  .lp-strip .row-wrapper .text-container h3 {
    color: #FFF;
    font-family: "Open Sans", sans-serif;
    font-size: 19px;
    font-style: normal;
    font-weight: 600;
    line-height: 1.2;
    letter-spacing: 1.74px;
    text-transform: uppercase;
    margin: 0 0 0;
  }

  @media(min-width:992px) and (max-width:1659px) {
    .lp-strip .row-wrapper .text-container h3 {
      font-size: 16px;
    }
  }

  @media(min-width:1201px) and (max-width:1400px) {
    .section-hero-lp .row-wrapper figure img {
      transform: scale(1.03) translateY(45px);
    }
  }

  @media(min-width:768px) and (max-width:1200px) {
    .section-hero-lp .row-wrapper figure img {
      vertical-align: middle;
      transform: scale(.98) translateY(45px);
    }
  }

  @media(max-width:767px) {
    .section-hero-lp .btn-secondary a {
      padding: 15px 15px;
      font-size: 16px;
      min-width:170px;
    }
  }


  @media(max-width:1200px) {
    .section-hero-lp .row-wrapper .text-container {
      padding: 60px 30px 60px 30px;
    }
    .section-hero-lp .row-wrapper .text-container h2 {
      font-size: 44px;
    }
    .section-hero-lp .row-wrapper .text-container h4 {
      font-size: 24px;
    }
    .lp-strip .container-fluid .row-wrapper {
      justify-content: center;
    }
    .lp-strip .row-wrapper .text-container h3 {
      font-size: 16px;
    }
  }
  @media(max-width:767px) {
    .visible-lg {
      display: none;
    }
    .visible-sm {
      display: block;
    }
    .section-hero-lp .row-wrapper {
      grid-template-columns: repeat(1, 1fr);
    }
    .section-hero-lp .row-wrapper .text-container {
      padding: 40px 20px 40px 20px;
      margin-bottom: -30px;
    }
    .section-hero-lp .row-wrapper .text-container h2 {
      font-size: 38px;
      margin-bottom: 8px;
    }
    .section-hero-lp .row-wrapper .text-container h4 {
      font-size: 18px;
    }
    .lp-strip .container-fluid .row-wrapper {
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }
    .section-hero-lp {
      padding-left: 0;
    }
    .section-hero-lp .row-wrapper figure img {
      transform: scale(1) translateY(0);
      margin-left: auto;
      margin-right: 0;
    }
    .lp-strip .row-wrapper .text-container h3 {
      font-size: 14px;
    }

    .lp-strip .row-wrapper .text-container {
      max-width: 300px;
      width: 100%;
    }
  }





  .white-popup {
  position: relative;
  background: #FFF;
  padding: 40px;
  width: auto;
  max-width: 500px;
  margin: 20px auto;
  transition: 1s all;
}

.mfp-bg {}

.mfp-fade.mfp-bg {
  opacity: 0;
  -webkit-transition: all 0.15s ease-out;
  -moz-transition: all 0.15s ease-out;
  transition: all 0.15s ease-out;
}


/* overlay animate in */

.mfp-fade.mfp-bg.mfp-ready {
  opacity: 0.8;
}


/* overlay animate out */

.mfp-fade.mfp-bg.mfp-removing {
  opacity: 0;
}

.mfp-fade.mfp-wrap .mfp-content {
  opacity: 0;
  transition: all 0.4s ease-out;
}

.mfp-fade.mfp-wrap.mfp-ready .mfp-content {
  opacity: 1;
}

.mfp-fade.mfp-wrap.mfp-removing .mfp-content {
  opacity: 0;
}
</style>
<?php $module = $args['module']; ?>
<div class="section-hero-lp" <?php if($module['landing_page_hero_background']){?> style="background-image: url(<?=$module['landing_page_hero_background']['url']?>);" <?php }?>>
  <div class="container-fluid">
    <div class="row-wrapper">
      <div class="text-container">
        <?php if($module['landing_page_editor']) { echo $module['landing_page_editor'];} ?>
       
        <?php if ($module['link']) { 
              $linkClass = '';
            if(isset($module['link_class'])){
                $linkClass = $module['link_class'];
            }
          ?>
              <div class="btn-secondary">       
                <?php get_template_part('partials/button', null, array('button' => $module['link'],'class_alt' => $linkClass, 'has_arrow' => false)); ?>
              </div> 
          <?php } ?> 

      </div>
      <figure>
        <?php if($module['desktop_image']){?>
        <img src="<?=$module['desktop_image']['url']?>" alt="<?=$module['desktop_image']['alt']?>" alt="" class="visible-lg">
        <?php }?>
        <?php if($module['small_image']){?>
        <img src="<?=$module['small_image']['url']?>" alt="<?=$module['small_image']['alt']?>" alt="" class="visible-sm">
        <?php }?>
      </figure>
    </div>
  </div>
</div>


<div <?php if ($module['link']) { ?> id="<?php echo str_replace('#', '', $module['link']['url']);?>" <?php }?> class="white-popup mfp-hide">
  <?php echo $module['popup_contents'];?>
</div>


<div class="lp-strip">
  <div class="container-fluid">
    <div class="row-wrapper">
      
      <?php if($module['specialties']){foreach ($module['specialties'] as $image) { ?>
      <div class="text-container">
        <figure>
          <img src="<?=$image['icon']['url']?>" alt="<?=$image['icon']['alt']?>">
        </figure>
        <h3><?php echo $image['title'];?></h3>
      </div>
      <?php }} ?> 
    </div>
  </div>
</div>




