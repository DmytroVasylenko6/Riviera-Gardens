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
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5CD5ZWG');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="shortcut icon" href="<?= get_template_directory_uri().'/favicon.png'?>" type="image/x-icon">
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
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CD5ZWG" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="page" class="site">


        <header id="masthead" class="site-header">

            <div class="container header">
                <button class="header__button-menu" aria-label="button menu open-close" aria-expanded="false"
                    aria-controls="navmenu" data-menu-button>
                    <svg width="30" height="30">
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-burger' ?>"
                            class="icon-menu"></use>
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-cross' ?>"
                            class="cross-icon"></use>
                    </svg>
                </button>

                <div class="left-box">
                    <div class="logo-container">
                        <a href="<?= home_url()?>" class="logo-link">
                            <img src="<?= get_template_directory_uri().'/assets/images/svg/logo.svg' ?>" width="115"
                                height="84" />
                        </a>
                    </div>
                </div>


                <div class="backdrop" data-backdrop>
                    <div class="right-box ">

                        <nav id="site-navigation" class="main-navigation" data-menu-inner>
                            <ul class="header_nav list">

                                <?php wp_nav_menu([
			       				'menu' => 'Header',
			       				'container' => '',
			       				'items_wrap' => '%3$s'
			       			]) ?>

                            </ul>
                        </nav><!-- #site-navigation -->


                    </div>
                </div>


                <button class="contact-button__mobile" data-open-form>
                    <svg class="" width="15" height="15">
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-white-tel' ?>">
                        </use>
                    </svg>
                </button>
                <button class="contact-button button" data-open-form>Получить консультацию</button>
            </div>

        </header><!-- #masthead -->