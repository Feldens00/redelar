<?php
if ( !is_user_logged_in() ) {
    Header( "location:wp-admin/" );
}
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/node_modules/@fortawesome/fontawesome-free/js/all.min.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/scripts.js"></script>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<!-- Open graph facebook -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<meta charset="utf-8">
		<meta property="og:locale" content="en_US">
		<meta property="og:url" content="<?php bloginfo('url'); ?>"/>
		<meta property="og:title" content="<?php bloginfo('name'); ?>" />
		<meta property="og:description" content="<?php bloginfo('description'); ?>" />
		<meta property="og:image" content="<?php  echo get_template_directory_uri() . "/screenshot.png"; ?>" />
		<meta property="og:image:type" content="image/png"/>
		<meta property="og:image:width" content="600">
		<meta property="og:image:height" content="234">
		<meta property="og:type" content="website" />
		<!-- /Open graph facebook -->


		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
