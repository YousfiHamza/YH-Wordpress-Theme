<?php

// Register Custom Navigation Walker
require_once get_template_directory() . '/assets/class-wp-bootstrap-navwalker.php';

// Register Nav Menu
register_nav_menus( array(
	'primary' => __( 'Primary Menu', 'inspiratie-by-stephanie' ),
) );

//Enqueue Stylesheet
wp_enqueue_style( 'style', get_stylesheet_uri() );

//For Custom Logo Classes
function add_custom_logo_url() {
    $site_url = site_url();
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf( '<a href="%1$s" class="navbar-brand" rel="home" itemprop="url">%2$s</a>',
            esc_url( $site_url ),
            wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                'class'    => 'img-fluid',
            ) )
        );
    return $html;   
} 
add_filter( 'get_custom_logo', 'add_custom_logo_url' );