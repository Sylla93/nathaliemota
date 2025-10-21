<?php

//************** */ STYLE.CSS******************

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'my-theme-style', get_stylesheet_uri()  );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );




// Register a new navigation menu
function add_Main_Nav() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
// Hook to the init action hook, run our navigation menu function
add_action( 'init', 'add_Main_Nav' );
