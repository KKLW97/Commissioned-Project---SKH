<?php 

function skh_theme_files () {
    wp_enqueue_style('header_css', get_theme_file_uri('css/header.css'));
    wp_enqueue_style('index_css', get_theme_file_uri('css/index.css'));
    wp_enqueue_style('footer_css', get_theme_file_uri('css/footer.css'));
    wp_enqueue_style('the_academy_css', get_theme_file_uri('css/the-academy.css'));

}

add_action('wp_enqueue_scripts', 'skh_theme_files');

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
}
add_action('pre_get_posts', 'skh_adjust_queries');

?>