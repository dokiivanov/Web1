<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<title><?php bloginfo('blogname'); ?></title>
		<meta charset="<?php bloginfo('charset'); ?>" />
		<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
		<?php
			if (is_singular()) {
				wp_enqueue_script('comment-reply');
			}
						wp_head();
		?>
	</head>
	<body <?php body_class(); ?>>
		<div id="wrapper">
			<div class="header"><h1><?php bloginfo('blogname'); ?></h1></div>
			<div class="nav"></div>
			<div class="main">