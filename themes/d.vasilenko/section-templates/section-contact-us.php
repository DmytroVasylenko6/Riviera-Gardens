<?php
/**
 * Template part for section-contact-us content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>

<section class="section-contact-us">
    <div class="container">
        <div class="left-box">
            <h2><?= $args['title'] ?></h2>
            <?= do_shortcode('[contact-form-7 id="86" title="Contact form footer"]'); ?>
            <div class="contact-info">
                <a class="phone-container" href="tel:<?= $args['phone'] ?>">
                    <svg class="" width="34" height="34">
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-tel' ?>"></use>
                    </svg>
                    <?= $args['phone'] ?></a>

                <a class="email-container" href="mailto:<?= $args['email'] ?>">
                    <svg class="" width="34" height="28">
                        <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-email' ?>">
                        </use>
                    </svg>
                    <?= $args['email'] ?>
                </a>
            </div>
        </div>
        <div class="right-box">
            <div class="map-container" id="map"></div>
        </div>

    </div>
</section>