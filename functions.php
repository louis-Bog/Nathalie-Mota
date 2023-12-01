<?php

register_nav_menus( array(
	'main' => 'Menu Principal',
	'footer' => 'Bas de page',
) );



function photographeEvent_register_assets()
{
     // Chargement de la feuille du style du theme parent
     wp_enqueue_style('parent-theme', get_template_directory_uri() . '/style.css');

     // Chargement de la feuille de style complémentaire du thème enfant
     wp_enqueue_style('photographeEvent-child-theme', get_stylesheet_directory_uri() . '/assets/css/theme.css');
}

add_action('wp_enqueue_scripts', 'photographeEvent_register_assets');