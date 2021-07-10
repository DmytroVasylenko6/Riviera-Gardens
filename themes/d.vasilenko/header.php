<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?= get_template_directory_uri().'/favicon.ico'?>" type="image/x-icon">
    <link rel="preload" as="font" href="<?= get_template_directory_uri(). '/assets/fonts/Montserrat-Bold.ttf' ?>"
        crossorigin>
    <link rel="preload" as="font" href="<?= get_template_directory_uri(). '/assets/fonts/Montserrat-Medium.ttf' ?>"
        crossorigin>
    <link rel="preload" as="font" href="<?= get_template_directory_uri(). '/assets/fonts/Montserrat-SemiBold.ttf' ?>"
        crossorigin>
    <link rel="preload" as="font" href="<?= get_template_directory_uri(). '/assets/fonts/Montserrat-Regular.ttf' ?>"
        crossorigin>
    <link rel="preload" as="font" href="<?= get_template_directory_uri(). '/assets/fonts/Montserrat-Light.ttf' ?>"
        crossorigin>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">


        <header id="masthead" class="site-header">

            <div class="container header">
                <div class="left-box">
                    <div class="logo-container">
                        <a href="<?= home_url()?>" class="logo-link">
                            <img src="<?= get_template_directory_uri().'/assets/images/svg/logo.svg' ?>" width="140"
                                height="48" />
                        </a>
                    </div>
                </div>


                <div class="backdrop" data-backdrop>
                    <div class="right-box ">

                        <nav id="site-navigation" class="main-navigation" data-menu-inner>
                            <ul class="header_nav">

                                <?php wp_nav_menu([
			       				'menu' => 'Header',
			       				'container' => '',
			       				'items_wrap' => '%3$s'
			       			]) ?>

                            </ul>
                        </nav><!-- #site-navigation -->


                    </div>
                </div>

                <button class="header__button-menu" aria-label="button menu open-close" aria-expanded="false"
                    aria-controls="navmenu" data-menu-button>
                    <svg width="30" height="30">
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-burger' ?>"
                            class="icon-menu"></use>
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-cross' ?>"
                            class="cross-icon"></use>
                    </svg>
                </button>
            </div>

        </header><!-- #masthead -->