<?php
if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
<!--        --><?php //var_dump(get_post_type()); die(); ?>
        <div class="blog-post <?php echo is_singular() ? 'w-90' : 'w-25'; ?>">
            <h2 class="blog-post-title"><?php the_title(); ?></h2>
            <p class="blog-post-meta"><?php the_time('d/m/Y'); ?> par <?php the_author(); ?></p>

            <?php (is_singular()) ? the_content() : the_excerpt(); ?>

            <?php if(!is_singular()) : ?>
            <p>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="osef" style="width: 100%; height: auto">
            </p>
                <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
            <?php endif; ?>
        </div>

    <?php endwhile; ?>

<?php else: ?>
    <p>Aucun article trouvé !</p>

    <div id="pagination">
        <?php echo paginate_links(); ?>
    </div>
<?php endif; ?>