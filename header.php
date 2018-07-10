<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="Neurology Seminars Tailored Specially for Chiropractors, Physiotherapist and other Primary Care Practicioners"/>
			<title><?php echo get_bloginfo('name'); ?></title>
		
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet"> 
		
		
	</head>

<body <?php body_class(); ?>> 
				
			
<!--- SITE HEADER --->
	<header class="site-header">
	<?php if (is_page('Home')) { ?>
	<div id="hero">
		
		<h1 id="hero--title">Bespoke Clinical Neurology Seminars</h1>
		<h2 id="hero--subtitle">Bringing the Seminar to Your Clinic</h2>
		<p id="hero--cta" class="btn open-contact">Book a Seminar</p>
	</div>
	
	<?php } else { ?>
	
		<a id="logo" href="<?php echo home_url(); ?>">
			<img src="/bcneuro/wp-content/uploads/2018/07/BCNeuro.jpg" alt="logo" width="100%" height=true>
		</a>
	<?php } ?>
	
<!--------- Menu --------->
	<div id="mobilemenuopen">
		<i class="fas fa-bars"></i><p>Menu</p>
	</div>	
	
	<div id="mobilemenuclose">
		<i class="fas fa-times"></i>
	</div>
	
		<div id="header-menu">
			<?php
				$args = array(
				'theme_location' => 'primary'
				);
			?>
			<?php wp_nav_menu( $args ); ?>	
			
		</div>
	
	<?php get_template_part('contact'); ?>
	
	
	</header>
<!-- /site-header -->

<div class="container">