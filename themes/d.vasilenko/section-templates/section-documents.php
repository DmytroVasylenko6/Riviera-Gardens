<?php
/**
 * Template part for section-documents content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>

<section class="section-documents" id="documents">
    <div class="container" id="contact-us">
        <h2 class="title"><?= $args['title']?></h2>

        <ul class="documents-list js_documents_gallery">
            <?php $i=0; ?>
            <?php foreach ($args['documents'] as $document) :?>
            <li class="document-item" data-index="<?=$i++ ?>">
                <div class="image-container">
                    <img class="document-image" src="<?= $document['document_image']?>" alt="document-image">
                </div>
                <div class="description-container">
                    <p class="document-decription"><?= $document['document_description']?></p>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
        <button class="button-documents">
            <span class="open">Посмотреть</span>
            <span class="close is-hidden">Cкрыть</span>
        </button>


    </div>
    <div class="lightbox2 js-lightbox2">
        <div class="lightbox2__overlay"></div>

        <div class="lightbox2__content"></div>

        <button type="button" class="lightbox2__button" data-action="close-lightbox2"></button>

        <div class="slider__control slider__control_left" role="button"></div>
        <div class="slider__control slider__control_right" role="button"></div>
    </div>

</section>