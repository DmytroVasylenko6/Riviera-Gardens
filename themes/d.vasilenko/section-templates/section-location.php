<?php
/**
 * Template part for section-location content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>

<section class="section-location">
    <div class="container">
        <div class="left-box">
            <div class="image-container">
                <img loading="lazy" src="<?= $args['image']?>" alt="photo-riviera-gardens">
            </div>
        </div>
        <div class="right-box">
            <h2 class="title"><?= $args['title']?></h2>
            <p class="subtitle"><?= $args['subtitle']?></p>
            <div class="description"><?= $args['description']?></div>
            <div class="flex-container">
                <div class="flex-item">
                    <span class="text-1"><?= $args['box_1']['text1']?></span>
                    <span class="text-2"><?= $args['box_1']['text2']?></span>
                </div>
                <div class="flex-item">
                    <span class="text-1"><?= $args['box_2']['text1']?></span>
                    <span class="text-2"><?= $args['box_2']['text2']?></span>
                </div>
            </div>
        </div>
    </div>
    <button class="contact-button button js-layouts" style="margin: 0 auto; display: block; margin-top: 60px;"
        data-open-form>Получить
        планировки</button>
</section>