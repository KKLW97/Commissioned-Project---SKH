<?php 

function skh_theme_files () {
    wp_enqueue_style('header_css', get_theme_file_uri('css/header.css'));
    wp_enqueue_style('index_css', get_theme_file_uri('css/normalize.css'));
    wp_enqueue_style('course_css', get_theme_file_uri('css/course.css'));
    wp_enqueue_style('testimonial_css', get_theme_file_uri('css/testimonial.css'));
    wp_enqueue_style('footer_css', get_theme_file_uri('css/footer.css'));
    wp_enqueue_style('the_academy_css', get_theme_file_uri('css/the-academy.css'));
    wp_enqueue_style('update_section_css', get_theme_file_uri('css/update-section.css'));
    wp_enqueue_style('general_css', get_theme_file_uri('css/general.css'));
    wp_enqueue_style('academy_css', get_theme_file_uri('css/academy.css'));
    wp_enqueue_style('contact_css', get_theme_file_uri('css/contact.css'));
    wp_enqueue_style('front_page_css', get_theme_file_uri('css/front-page.css'));
    wp_enqueue_style('team_css', get_theme_file_uri('css/team.css'));
    wp_enqueue_style('service_category_css', get_theme_file_uri('css/service-category.css'));
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v6.0.0/css/all.css');
    // wp_enqueue_style('montserrat_font', 'fonts/Montserrat/Montserrat-VariableFont_wght.ttf', false);
}

add_action('wp_enqueue_scripts', 'skh_theme_files');

function skh_javascript_files(){
    wp_enqueue_script('main-skh', get_theme_file_uri('/build/index.js'), array('jquery'), '1.0', false);
    wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . 'src/modules/BurgerMenu.js', array( 'jquery' ) );
}

add_action('wp_enqueue_scripts', 'skh_javascript_files');

function add_google_fonts() {
    wp_enqueue_style('add_google_fonts', '//fonts.googleapis.com/css2?family=Stint+Ultra+Expanded&display=swap', false);
    wp_enqueue_style('adds_pontano_font', '//fonts.googleapis.com/css2?family=Cormorant+Infant:wght@600&family=Montserrat:wght@200&family=Pontano+Sans:wght@300&family=Roboto:wght@100&display=swap', false);
}

add_action('wp_enqueue_scripts', 'add_google_fonts');

function skh_features() {
    add_theme_support('post-thumbnails');
    add_image_size('trainerPortrait', 360, 350, true);
    add_image_size('serviceImage', 400, 400, true);
}

add_action('after_setup_theme', 'skh_features');

function skh_adjust_queries($query){
    if(!is_admin() AND is_post_type_archive('class') AND is_main_query()) {
        $query->set('meta_key', 'class_date');
        $query->set('orderby', 'meta_value_num');
        $query->set('order', 'ASC');
        $query->set('meta_query', array(
            array(
                'key' => 'class_date',
                'compare' => '>=',
                'value' => date('Ymd'),
                'type' => 'numeric'
            )
        ));
    }

    if(!is_admin() AND is_post_type_archive('trainers') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }

    if(!is_admin() AND is_post_type_archive('announcement') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }

    if(!is_admin() AND is_post_type_archive('course') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }

    if(!is_admin() AND is_post_type_archive('services') AND is_main_query()) {
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }

}
add_action('pre_get_posts', 'skh_adjust_queries');

function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

function register_my_menu() {
    register_nav_menu('new-menu',__( 'New Menu' ));
    }
add_action( 'init', 'register_my_menu' );

function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) || in_array('current-menu-ancestor', $classes) ){
            $classes[] = 'active ';
    }
    return $classes;
}
?>