<?php
/*
 *  Author: Artur Feldens | @Feldens00
 *  URL: https://github.com/Feldens00 | @Feldens00
 *  Custom functions, support, custom post types and more.
 */

/*------------------------------------*\
    External Modules/Files
\*------------------------------------*/

require_once(get_template_directory().'/model/index.php');

/*------------------------------------*\
    Functions
\*------------------------------------*/



/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions


/*------------------------------------*\
    Theme Support
\*------------------------------------*/

// Add Theme suports
add_theme_support('post-thumbnails'); // Adiciona a imagem de descricao no post
add_theme_support('menus');
add_image_size('large', 700, '', true); 
add_image_size('medium', 250, '', true); 
add_image_size('small', 120, '', true); 
add_image_size('custom-size', 700, 200, true);

/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/