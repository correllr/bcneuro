<?php get_header(); ?>

<!-- HOME ---->

<div id="frontpage-pitch" class="itemcont">
	<h1 id="frontpage-pitch-text">
			<?php if (have_posts()) : 
				while (have_posts()) : the_post(); ?>		
				
				<?php the_content(); ?>
				
		<?php endwhile;

		else : 
		echo 'Seminars and courses for Chiropractors, Physiotherapists and other Primary Care Providers, teaching neurology for daily use in your clinic';

		endif; ?>
	</h1>
	<a id="frontpage-cta" class="btn" href="/bcneuro/courses-and-prices/">
	Learn More
	</a>
</div>


<!----------------- THE CONTENT --------------->

<div id="frontteam" class="itemcont">
	<h1 id="frontteam-title">
		About BC Neuro
	</h1>
	<div id="frontteam-block">
		<img class="frontteam-img" src="/wp-content/uploads/2018/07/Jake-e1531047202743.jpeg" alt="Name" width=250 height=true />
		<span id="frontteam-text">
			<h2 class="frontteam-name">	Jake Cooke
			</h2>
			<h3 class="frontteam-info">
			MChiro, DACNB
			</h3>
			<p class="frontteam-description">
				<?php the_field('homepage_about_jake') ?>
			</p>
		</span>
	</div>
	<!-- From plugin, allow multiple -->
	
	<a id="frontteam-more" href="/bcneuro/about-bc-neuro/">Read more about Jake here</a>
</div>

<div id="frontspecial-background">
	<div id="frontspecial" class="itemcont">
		<h1 id="frontspecial-title">
		This course is not designed to replace what you currently know or use, but to help you know where and how to best apply your skills and talents.
		</h1>
		<h3 id="frontspecial-text">
		My goal is to provide tailor made neurology seminars for groups of 2-10 people. The material covered will be based on your current level of understanding and the way you practice
		</h3>
	</div>
</div>

<div id="fronttestimonial-background">
	<div id="fronttestimonial" class="itemcont">
		<h1 id="fronttestimonial-title">
		What people say about BCNeuro
		</h1>
		<div id="fronttestimonial-slider">
			<div id="fronttestimonial-slider-text">
					<?php get_template_part('slidebox'); ?>
			</div>
		</div>
	</div>
</div>




<?php get_footer(); ?>