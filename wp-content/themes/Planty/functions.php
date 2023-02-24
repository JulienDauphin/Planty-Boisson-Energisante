<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}


function modifier_menu_admin( $items, $args ) {
    if(is_super_admin() && $args->theme_location == 'main_menu'){
    $items .= '<li id="menu-rencontrer" class="menu-item menu-item-type-post_type menu-item-object-page menu-rencontrer">
    <a href="http://localhost/Planty/nous-rencontrer/" class="menu-link"><span class="text-wrap">Nous rencontrer</span></a></li>
    <li id="menu-admin" class="nmr-administrator menu-item menu-item-type-custom menu-item-object-custom menu-item-407">
    <a href="http://localhost/Planty/wp-admin/" class="menu-link"><span class="text-wrap">Admin</span></a></li>
    <li id="menu-commander" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-69">
    <a href="http://localhost/Planty/commander/" class="menu-link"><span class="text-wrap">Commander</span></a></li>';
    }
    else {
        $items .= '<li id="menu-rencontrer" class="menu-item menu-item-type-post_type menu-item-object-page menu-rencontrer">
        <a href="http://localhost/Planty/nous-rencontrer/" class="menu-link"><span class="text-wrap">Nous rencontrer</span></a></li>
        <li id="menu-commander" class="menu-item menu-item-type-post_type menu-item-object-page menu-commander">
        <a href="http://localhost/Planty/commander/" class="menu-link"><span class="text-wrap">Commander</span></a></li>';  
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'modifier_menu_admin',1,2);
?>