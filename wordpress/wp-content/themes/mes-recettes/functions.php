<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );

function dwwm_enqueue_stylesheets_and_scripts() {
    wp_enqueue_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0');
    wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), '1.0');
}
add_action('wp_enqueue_scripts', 'dwwm_enqueue_stylesheets_and_scripts');

register_nav_menus( array(
    'main' => 'Menu principal',
    'footer' => 'Menu de pied de page',
    'social' => 'Menu des réseaux sociaux'
) );