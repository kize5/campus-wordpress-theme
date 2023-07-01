<?php

// Add_theme_support permet l'ajout de fonction wordpress directement sans avoir besoin d'appel
add_theme_support('title-tag');

//déclaration css/js et bootstrap
function kize_register_assets(): void
{
    // Déclarer le JS
    wp_enqueue_script(
        'kize',
        get_template_directory_uri() . '/ressources/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    wp_enqueue_style( 'bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' );
    wp_enqueue_style( 'my-style', get_template_directory_uri() . '/style.css');

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

//function wpbootstrap_enqueue_styles() {
//
//}
//add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');

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

//test part

require_once 'widgets/cnalps-weather/CNAlpsWeather.php';
function kize_theme_register_sidebars()
{
    register_widget(CNAlpsWeather::class);
    register_sidebar(array(
        'id' => 'homepage',
        'name' => 'Side bar Accueil',
        'description' => 'Side bar accueil',
        'before_widget' => '<div id="%1$s" class="p-4 weather_widget %2$s">',
        'after_widget' => '</div>',
        'before_city' => '<h3 class="widget-city">',
        'after_city' => '</h3>',
        'before_country' => '<h4 class="widget-country">',
        'after_country' => '</h4>'
    ));
    register_sidebar(array(
        'id' => 'footer_widget_slot',
        'name' => 'widget du footer',
        'description' => 'widget footer',
        'before_widget' => '<div id="%1$s" class="p-4 weather_widget %2$s">',
        'after_widget' => '</div>',
        'before_city' => '<h3 class="widget-city">',
        'after_city' => '</h3>',
        'before_country' => '<h4 class="widget-country">',
        'after_country' => '</h4>'
    ));
}

add_action('widgets_init', 'kize_theme_register_sidebars');

// api part
function my_awesome_func()
{

    $statistics = array();

    // Nombre total d'articles
    $statistics['totalPosts'] = wp_count_posts()->publish;

    // Nombre total d'utilisateurs enregistrés
    $statistics['totalUsers'] = count_users()['total_users'];

    // Détails du post le plus récent
    $args = array(
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $recent_posts = get_posts($args);

    if (!empty($recent_posts)) {
        $recent_post = $recent_posts[0];
        $statistics['mostRecentPost'] = array(
            'id' => $recent_post->ID,
            'title' => $recent_post->post_title,
            'views' => get_post_meta($recent_post->ID, 'views', true),
            'likes' => get_post_meta($recent_post->ID, 'likes', true)
        );
    }

    // Liste des articles récents
    $args = array(
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC'
    );
    $recent_posts = get_posts($args);

    $statistics['recentPosts'] = array();
    foreach ($recent_posts as $post) {
        $statistics['recentPosts'][] = array(
            'id' => $post->ID,
            'title' => $post->post_title,
            'date' => $post->post_date
        );
    }

    return $statistics;
}

add_action('rest_api_init', function () {
    register_rest_route('kize/v1', 'test', array(
        'methods' => 'GET',
        'callback' => 'my_awesome_func',
    ));
});

