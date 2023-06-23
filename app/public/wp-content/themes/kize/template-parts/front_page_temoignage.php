<div class="front_page_temoignage_container">

    <div class="front_page_temoignage_title">
        <h2><?php the_field('titre_temoignage_section'); ?></h2>
    </div>

    <div class="front_page_temoignage_card_container">
        <div class="front_page_temoignage_card">
<!--            TODO : utiliser des wp get pour trouver les témoignages-->
            <p><strong>Témoignage 1 :</strong> <?php the_field('texte_temoignage_1_section'); ?></p>
            <p><?php the_field('auteur_temoignage_1_section'); ?></p>
            <p><?php the_field('role_temoignage_1_section'); ?></p>
        </div>
        <div class="front_page_temoignage_card">
<!--            TODO : utiliser des wp get pour trouver les témoignages-->
            <p><strong>Témoignage 2 :</strong> <?php the_field('texte_temoignage_2_section'); ?></p>
            <p><?php the_field('auteur_temoignage_2_section'); ?></p>
            <p><?php the_field('role_temoignage_2_section'); ?></p>
        </div>
    </div>
</div>