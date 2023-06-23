<div class="welcome_block row">
    <div class="col-md-6 welcome_block_1">
        <h1><?php the_field('titre_du_welcome'); ?></h1>
        <p><?php the_field('text_du_welcome'); ?></p>
        <div class="welcome_block_btn">
            <a href="#" class="welcome_btn">
                <button class="btn btn-primary">btn 1</button>
            </a>
            <a href="#" class="welcome_btn">
                <button class="btn btn-secondary">btn 2</button>
            </a>
        </div>
    </div>
    <div class="col-md-6 welcome_block_2">
        <?php $image = get_field('welcome_img_link'); ?>
        <?php echo wp_get_attachment_image($image, 'large', false, ['class' => 'welcome_img']); ?>
    </div>
</div>
