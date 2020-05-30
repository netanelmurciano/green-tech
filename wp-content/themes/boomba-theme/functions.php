<?php

$libIncludes = array(
    'lib/acf-init.php',
    'lib/extras.php',
    'lib/setup.php',
    'lib/post-type-init.php',
);

//************* Loading Style ********************/
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'bootstrap-min-css', get_stylesheet_directory_uri() . '/src/bootstrap/bootstrap.min.css');
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.min.css', array(), uniqid(), 'all' );
    wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', array() );
    wp_enqueue_style( 'aos-css', get_stylesheet_directory_uri() . '/src/aos/aos.css',  array());
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

//************* Loading Scripts ********************/
function my_theme_enqueue_scripts() {
    if (!is_admin()) {
        wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.5.0.min.js', false);
        wp_enqueue_script('slick', 'https://kenwheeler.github.io/slick/slick/slick.js', false);
        wp_enqueue_script('bootstrap-min-js', get_stylesheet_directory_uri() . '/src/bootstrap/bootstrap.min.js', false);
        wp_enqueue_script('aos-js', get_stylesheet_directory_uri() . '/src/aos/aos.js', false);
        wp_enqueue_script('light-box', 'https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js', false);
    }
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');


//************* Load files from lib directory ********************/
lib_include( $libIncludes );
// Adding settings to wp-admin
function lib_include( $libIncludes ) {
    foreach ( $libIncludes as $file ) {
        if ( ! $filepath = locate_template( $file ) ) {
            trigger_error( sprintf( __( 'Error locating %s for include'), $file ), E_USER_ERROR );
        }
        require_once $filepath;
    }
    unset( $file, $filepath );
}

//************* Loading Custom Post Type ********************/
function boom_register_all(){
    $taxs =  function_exists('custom_post_type') ? custom_post_type() : array();
    foreach ((array)$taxs as $tax){
        boom_register_post_type( $tax );
    }
}
add_action('init', 'boom_register_all');

function boom_register_post_type($args, $label = '') {

    $labels = array(
        'name'               => _x($args['label']),
        'menu_name'          => __($args['label'])
    );

    $defaults = array(
        'public'  => true,
        'show_ui' => true,
        'show_in_nav_menus' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'rewrite' =>array(
            'slug'         =>  $args['label'],
            'with_front'   => true
        ),
        'hierarchical' => true,
        'menu_icon'    => get_template_directory_uri() . '/admin/images/workers.png',
        'supports'     =>  array('title','editor','thumbnail','author'),
        'labels'     =>  $labels
    ) ;

    $args = wp_parse_args($args,$defaults);
    register_post_type( $args['type'],$args);
}


function university_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('professorLandscape', 400, 260, true);
    add_image_size('professorPortrait', 480, 650, true);
    add_image_size('small_image', 390, 220, true);
    add_image_size('projects_image', 762, 429, true);
}

add_action('after_setup_theme', 'university_features');


/*function special_nav_class($classes, $item){
    if( in_array('current-menu-a', $classes) ){
        $classes[] = 'active';
    }
    return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);*/