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
            <div class="map-container" id="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d685.7867589181154!2d30.831364594582826!3d46.564557584376495!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40c63b1d6635021b%3A0xf578433c523af496!2z0LLRg9C7LiDQp9C10YXQvtCy0LAsINCe0LTQtdGB0YzQutCwINC-0LHQu9Cw0YHRgtGM!5e0!3m2!1sru!2sua!4v1626008664340!5m2!1sru!2sua"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </div>
</section>