<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
	
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php $template_directory_uri = get_template_directory_uri(); ?>
<link rel="stylesheet" href="<?php echo $template_directory_uri; ?>/assets/css/responsive.css">
<?php wp_head(); ?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>
<body>


<header>

	<div id="logo"><a href="<?php bloginfo('url'); ?>"><img src="<?php echo $template_directory_uri; ?>/assets/images/logo.png" alt=""></a></div>	
	<input type="checkbox" id="menu-activado" >
	<?php wp_nav_menu( array(
	'theme_location' => 'menu-top-logo',
	'container_class' =>'top-logo'
));
?>

<?php //echo do_shortcode('[supsystic-social-sharing id="1"]');
		//echo do_shortcode('[prisna-social-counter "]');
		//echo do_shortcode( ' [aps-get-count social_media="twitter"]' ); 
get_sidebar('social');?>		
<label for="menu-activado" class="menu-icono">&#9776</label>
</header>
<?php
/*
wp_nav_menu( array(
	'theme_location' => 'menu-top',
	'container_class' =>'menu-header'
));*/
?>



