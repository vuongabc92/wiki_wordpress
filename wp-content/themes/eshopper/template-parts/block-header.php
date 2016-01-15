<?php
    $social_networking = eshopper_get_social_networking();
?>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="mailto:<?php echo $social_networking['phone']; ?>"><i class="fa fa-phone"></i> <?php echo $social_networking['phone']; ?></a></li>
                            <li><a href="tel:<?php echo $social_networking['email']; ?>"><i class="fa fa-envelope"></i> <?php echo $social_networking['email']; ?></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $social_networking['facebook']; ?>"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php echo $social_networking['twitter']; ?>"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php echo $social_networking['linkedin']; ?>"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="<?php echo $social_networking['dribbble']; ?>"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="<?php echo $social_networking['google_plus']; ?>"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo eshopper_get_logo_src(); ?>" alt="" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <?php
                            include_once THEME_DIR . '/inc/class-eshopper-extra-walker-nav-menu.php';

                            $extra_navs = array(
                                'theme_location' => 'extra-nav',
                                'menu'           => 'Extra Nav',
                                'container'      => false,
                                'menu_class'     => 'nav navbar-nav',
                                'fallback_cb'    => 'wp_page_menu',
                                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                                'walker'         => new Eshopper_Extra_Walker_Nav_Menu()
                            );

                            wp_nav_menu( $extra_navs );
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only"><?php _e( 'Toggle navigation', THEME_NAME ); ?></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <?php
                            include_once THEME_DIR . '/inc/class-eshopper-walker-nav-menu.php';

                            $main_navs = array(
                                'theme_location' => 'primary-nav',
                                'menu'           => 'Primary Nav',
                                'container'      => false,
                                'menu_class'     => 'nav navbar-nav collapse navbar-collapse',
                                'fallback_cb'    => 'wp_page_menu',
                                'items_wrap'     => '<ul class="%2$s">%3$s</ul>',
                                'walker'         => new Eshopper_Walker_Nav_Menu()
                            );

                            wp_nav_menu( $main_navs );
                        ?>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="<?php _e( 'Search', THEME_NAME ); ?>"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->