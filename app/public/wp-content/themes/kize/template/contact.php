<?php

/*
Template Name: contact
*/

?>


<?php get_header(); ?>

<div class="contact_page_container">
    <h1><?php bloginfo('name'); ?> </h1>
    <h2>Tu es dans la contact.php</h2>
    <div class="contact_page_bloc_container">

            <?php echo do_shortcode("[contact-form-7 id='70']"); ?>

        <div class="contact_page_form_container_bloc2">
            <?php get_template_part('template-parts/contact'); ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>




