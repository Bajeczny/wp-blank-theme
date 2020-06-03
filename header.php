<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?php echo get_bloginfo('name'); ?> | <?php single_post_title(); ?> </title>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <header id="main-header">
            <div class="container">
                <div class="logo-wrapper">
                    <a href="<?php echo esc_url( home_url() ); ?>">
                        <img src="<?php echo wp_get_attachment_image_src( 000 ,'full')[0];?> ">
                    </a>
                </div>
                <div class="menu-wrapper">
	                <?php

	                wp_nav_menu( array(
	                        'theme_location' => 'header-menu',
	                        'menu_class'     => 'nav',
	                        'menu_id'        => 'top-menu'
                    ) );

	                ?>
                </div>
                <div class="mobile-button-wrapper">
                    <button class="openmenu collapsed" data-toggle="collapse" href="#mobileMenu" role="button" aria-expanded="false" aria-controls="mobileMenu"></button>
                </div>
                <div class="mobile-menu">
                    <div id="mobileMenu" class="mobile-menu-wrapper collapse">
	                    <?php

	                    wp_nav_menu( array(
		                    'theme_location' => 'header-menu',
		                    'menu_class'     => 'mobile-nav',
		                    'menu_id'        => 'mobile-top-menu'
	                    ) );

	                    ?>
                    </div>

                </div>

            </div>
        </header>

        <div class="page-content">
