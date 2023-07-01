<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name');
        wp_title('|', true, 'left'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="#">
        <img
                src="https://cdn.icon-icons.com/icons2/2079/PNG/512/japan_mountain_landscape_nature_fuji_landmark_japanese_lake_icon_127292.png"
                alt="logo"
                style="width: 100px; height: 100px">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">

        <div class="header_social_link_container">
            <?php if (!empty(get_field('lien_twitter', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-twitter(1).svg' ?>"
                         alt="twitter icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_facebook', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_facebook', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-facebook(1).svg' ?>"
                         alt="facebook icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_instagram', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_instagram', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-instagram(1).svg' ?>"
                         alt="instagram icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_linkdin', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_linkdin', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-linkedin(1).svg' ?>"
                         alt="linkedin icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_tiktok', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_tiktok', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-tiktok(1).svg' ?>"
                         alt="tik-tok icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_discord', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_discord', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-discord(1).svg' ?>"
                         alt="discord icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_reddit', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_reddit', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-reddit(1).svg' ?>"
                         alt="reddit icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_snap', get_option('page_on_front')))) { ?>
                <a href="<?php the_field('lien_snap', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-snapchat(1).svg' ?>"
                         alt="snapchat icon" class="header_logo">
                </a>
            <?php } ?>
            <?php if (!empty(get_field('lien_pinterest', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_pinterest', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-pinterest(1).svg' ?>"
                         alt="pinterest icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_youtube', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_youtube', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-youtube(1).svg' ?>"
                         alt="youtube icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_whatsapp', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_whatsapp', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-whatsapp(1).svg' ?>"
                         alt="whatsapp icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_tumblr', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_tumblr', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-tumblr.svg' ?>"
                         alt="tumblr icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_telegram', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_telegram', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-telegram-app(1).svg' ?>"
                         alt="telegram-app icon" class="header_logo">
                </a>
            <?php } ?>

            <?php if (!empty(get_field('lien_messenger', get_option('page_on_front')))) { ?>
                <a href="
<?php the_field('lien_messenger', get_option('page_on_front')); ?>" target="_blank"
                   class="header_social_logo">
                    <img src="
<?php echo get_template_directory_uri() . '/asset/icon/social/light_black/icons8-facebook-messenger(1).svg' ?>"
                         alt="facebook-messenger icon" class="header_logo">
                </a>
            <?php } ?>
        </div>


        <?php wp_nav_menu(['theme_location' => 'header',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',
        ]) ?>
    </div>
</nav>


<div class="container">
