<?php

// Add_theme_support permet l'ajout de fonction wordpress directement sans avoir besoin d'appel
add_theme_support('title-tag');

//déclaration css/js et bootstrap
function kize_register_assets(): void
{

    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css');

    wp_register_script('bootstrap', 'https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-
    q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo', ['pooper', 'jquery'], 1.0, true);
    wp_register_script('pooper', 'https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" 
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1', [], 1.0, true);
    // Déclarer jQuery
    wp_deregister_script('jquery'); // On annule l'inscription du jQuery de WP
    wp_enqueue_script( // On déclare une version plus moderne
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        false,
        '3.3.1',
        true
    );

    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');

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

    // css destiné au block
    wp_enqueue_style(
        'kize_block',
        get_template_directory_uri() . '/ressources/css/block.css',
        array(),
        '1.0'
    );

}

add_action('wp_enqueue_scripts', 'kize_register_assets');

// Déclaration header et footer pour pop dans le BO
function wpbootstrap_after_setup_theme()
{
    // On ajoute un menu
    register_nav_menu('header', "Menu du header");
    register_nav_menu('footer', "Footer");
}

add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');

//custom du header en ajoutant des classes sur des hook précis de wp
function kize_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function kize_menu_class_link($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;

}

add_filter('nav_menu_css_class', 'kize_menu_class');
add_filter('nav_menu_link_attributes', 'kize_menu_class_link');

// Ajoute des thumbnails au BO
add_theme_support('post-thumbnails');

// Utilisation de filtre pour changer le titre du site
function kize_test_filtre()
{
    return 'Fox land';
}

add_filter('bloginfo', 'kize_test_filtre');

// Disable wp gutenberg editor
function disable_gutenberg_editor()
{
    return false;
}

add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

// récupère l'id d'une page grâce à son slug
function get_id_by_slug($page_slug): ?int
{
    // $page_slug = "parent-page"; in case of parent page
    // $page_slug = "parent-page/sub-page"; in case of inner page
    $page = get_page_by_path($page_slug);
    if ($page) {
        return $page->ID;
    } else {
        return null;
    }
}

//test part


function kize_register_post_types()
{
// CPT services ( Il y a de nombreux autres paramètre possible !)
    $labels = array(
        'name' => 'Services',
        'all_items' => 'Tous les services',  // affiché dans le sous menu
        'singular_name' => 'Service',
        'add_new_item' => 'Ajouter un service',
        'edit_item' => 'Modifier un service',
        'menu_name' => 'Services'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'hierarchical' => true, // Définir le CPT comme hiérarchique
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-screenoptions',
    );

    register_post_type('services', $args);
}

add_action('init', 'kize_register_post_types');
