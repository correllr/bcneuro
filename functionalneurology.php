<?php /* Template Name: FN Page 
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
			Functional Neurology Links
		</h3>
		<div id="page-column-1-text">
			<?php the_field('fn_links_list'); ?>
		</div>
	</div>
	<div id="page-col2" class="page-column">
		<h3 id="page-column-2-title" class="page-col-title">
			Functional Neurology Courses
		</h3>
		<div id="page-column-2-text">
			<?php the_field('fn_courses_list'); ?>
		</div>
	</div>
	<div id="page-col3" class="page-column">
		<h3 id="page-column-3-title" class="page-col-title">
			Find Functional Neurology Practices in UK
		</h3>
		<div id="page-column-3-text">
			<?php the_field('fn_practices_list'); ?>
		</div>
	</div>
</div>


<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>