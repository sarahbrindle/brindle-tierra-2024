<?php $module = $args['module']; ?>
<!--module fp tabs block starts here-->
      <section class="module-fp-tabs-block"  data-aos="fade-down" data-aos-duration="300" data-aos-easing="cubic-bezier">
        <div class="container-fluid">
          <ul id="floorPlanTab" role="tablist">
            <?php $tabCount = 1; foreach($module['tabs'] as $tabs) { ?>
            <li class="nav-item" role="presentation">
              <button class="nav-link <?php if($tabCount==1){?> active <?php }?>" data-bs-toggle="tab" data-bs-target="#tab_<?php echo $tabCount; ?>"><?php echo $tabs['tab_title']; ?></button>
            </li>
            <?php $tabCount++; } ?>

          </ul>

          <div class="tab-content" id="myTabContent">
            <?php $tabCount = 1; foreach($module['tabs'] as $tabs) { ?>
                    <?php if ($tabs['shortcode'] != "") { ?>
                    <div class="tab-pane fade <?php if($tabCount==1){?> show active <?php }?>" id="tab_<?php echo $tabCount; ?>" role="tabpanel">
                      <?php echo do_shortcode($tabs['shortcode']); ?>
                    </div>
                    <?php } ?>
                    <?php if ($tabs['iframe_embed_code']) { ?>
                    <div class="tab-pane fade" id="tab_<?php echo $tabCount; ?>" role="tabpanel">
                      <?php echo $tabs['iframe_embed_code']; ?>
                    </div>
                    <?php } ?>
                    <?php if ($tabs['image']) { ?>
                    <div class="tab-pane fade" id="tab_<?php echo $tabCount; ?>" role="tabpanel">
                      <img src="<?php echo $tabs['image']['url']; ?>" alt="<?php echo $tabs['image']['alt']; ?>" />
                    </div>
                    <?php } ?>
            <?php $tabCount++; } ?>
          </div>

        </div>
      </section>
      <!--module fp tabs block ends here-->