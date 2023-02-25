<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function modifier_menu_admin( $items, $args ) {
    if(is_super_admin() && $args->theme_location == 'main_menu'){
    $items .= 
    '<li id="menu-admin" class="">
    <a href="http://localhost/Planty/wp-admin/" class="menu-link"><span class="text-wrap">Admin</span></a></li>
    <button id="menu-commander" class="">
    <a href="http://localhost/Planty/commander/">Commander</a></button>';
    }
    else {
        $items .= 
        '<button id="menu-commander" class="">
        <a href="http://localhost/Planty/commander/">Commander</a></button>';  
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'modifier_menu_admin',10,2);
?>