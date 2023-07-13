<?php 

function skh_theme_files () {
    wp_enqueue_style('header_css', get_theme_file_uri('css/header.css'));
    wp_enqueue_style('index_css', get_theme_file_uri('css/index.css'));
    wp_enqueue_style('testimonial_css', get_theme_file_uri('css/testimonial.css'));
    wp_enqueue_style('footer_css', get_theme_file_uri('css/footer.css'));
    wp_enqueue_style('general_css', get_theme_file_uri('css/general.css'));
}

add_action('wp_enqueue_scripts', 'skh_theme_files');
?>