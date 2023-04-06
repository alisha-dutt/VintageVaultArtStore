<?php
/**
 * The Header
 * This is the template that displays the <head> section 
 */

?>
<!doctype html>
<html <?php language_attributes();  ?>>
	<head>
		<meta charset="<?php bloginfo(show: 'charset'); ?>">
		<meta name ="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<!-- add bootsrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
		<!-- add our custom css file -->		
		<link rel="stylesheet" href="<?php echo esc_url(home_url('wp-content/themes/VintageGallery/assets/css/cmslesson-style.css')); ?>">
		<!-- add our custom font -->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400&display=swap" rel="stylesheet">
</head>
<body <?php body_class();?>>
<header>
	<div class="logo-container">
		<a href="<?php echo esc_url( home_url() ); ?>">
		<img class="logo" src="<?php echo esc_url(home_url('wp-content/uploads/2023/04/sample-logo.png')); ?>" alt="header logo">
		</a>
	</div>
	<nav>
	<?php
	wp_nav_menu(
		array(
			'menu' => 'main',
			'theme_location' => '',
			'depth' => 2,
			'fallback_cb' => false
		)
	);
	?>
	</nav>
</header>