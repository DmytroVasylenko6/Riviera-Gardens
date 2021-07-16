<?php
/**
 * Template part for section-advantages content in homepage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package coelix
 */

?>

<section class="section-advantages">
    <div class="container">
        <h2 class="title"><?=$args['title']?></h2>
        <div id="tabs">
            <!-- buttons -->
            <ul class="tabs-nav">
                <?php $i = 1; ?>
                <?php foreach($args['tabs'] as $tab) :?>
                <li><a class="nav-item" href="#tab-<?=$i?>"><?=$tab['tab_name']?></a></li>
                <?php $i++; 
               endforeach; ?>
            </ul>

            <!-- content -->
            <div class="tabs-items">
                <?php $i = 1; ?>
                <?php foreach($args['tabs'] as $tab) :?>
                <div class="tabs-item" id="tab-<?=$i?>">
                    <div class="left-box">
                        <img loading="lazy" src="<?=$tab['image']?>" alt="">
                    </div>
                    <div class="right-box">
                        <h3 class="title"><?=$tab['title']?></h3>
                        <div class="description"><?=$tab['description']?></div>
                    </div>
                </div>
                <?php $i++; 
               endforeach; ?>
            </div>
        </div>
        <button class="contact-button button" data-open-form>Получить консультацию</button>
    </div>
</section>