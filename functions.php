<?php
function mychildtheme_enqueue_styles() {
    $parent_style = 'parent-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'mychildtheme_enqueue_styles' );

// Enqueue child them js file
function child_theme_js() {
  wp_enqueue_script( 'child-theme-js' , get_stylesheet_directory_uri() . '/child-theme-js.js' , array( 'twentyseventeen-global' ) , false , true );
}
add_action( 'wp_enqueue_scripts', 'child_theme_js' );
?>
