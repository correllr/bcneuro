<?php /* Template Name: Testimonials 
* Template Post Type: post, page
*/ ?>

<?php get_header(); ?>



<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
?>
<!----------------- THE CONTENT --------------->
<h1 id="testimonials-title">
	<?php the_title(); ?>
</h1>
<div id="testimonials-text" class="itemcont">
	<?php the_content(); ?>
</div>

<?php endwhile; else: ?>
	<p>Testimonials coming soon!</p>
<?php endif; ?>





<?php get_footer(); ?>