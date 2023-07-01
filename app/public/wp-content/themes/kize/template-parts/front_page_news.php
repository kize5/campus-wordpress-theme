<div class="front_page_news_container">

    <h2><?php the_field('titre_news_section'); ?></h2>
    <p class="txt_news_section"><?php the_field('texte_news_section'); ?></p>

    <div class="front_page_news_card_container">
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 3
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                ?>
                <div class="front_page_news_card">
                    <a class="front_page_news_card_content" href="<?php the_permalink(); ?>">
                        <div class="front_page_news_card_content_title">
                            <h2><?php the_title(); ?></h2>
                        </div>
                        <div class="front_page_news_card_content_img">
                            <p >
                                <img class="front_page_news_image" src="<?php the_post_thumbnail_url(); ?>" alt="osef">
                            </p>
                        </div>
                        <div class="front_page_news_card_content_excerpt">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <div class="front_page_news_card_content_button">
                            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
                        </div>
                    </a>
                </div>
                <?php
            }
            wp_reset_postdata();
        } else {
            echo 'Aucun article trouvé.';
        }
        ?>

    </div>


</div>