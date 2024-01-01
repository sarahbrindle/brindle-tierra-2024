<?php get_header(); ?>
    <main class="app-modules">
    <?php 
        $modules = get_fields()['modules'];
        if ($modules) {
            foreach ($modules as $module) {
                $module_path = str_replace("_", "-", $module['acf_fc_layout']);
                get_template_part('modules/' . $module_path, null, array('module' => $module));
            }
        }
    ?>
    </main>
<?php get_footer(); ?>