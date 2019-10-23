<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="<?php echo IMG_DIR; ?>/favicon.png" />
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php body_attributes(); ?>>

    <?php do_action('wp_body'); ?>

    <header>

        <div class="fixed-top">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="nav-transparent navigation-container nav-toggle m-0 px-5 nav-wrap" id="header-main-container">
                            <nav class="navbar navbar-expand-xs p-0">
                                <a class="navbar-logo" href="<?php echo home_url('/'); ?>">
                                    <img src="<?php echo IMG_DIR; ?>/logo.png" alt="" class="img-fluid">
                                </a>
                                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                                    data-target="#navbarTopMenu" aria-controls="navbarTopMenu" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                    <span class="hamburger"><span></span><span></span><span></span></span>
                                </button>
                                <div id="navbarTopMenu" class="collapse navbar-collapse justify-content-lg-end">
                                    <div class="contact-bar">
                                        <div class="container-fluid pr-lg-0">
                                            <div class="col-12 col-lg-12 px-0">
                                                <div class="wrapper py-5 p-lg-0 d-flex flex-column flex-lg-row">
                                                    <div
                                                        class="wrapper-nav d-flex justify-content-end mr-4 mt-5 align-items-center">
                                                        <button class="navbar-toggler collapsed" type="button"
                                                            data-toggle="collapse" data-target="#navbarTopMenu"
                                                            aria-controls="navbarTopMenu" aria-expanded="false"
                                                            aria-label="Toggle navigation">
                                                            <span
                                                                class="hamburger"><span></span><span></span><span></span></span>
                                                        </button>
                                                    </div>
                                                    <?php wp_nav_menu(array(
                                        'theme_location'    => 'top',
                                        'depth'             => 2,
                                        'container'         => '',
                                        'menu_id'           => false,
                                        'menu_class'        => 'navbar-nav my-auto',
                                        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                        'walker'            => new WP_Bootstrap_Navwalker()
                                    )); ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>