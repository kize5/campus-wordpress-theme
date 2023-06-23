<div class="contact_container">

    <div class="col-md-6 welcome_block_1">
        <h2><?php the_field('titre_contact_section', get_id_by_slug('contact')); ?></h2>
        <p>
            <?php the_field('adresse_numero_de_voie_contact_section', get_id_by_slug('contact')); ?>
            <?php the_field('adresse_type_de_voie_contact_section', get_id_by_slug('contact')); ?>
            <?php the_field('adresse_nom_de_voie_contact_section', get_id_by_slug('contact')); ?>
            <?php the_field('adresse_code_postal_contact_section', get_id_by_slug('contact')); ?>
            <?php the_field('adresse_nom_de_la_ville_contact_section', get_id_by_slug('contact')); ?>
            <?php the_field('adresse_pays_contact_section', get_id_by_slug('contact')); ?>
        </p>
        <p><?php the_field('telephone_contact_section'); ?></p>
        <a href="mailto:random@random.com"><p><?php the_field('mail_contact_section', get_id_by_slug('contact')); ?></p></a>
        <div class="welcome_block_btn">
            <a href="#" class="welcome_btn">
                <button class="btn btn-primary"><?php the_field('bouton_1_contact_section', get_id_by_slug('contact')); ?></button>
            </a>
            <a href="#" class="welcome_btn">
                <button class="btn btn-secondary"><?php the_field('bouton_2_contact_section_', get_id_by_slug('contact')); ?></button>
            </a>
        </div>
    </div>
    <div class="col-md-6 welcome_block_2">
        <?php echo do_shortcode("[mapengine id='45']"); ?>
    </div>
</div>
