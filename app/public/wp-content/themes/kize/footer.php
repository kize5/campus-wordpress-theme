<?php wp_footer() ?>
</div>
<br>
<div class="footer_container">
    <img src="https://cdn.icon-icons.com/icons2/2079/PNG/512/japan_mountain_landscape_nature_fuji_landmark_japanese_lake_icon_127292.png"
         alt="logo"
    style="width: 100px; height: 100px">

    <div class="footer_page_link_container">
        <a href="<?php echo get_permalink('http://localhost:10004/actualites'); ?>" class="footer_page_link">Actualité</a>
        <a href="<?php echo get_permalink('http://localhost:10004/'); ?>" class="footer_page_link">Lien 2</a>
        <a href="<?php echo get_permalink('http://localhost:10004/'); ?>" class="footer_page_link">lien 3</a>
    </div>

<!--    <div class="footer_social_link_container">-->
<!--                    <a href="--><?php //the_field('lien_twitter', get_option('page_on_front')); ?><!--" target="_blank" class="footer_social_logo">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/asset/icon/social/twitter.png' ?><!--" alt="twitter icon" class="footer_logo">-->
<!--            </a>-->
<!--            <a href="--><?php //the_field('lien_twitter', get_option('page_on_front')); ?><!--" target="_blank" class="footer_social_logo">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/asset/icon/social/facebook.png' ?><!--" alt="facebook icon" class="footer_logo">-->
<!--            </a>-->
<!--            <a href="--><?php //the_field('lien_twitter', get_option('page_on_front')); ?><!--" target="_blank" class="footer_social_logo">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/asset/icon/social/instagram.png' ?><!--" alt="instagram icon" class="footer_logo">-->
<!--            </a>-->
<!--            <a href="--><?php //the_field('lien_twitter', get_option('page_on_front')); ?><!--" target="_blank" class="footer_social_logo">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/asset/icon/social/linkedin.png' ?><!--" alt="linkedin icon" class="footer_logo">-->
<!--            </a>-->
<!--            <a href="--><?php //the_field('lien_twitter', get_option('page_on_front')); ?><!--" target="_blank" class="footer_social_logo">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/asset/icon/social/tik-tok.png' ?><!--" alt="tik-tok icon" class="footer_logo">-->
<!--            </a>-->
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

<!--    <div class="frontpage_sidebar_container">-->
<!--        --><?php //get_sidebar('footer_widget_slot.php'); ?>
<!--    </div>-->

    <div>
        <?php wp_nav_menu(['theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',
        ]) ?>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>