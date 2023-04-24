<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function modifier_menu_admin( $items, $args ) {
   
    // is_user_logged_in ? is_super_admin ? current_user_can ?
    if(current_user_can('manage_options') && $args->theme_location == 'main_menu'){

        // Création du code + stocké dans variable 
        $admin_item = '<li id="menu-admin" class=""><a href="http://localhost/Planty/wp-admin/" class="menu-link"><span class="text-wrap">Admin</span></a></li>';

        // preg_split() divise $items en un tableau
        $menu_items = preg_split('/<\/li>/', $items);

        // array_splice() insère $admin_item à la deuxième position dans le tableau 
        array_splice($menu_items, 1, 0, array($admin_item));
        
        // implode() convertit le tableau en une chaîne HTML MAJ
        $items = implode('</li>', $menu_items) . '</li>';
    }
    
    return $items;
}

add_filter('wp_nav_menu_items', 'modifier_menu_admin',10,2);


?>