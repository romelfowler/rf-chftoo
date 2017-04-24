<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package CHFtoo
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<!-- custom meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="horizontal menu, microsoft menu, drop-down menu, mega menu, javascript, jquery, simple menu" />
<link rel="shortcut icon" href="../favicon.ico">

<!-- custom styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/font-awesome/css/font-awesome.css" media="screen">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/assets/bootstrap/css/bootstrap.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/default.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory');?>/assets/css/component.css" />
<script src="<?php bloginfo('template_directory');?>/js/modernizr.custom.js"></script>





<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'chftoo' ); ?></a>

	<div class="container">
		<header class="clearfix">
			<span></span>
			<a class="chftoo-logo brand-title" href="http://216.70.80.57/~chftoo">CHFtoo</a>

		</header>



<div class="main">
	<nav id="cbp-hrmenu" class="cbp-hrmenu">




	</nav>
</div>





		</div>
	</div>
