<?php
/**
 * Template part for section-hero content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>

<section class="section-hero">
    <div class="swiper-container mySwiper">
        <ul class="swiper-wrapper">
            <li class="hero-slider-item swiper-slide">

                <div class="container" data-title>
                    <p class="subtitle"><?= $args['subtitle']?></p>
                    <h1 class="hero-title"><?= $args['title']?></h1>
                </div>

                <div class="background layout-1 swiper-lazy" data-background="<?= $args['background-image-1']?>">
                    <div class="swiper-lazy-preloader"></div>
                </div>
                <div class="background layout-2 swiper-lazy" data-background="<?= $args['background-image-2']?>">
                    <div class="swiper-lazy-preloader"></div>
                </div>

            </li>

            <?php foreach ($args['slider_elements'] as $slider) :?>
            <li class="hero-slider-item not-hero-slider swiper-slide">
                <div class="container">
                    <div class="text-container" data-text-container>
                        <div class="subtitle"><?= $slider['subtitle']?></div>
                        <div class="hero-title"><?=$slider['title']?></div>
                        <button class="button hero-button" data-open-form>Подробнее</button>
                        <p class="hero-text"><?= $slider['footer_text']?></p>
                    </div>
                </div>

                <div class="background background-image"
                    style="background-image: url('<?= $slider['background-image']?>')">
                </div>
            </li>
            <?php endforeach;?>
        </ul>
        <div class="swiper-pagination"></div>
    </div>
</section>