<?php

// Add_theme_support permet l'ajout de fonction wordpress directement sansa voir besoin d'appel
add_theme_support('title-tag');

function kize_register_assets(): void
{

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');
    wp_register_script('bootstrap', 'https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo', ['pooper', 'jquery'],1.0, true);
    wp_register_script('pooper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1', [], 1.0, true);

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

    // Déclarer jQuery
    wp_deregister_script('jquery'); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );

    // Déclarer le JS
    wp_enqueue_script(
        'kize',
        get_template_directory_uri() . '/ressources/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

//     Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'kize',
        get_template_directory_uri() . '/ressources/css/main.css',
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'kize_register_assets');

function wpbootstrap_after_setup_theme() {
    // On ajoute un menu
    register_nav_menu('header', "Menu du header");
    register_nav_menu('footer', "Footer");
}

add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');

function kize_menu_class ($classes) {
    $classes[] = 'nav-item';
    return $classes;
}

function kize_menu_class_link ($attrs) {
    $attrs['class'] = 'nav-link';
    return $attrs;

}

add_filter('nav_menu_css_class', 'kize_menu_class');
add_filter('nav_menu_link_attributes', 'kize_menu_class_link');




//test part

function kize_test_filtre () {
    return 'Site tier S';
}

function kize_test_add_pipe () {
    return ' | ';
}

add_filter('bloginfo', 'kize_test_filtre');
add_filter('document_title_separator', 'kize_test_add_pipe');
