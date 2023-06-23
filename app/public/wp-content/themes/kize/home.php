<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<h2>Tu es dans home.php</h2>

<?php //displayPageContent(get_queried_object_id()) ?>

<?php get_template_part('template-parts/main-title.php'); ?>

<div class="container_article_actu_page">
    <?php get_template_part('loop'); ?>
</div>
<?php get_footer(); ?>

