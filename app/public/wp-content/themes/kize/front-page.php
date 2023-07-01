<?php get_header(); ?>


<div class="frontpage_container">
<!--    <div class="frontpage_sidebar_container">-->
<!--        --><?php //get_sidebar('homepage'); ?>
<!--    </div>-->
    <div class="frontpage_main_container">
<!--        <h1>--><?php //bloginfo('name'); ?><!-- </h1>-->
<!--        <h2>Tu es dans la front-page.php</h2>-->



        <?php get_template_part('template-parts/welcome'); ?>

        <?php get_template_part('template-parts/front_page_news'); ?>

        <?php get_template_part('template-parts/front_page_content'); ?>

        <?php get_template_part('template-parts/front_page_temoignage'); ?>
        <?php get_template_part('template-parts/contact'); ?>


<!--        <a href="--><?php //echo get_post_type_archive_link('post') ?><!--">Voir nos folles actus !</a>-->
    </div>
</div>
<?php get_footer(); ?>
