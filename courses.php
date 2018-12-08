<?php /* Template Name: Courses 
* Template Post Type: post, page
*/ ?>

<?php get_header(); ?>

<h1 id="courses-title">Courses</h1>

<?php if( have_rows('courses') ): ?>

<?php while( have_rows('courses') ): the_row(); ?>
	
<div class="course-block itemcont">
	<h2 class="course-block-title cbt<?php echo get_row_index(); ?>">
		<?php the_sub_field('course_title'); ?>
	</h2>
	<i id="showcourse<?php echo get_row_index(); ?>" class="fas fa-chevron-down showcourse cbt<?php echo get_row_index(); ?>"></i>
	<i id="hidecourse<?php echo get_row_index(); ?>" class="fas fa-chevron-up hidecourse cbt<?php echo get_row_index(); ?>"></i>
	<div id="course-block-content" class="course<?php echo get_row_index(); ?>">
		<span class="course-block-description">
			<?php the_sub_field('course_description')?>
		</span>
		<img class="course-block-image" src="<?php the_sub_field('course_image'); ?>" alt="Image" width=200 height=200>
		<p class="booknow open-contact">Click here to book this course</p>
	</div>
</div>

<?php endwhile; ?>

<?php endif; ?>

<div id="upcoming">
	<h1 id="upcoming-title">Upcoming Courses and Events</h1>
	<?php if( have_rows('upcoming') ): 
	while( have_rows('upcoming') ): the_row(); ?>
		<div class="upcoming-block itemcont">
			<h2 class="upcoming-name">
				<?php the_sub_field('upcoming_title'); ?>
			</h2>
			<p class="upcoming-decription">
				<?php the_sub_field('upcoming_date'); ?>
			</p>
			<?php if(get_sub_field('upcoming_url')): ?>
			<a class="upcoming-link" href="<?php the_sub_field('upcoming_url'); ?>">
				<?php the_sub_field('upcoming_link'); ?>
			</a>
			<?php endif; ?>
			<p class="upcoming-cta open-contact">
				Find out more
			</p>
		</div>	
	<?php endwhile; endif; ?>		
</div>

<div id="price" class="itemcont">
	<h1 id="price-title">
		Prices
	</h1>
	<p id="price-text">
		A one day course counts for 8 hours of CPD
	</p>
	<div id="columns">
		<div id="col1" class="column">
			<p class="price-size">Groups of 2-4 people</p>
			<p class="mobileprice price-list">£200 per person</p>
			<p class="price-size">Groups of 5-6 people</p>
			<p class="mobileprice price-list">£175 per person</p>
			<p class="price-size">Groups of 7 or more people</p>
			<p class="mobileprice price-list">£150 per person</p>
		</div>
		<div id="col2"  class="column">
			<p class="price-list">£200 per person</p>
			<p class="price-list">£175 per person</p>
			<p class="price-list">£150 per person</p>
		</div>
	</div>
	<p id="price-text-after">
		The small group sizes hopefully allow the use of your own clinic as the location for the seminar. If there is not enough space, or your clinic is unsuitable, I am able to organise a location for hire. The cost will be added to the price of the seminar.
		<br><br>
		If you wish to attend a seminar but aren’t able to form a group of sufficient size, please contact me, I may be able to help find a suitable group for you to join.
	</p>
</div>


<?php get_footer(); ?>