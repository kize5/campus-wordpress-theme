
<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>
<h2>Tu es dans page.php</h2>

<?php if (bloginfo('name') === 'contact') {
} ?>

<?php get_template_part('loop'); ?>

<?php get_footer(); ?>

