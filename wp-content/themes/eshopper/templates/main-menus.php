<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?php _e('Toggle navigation', ESHOPPER) ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
</div>
<div class="mainmenu pull-left">
<?php

    include_once $template_path . '/inc/class-eshopper-walker-nav-menu.php';
    
    $main_navs = array(
        'theme_location' => 'primary-nav',
        'menu'           => 'Main Nav',
        'container'      => false,
        'menu_class'     => 'nav navbar-nav collapse navbar-collapse',
        'fallback_cb'    => 'wp_page_menu',
        'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
        'walker'         => new Eshopper_Walker_Nav_Menu()
    );

    wp_nav_menu($main_navs);

?>
</div>