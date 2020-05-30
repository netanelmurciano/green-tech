<?php
function setup() {
    // We add new menu
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Navigation', 'sogo' )
    ) );
}

add_action( 'init', 'setup' );

// Adding menu to wp-admin
/*function register_my_menus() {
    register_nav_menus(
        array(
            'new-menu' => __( 'New Menu' ),
            'another-menu' => __( 'Another Menu' ),
            'an-extra-menu' => __( 'An Extra Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
*/