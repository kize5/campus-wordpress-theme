<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<h2>Tu es dans archive-services.php</h2>

<div class="container_article_actu_page">
    <?php get_template_part('loop'); ?>
</div>
<?php get_footer(); ?>

