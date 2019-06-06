<?php
function custom_menu_head($menu_name) {
    $menu_items = Util::getMenuItems($menu_name);

    foreach ((array) $menu_items as $key => $item) {

        $menu_list .= '<li class="nav-item px-md-4 px-0">';
        $menu_list .= '<a href="'.$item->url.'" '.
                        'class="nav-link" '.
                        'role="button" '.
                        'id="menu-'.$key.'" >';
        $menu_list .= $item->title;
        $menu_list .= '</a>';
        $menu_list .= '</li>';
    }
    
    
    echo $menu_list;
}