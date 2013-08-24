<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/reset.css" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/grid.css" type="text/css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/screen.css" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Noticia+Text:400,400italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:800,400' rel='stylesheet' type='text/css'>  <script type="text/javascript" charset="utf-8" src="respond.min.js"></script>
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="container_5">  <!-- Header --> 
		<div class="head">
			<div class="grid_3 logo">
			<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/logo.jpg"></a>
			</div>
			<div class="grid_2 alpha omega">
				<div class="recherche">
	        <input type="text" value="Recherche" name="s" id="s" onfocus="this.value==this.defaultValue?this.value='':null"/>
	        <!-- <input type="submit" id="searchsubmit" value=">" /> -->
				</div>
				<div class="clear"></div>
				<div class="menu">
					<ul>
						<li><a href="#">Articles</a></li>
						<li><a href="#">Brèves</a></li>
						<li><a href="#">Contribuer</a></li>
						<li><a href="#">À propos</a></li>
						<li><a href="#">S'abonner</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
	