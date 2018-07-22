<?php /* Template Name: About 
* Template Post Type: page
*/ ?>

<?php get_header(); ?>

<h1 id="about-title">
	About Jake Cooke
</h1>
<div id="about-container" class="itemcont">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->

	<img id="about-photo" src="/wp-content/uploads/2018/07/Jake-e1531047202743.jpeg" alt="Dr Jake Cooke" width=300 height=300" />
	<span id="about-text">
		<?php the_content(); ?>
	</span>
	
<?php endwhile; else: ?>
	<p>About Dr Jake Cooke, DC, MChiro, DACNB</p>
<?php endif; ?>

</div>

<div id="columns" class="itemcont">
	<div id="qualifications" class="itemcont">
		<h1 id="qualifications-title">
			Jake Cooke's qualifications
		</h1>
		<div class="qualification-text">
			<?php the_field('qualifications'); ?>
		</div>
	</div>

	<div id="training" class="itemcont">
		<h1 id="training-title">
			Jake Cooke's training
		</h1>
		<div id="training-list">
			<?php the_field('training'); ?>
		</div>
	</div>
</div>



<?php get_footer(); ?>