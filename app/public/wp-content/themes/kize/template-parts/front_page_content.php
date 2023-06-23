<!--    <div class="col-md-6 front_page_content_block_1">-->
<!--        <h2>Titre h2</h2>-->
<!--        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto eius expedita id pariatur-->
<!--            quaerat quas quidem saepe vel voluptate!</p>-->
<!--        <div class="front_page_content_block_btn">-->
<!--            <a href="#" class="front_page_content_btn">-->
<!--                <p class="">Read more</p>-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!--    <div class="col-md-6 front_page_content_block_2">-->
<!--        <img src="https://images.unsplash.com/photo-1682686578023-dc680e7a3aeb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2670&q=80"-->
<!--             alt="outdoor" class="img-fluid">-->
<!--    </div>-->

<!--        <h2>--><?php //the_field('titre_news_section'); ?><!--</h2>-->
<!--        <p>--><?php //the_field('texte_news_section'); ?><!--</p>-->


<?php $counter = 1; ?>
<?php
$args = array(
    'post_type' => 'services',
    'posts_per_page' => 2
);
$query = new WP_Query($args);

if ($query->have_posts()) {
while ($query->have_posts()) {
$query->the_post();
?>
<div class="front_page_content_container <?php echo $counter % 2 === 0 ? '' : 'row flex-row-reverse' ?> ">
    <div class="col-md-6 front_page_content_block_1">
        <h2><?php the_title(); ?></h2>
        <p>
        </p>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php the_permalink(); ?>">
            <p><a href="<?php the_permalink(); ?>" class="btn btn-primary">Lire la suite</a></p>
        </a>
    </div>
    <div class="col-md-6 front_page_content_block_2">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="osef" style="width: 100%; height: auto">
        </a>
    </div>
    <?php
    $counter++;
    }
    wp_reset_postdata();
    } else {
        echo 'Aucun article trouvé.';
    }
    ?>

</div>
</div>
