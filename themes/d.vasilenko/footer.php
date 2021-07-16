<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package coelix
 */

?>
<?php $footer = get_field('footer_content', 'option') ?>
<footer id="colophon" class="site-footer">
    <div class="container" id="contact-us">
        <div class="left-box">
            <div class="logo-container">
                <a href="<?= home_url()?>" class="logo-link">
                    <img src="<?= get_template_directory_uri().'/assets/images/svg/logo.svg' ?>" width="115"
                        height="84" />
                </a>
            </div>
        </div>

        <div class="right-box ">

            <nav id="site-navigation" class="main-navigation">
                <ul class="header_nav list">

                    <?php wp_nav_menu([
			       				'menu' => 'Header',
			       				'container' => '',
			       				'items_wrap' => '%3$s'
			       			]) ?>

                </ul>
            </nav><!-- #site-navigation -->


        </div>

        <button class="contact-button button" data-open-form>Получить консультацию</button>

    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
</script>
<?php wp_footer(); ?>

</body>

</html>