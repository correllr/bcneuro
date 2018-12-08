<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
			<meta name="viewport" content="width=device-width">
			<meta name="description" content="Neurology Seminars Tailored Specially for Chiropractors, Physiotherapist and other Primary Care Practicioners"/>
			<title>Bespoke Clinical Neurology Courses and Seminars</title>
			<link rel="icon" href="/wp-content/uploads/2018/08/BCNeuro-e1533214488749.jpg">
			<!-- Google Verification -->
			<meta name="google-site-verification" content="-wXmfMBUa5tB8z28j4XJIAEL_D2xbI8QoTkOUkpQw8Q" />
		
			<?php wp_head(); ?>
			
	<!---------- FONTS ---------->	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Montserrat|Raleway" rel="stylesheet"> 
		
		
	</head>

<body <?php body_class(); ?>> 
<div id="fb-root"></div>
		<!-- Facebook Feed Script -->
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.0&appId=185463458900462&autoLogAppEvents=1';
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));</script>				
			
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
			<img src="/wp-content/uploads/2018/07/BCNeuro.jpg" alt="logo" width="100%" height=true>
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