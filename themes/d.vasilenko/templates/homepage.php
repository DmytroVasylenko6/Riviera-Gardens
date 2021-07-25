<?php
/**
* Template Name: Homepage
*
* @package WordPress
* @subpackage Coelix
* @since Coelix 1.0
*/
get_header();

?>
<main>

    <!-- section hero -->
    <?php $section_hero = get_field('sh_content');?>
    <?php get_template_part('section-templates/section-hero', $name = null, $args = $section_hero); ?>


    <!-- section location -->
    <?php $section_location = get_field('sl_content'); ?>
    <?php get_template_part('section-templates/section-location', $name = null, $args = $section_location); ?>

    <section class="background-image-1"
        style="background-image: url('<?= get_field('sb1_content')['background-image']?>')"></section>

    <!-- section advantages -->
    <?php $section_advantages = get_field('sa_content'); ?>
    <?php get_template_part('section-templates/section-advantages', $name = null, $args = $section_advantages); ?>


    <!-- section reviews -->
    <?php $section_reviews = get_field('sr_content'); ?>
    <?php get_template_part('section-templates/section-reviews', $name = null, $args = $section_reviews); ?>

    <section class="background-image-2"
        style="background-image: url('<?= get_field('sb2_content')['background-image']?>')"></section>

    <!-- section documents -->
    <?php $section_documents = get_field('sd_content'); ?>
    <?php get_template_part('section-templates/section-documents', $name = null, $args = $section_documents); ?>

    <!-- section contact-us -->
    <?php $section_contact_us = get_field('sc_content'); ?>
    <?php get_template_part('section-templates/section-contact-us', $name = null, $args = $section_contact_us); ?>

    <div class="call-fixed">
        <div class="text-container" data-text-call>
            <p class="text">У Вас появились вопросы?</p>
            <p class="subtext">Мы перезвоним Вам в самое ближайшее время!</p>
            <button class="button" data-open-form>Оставить номер</button>
        </div>
        <div>
            <span class="call-image" data-open-call>
                <svg class="" width="35" height="35">
                    <use href="<?= get_template_directory_uri().'/assets/images/svg/sprite.svg#icon-white-tel' ?>">
                    </use>
                </svg>

                <span class="pulse-button__rings"></span>
                <span class="pulse-button__rings"></span>
                <span class="pulse-button__rings"></span>
            </span>
        </div>
    </div>

    <div class="lightbox js-lightbox container">
        <div class="lightbox__overlay"></div>

        <div class="lightbox__content">

            <div class="call" data-form-call>
                <button type="button" class="lightbox__button" data-action="close-lightbox"></button>
                <h2 class="title">У вас появились вопросы?</h2>
                <p class="description">Оставьте телефон и мы перезвоним Вам в ближайшее время!</p>
                <?= do_shortcode('[contact-form-7 id="98" title="Contact form call"]') ?>
            </div>
            <div class="layouts" data-form-layouts>
                <button type="button" class="lightbox__button" data-action="close-lightbox"></button>
                <h2 class="title">Получить планировки</h2>
                <p class="description">Оставьте телефон и мы перезвоним Вам в ближайшее время!</p>
                <?= do_shortcode('[contact-form-7 id="152" title="Contact form get layouts"]') ?>
            </div>
        </div>

    </div>

</main>
<?php

get_footer();