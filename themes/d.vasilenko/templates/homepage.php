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


    <!-- section advantages -->
    <?php $section_advantages = get_field('sa_content'); ?>
    <?php get_template_part('section-templates/section-advantages', $name = null, $args = $section_advantages); ?>


    <!-- section reviews -->
    <?php $section_reviews = get_field('sr_content'); ?>
    <?php get_template_part('section-templates/section-reviews', $name = null, $args = $section_reviews); ?>


    <!-- section contact-us -->
    <?php $section_contact_us = get_field('sc_content'); ?>
    <?php get_template_part('section-templates/section-contact-us', $name = null, $args = $section_contact_us); ?>


</main>
<?php

get_footer();