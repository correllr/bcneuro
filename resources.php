<?php /* Template Name: Resources 
* Template Post Type: page
*/ ?>

<?php get_header(); ?>

<!--- BASIC PAGES, INCLUDING HOME ---->


<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="page-title">
	<?php the_title(); ?>
</h1>
<h3 id="page-description" class="itemcont">
	<?php the_content(); ?>
</h3>
<div id="page-content" class="itemcont">
	<div id="page-col1"  class="page-column">
		<h3 id="page-column-1-title" class="page-col-title">
			Neurological Examination
		</h3>
		<div id="page-column-1-text">
			<?php the_field('neuro_exam'); ?>
		</div>
	</div>
	<div id="page-col2" class="page-column">
		<h3 id="page-column-2-title" class="page-col-title">
			Neuroscience
		</h3>
		<div id="page-column-2-text">
			<?php the_field('neuroscience'); ?>
		</div>
	</div>
	<div id="page-col3" class="page-column">
		<h3 id="page-column-3-title" class="page-col-title">
			Neuroanatomy and physiology
		</h3>
		<div id="page-column-3-text">
			<?php the_field('neuroanatomy_and_physiology'); ?>
		</div>
	</div>
		<div id="page-col4" class="page-column">
		<h3 id="page-column-4-title" class="page-col-title">
			Neuro-opthalmology
		</h3>
		<div id="page-column-4-text">
			<?php the_field('neuro-opthalmology'); ?>
		</div>
	</div>
	<div id="page-col5" class="page-column">
		<h3 id="page-column-5-title" class="page-col-title">
			Vestibular System
		</h3>
		<div id="page-column-5-text">
			<?php the_field('vestibular_system'); ?>
		</div>
	</div>
	<div id="page-col6" class="page-column">
		<h3 id="page-column-6-title" class="page-col-title">
			Reading List
		</h3>
		<div id="page-column-6-text">
			<?php the_field('reading_list'); ?>
		</div>
	</div>
</div>
<div>
<div id="page-image">
		<?php 
			if (has_post_thumbnail() ) {
			the_post_thumbnail();}
		?>
</div>

<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>