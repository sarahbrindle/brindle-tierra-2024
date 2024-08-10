<?php $module = $args['module']; ?>
<?php 
$count = 1;
if($module['items']){
foreach($module['items'] as $items) { ?>
<!--module pet policy starts here-->
<section class="module-pet-policy">
<div class="container-fluid">
  <article>
  	<?php if ($items['icon']) { ?>
    <figure>
      <img src="<?=$items['icon']['url']?>" alt="<?=$items['icon']['alt']?>">
    </figure>
    <?php } ?> 
    <?php get_template_part('partials/copy', null, array('copy' => $items['copy'])); ?>
      <?php if ($items['link']) { 
                $linkClass = '';
                if(isset($module['link_class'])){
                    $linkClass = $module['link_class'];
                }
        ?>
      <div class="primary-btn">
      	<?php get_template_part('partials/button', null, array('button' => $items['link'],'class_alt' => $linkClass, 'has_arrow' => false)); ?>
      </div>
      <?php } ?> 
  </article>
</div>
</section>
<!--module pet-policy ends here-->
<?php 
$count++;
}} ?>