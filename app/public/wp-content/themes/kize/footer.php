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

    <div class="footer_social_link_container">
                    <a href="<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank" class="footer_social_logo">
                <img src="<?php echo get_template_directory_uri() . '/asset/icon/social/twitter.png' ?>" alt="twitter icon" class="footer_logo">
            </a>
            <a href="<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank" class="footer_social_logo">
                <img src="<?php echo get_template_directory_uri() . '/asset/icon/social/facebook.png' ?>" alt="facebook icon" class="footer_logo">
            </a>
            <a href="<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank" class="footer_social_logo">
                <img src="<?php echo get_template_directory_uri() . '/asset/icon/social/instagram.png' ?>" alt="instagram icon" class="footer_logo">
            </a>
            <a href="<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank" class="footer_social_logo">
                <img src="<?php echo get_template_directory_uri() . '/asset/icon/social/linkedin.png' ?>" alt="linkedin icon" class="footer_logo">
            </a>
            <a href="<?php the_field('lien_twitter', get_option('page_on_front')); ?>" target="_blank" class="footer_social_logo">
                <img src="<?php echo get_template_directory_uri() . '/asset/icon/social/tik-tok.png' ?>" alt="tik-tok icon" class="footer_logo">
            </a>
<!--        façon de faire le lien avec ACF-->
<!--        <p><a href="--><?php //the_field('lien_twitch', 17); ?><!--" target="_blank">Twitch</a></p>-->
    </div>



    <div>
        <?php wp_nav_menu(['theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto',
        ]) ?>
    </div>
</div>
</body>
</html>