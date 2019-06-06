<?php
require_once(get_template_directory().'/model/custom-fields/index.php');
require_once(get_template_directory().'/model/base/pages.php');
require_once(get_template_directory().'/model/base/menu.php');
require_once(get_template_directory().'/model/base/widgets.php');
require_once(get_template_directory().'/model/util.php');

// Registra menus pre defenidos
function register_menu()
{
    register_nav_menus(array(
        'head-menu' => 'Head Menu'
    ));
}
add_action('init', 'register_menu');