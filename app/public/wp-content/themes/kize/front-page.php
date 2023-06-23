<?php get_header(); ?>

<h1><?php bloginfo('name'); ?> </h1>
<h2>Tu es dans la front-page.php</h2>


<?php get_template_part('template-parts/welcome'); ?>
<?php get_template_part('template-parts/front_page_news'); ?>

<?php get_template_part('template-parts/front_page_content'); ?>


<?php get_template_part('template-parts/front_page_temoignage'); ?>
<?php get_template_part('template-parts/contact'); ?>


<a href="<?php echo get_post_type_archive_link('post') ?>">Voir nos folles actus !</a>
<?php get_footer(); ?>
