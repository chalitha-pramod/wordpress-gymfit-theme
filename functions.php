<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function enqueue_files() {
    wp_enqueue_style("bootstrap",get_template_directory_uri() . "/assets/plugins/bootstrap/css/bootstrap.min.css" , array(), '1' );
    wp_enqueue_style("icofont",get_template_directory_uri() . "/assets/plugins/icofont/icofont.min.css" , array(), '1' );
    wp_enqueue_style("themify-icons",get_template_directory_uri() . "/assets/plugins/themify/css/themify-icons.css" , array(), '1' );
    wp_enqueue_style("animate",get_template_directory_uri() . "/assets/plugins/animate-css/animate.css" , array(), '1' );
    wp_enqueue_style("magnific-popup",get_template_directory_uri() . "/assets/plugins/magnific-popup/dist/magnific-popup.css" , array(), '1' );
    wp_enqueue_style("slick",get_template_directory_uri() . "/assets/plugins/slick-carousel/slick/slick.css" , array(), '1' );
    wp_enqueue_style("slick-theme",get_template_directory_uri() . "/assets/plugins/slick-carousel/slick/slick-theme.css" , array(), '1' );
    wp_enqueue_style("style",get_template_directory_uri() . "/assets/css/style.css" , array(), '1' );


    wp_enqueue_script("jquery", get_template_directory_uri() . "/assets/plugins/jquery/jquery.js" , array(), '1', 'all' );
    wp_enqueue_script("bootstrap", get_template_directory_uri() . "/assets/bootstrap/js/bootstrap.min.js" , array(), '1', 'all' );
    wp_enqueue_script("slick", get_template_directory_uri() . "/assets/plugins/slick-carousel/slick/slick.min.js" , array(), '1', 'all' );
    wp_enqueue_script("jquery.magnific-popup.min.js", get_template_directory_uri() . "/assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js" , array(), '1', 'all' );
    wp_enqueue_script("script", get_template_directory_uri() . "/assets/js/script.js" , array(), '1', 'all' );
    wp_enqueue_script("gmap", get_template_directory_uri() . "/assets/plugins/google-map/gmap.js" , array(), '1', 'all' );
    wp_enqueue_script("jquery-form", "http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js" , array(), '1', 'all' );
    wp_enqueue_script("jquery-validate", "http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js" , array(), '1', 'all' );
    wp_enqueue_script("key", "https://maps.googleapis.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ" , array(), '1', 'all' );
    


}

add_action( 'wp_enqueue_scripts', 'enqueue_files' );



function file_setup(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus( 
        array(
            'primary' => __('Main Menu' , 'gymfit'),
            'footer' => __('Footer Menu' , 'gymfit')
        )
    );
}
add_action('after_setup_theme', 'file_setup' );
    
?>



