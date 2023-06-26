<?php get_header(); ?>

<h1><?php bloginfo('name'); ?> </h1>
<h2>Tu es dans la front-page.php</h2>


<!--Test appel API -->
<?php

$url = 'https://www.weatherwp.com/api/common/publicWeatherForLocation.php';
$city = 'Crest';
$country = 'France';
$language = 'french';

$queryString = http_build_query([
    'city' => $city,
    'country' => $country,
    'language' => $language
]);

$fullUrl = $url . '?' . $queryString;

$response = file_get_contents($fullUrl);

if ($response === false) {
    // Gérer les erreurs de requête
    echo 'Erreur lors de la requête à l\'API.';
} else {
    // Traiter la réponse JSON
    $weatherData = json_decode($response, true);
//    var_dump($weatherData);
//    die();

    // Utiliser les données météorologiques
    // Exemple d'affichage de la température actuelle
    if (isset($weatherData['temp'])) {
        $currentTemp = $weatherData['temp'];
        echo 'Température actuelle : ' . $currentTemp . '°C';
    } else {
        echo 'Données météorologiques indisponibles.';
    }
}

?>



<?php get_template_part('template-parts/welcome'); ?>
<?php get_template_part('template-parts/front_page_news'); ?>

<?php get_template_part('template-parts/front_page_content'); ?>


<?php get_template_part('template-parts/front_page_temoignage'); ?>
<?php get_template_part('template-parts/contact'); ?>


<a href="<?php echo get_post_type_archive_link('post') ?>">Voir nos folles actus !</a>
<?php get_footer(); ?>
