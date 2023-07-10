<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head> 
    <body <?php body_class(); ?>>
        <header>
            <div class="header_logo">
              <img src="<?php echo get_theme_file_uri('assets/RoseGoldLogo.jpg'); ?>" alt="SKH logo">
            </div>
            <nav class="nav_bar">
              <ul>
                <li <?php if(is_page('updates')) echo 'class="current_menu_item"' ?>><a href="#">Updates</a></li>
                <li <?php if(is_page('london')) echo 'class="current_menu_item"' ?>><a href="#">London</a></li>
                <li <?php if(is_page('dubai')) echo 'class="current_menu_item"' ?>><a href="#">Dubai</a></li>
                <li <?php if(is_page('shop')) echo 'class="current_menu_item"' ?>><a href="#">Shop</a></li>
                <li <?php if(is_page('team')) echo 'class="current_menu_item"' ?>><a href="#">Team</a></li>
                <li <?php if(is_page('contact')) echo 'class="current_menu_item"' ?>><a href="#">Contact</a></li>
                <li <?php if(is_page('book')) echo 'class="current_menu_item"' ?>><a href="#">Book</a></li>
              </ul>
            </nav>
        </header>
    