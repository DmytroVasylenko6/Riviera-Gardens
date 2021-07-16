<?php
/**
 * Template part for section-reviews content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>


<section class="section-reviews">
    <div class="container">
        <h2 class="title"><?=$args['title']?></h2>
        <ul class="reviews-list js-reviews-slider">

            <?php foreach ($args['review'] as $review) :?>
            <li class="review-item">
                <div class="info-author">
                    <img loading="lazy" class="avatar-image" src="<?= $review['avatar']?>" alt="author-avatar"
                        width="66" height="66">
                    <div>
                        <p class="name-author"><?= $review['name_author']?></p>
                        <div class="raiting">
                            <?php for ($i = 1; $i <= $review['star_count']; $i++) {
                               echo '<span class="star-icon"></span>';
                            } ?>
                        </div>
                    </div>
                </div>
                <div class="review-content"><?= $review['reviews_text']?></div>
            </li>
            <?php endforeach;?>

        </ul>
    </div>
</section>