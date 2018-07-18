<?php /* Template Name: About 
* Template Post Type: page
*/ ?>

<?php get_header(); ?>

<h1 id="about-title">
	About Jake Cooke
</h1>
<div id="about-container" class="itemcont">

	<img id="about-photo" src="/wp-content/uploads/2018/07/Jake-e1531047202743.jpeg" alt="Dr Jake Cooke" width=300 height=300" />
	<p id="about-text">
		"I originally qualified from the AECC in 2009 with a Masters in chiropractic with merit. In 2010 I moved to the Netherlands where I attended my first Carrick Institute neurology course. From that point I have been dedicated and relentless in my study of neurology and the understanding of human health. After 300 hours of neurology seminars and one week spent at grand rounds with Professor Carrick in Atlanta, USA, I successfully passed the American Chiropractic Neurology Board exams in 2014. I then returned to the Carrick Brain Center for a further 6 weeks of work experience with some of the leading experts in Functional Neurology.
		<br><br>
		"I returned to England in the beginning of 2015 where I started work with Johan Jeronimus at Neuroworks in Ealing, London. Neuroworks is a dedicated neurological rehabilitation clinic with equipment such as CAPS, VNG, saccadometer and calorics. We treat a range of conditions but peripheral nerve lesions, dizziness and balance issues, headaches and migraines, post-concussion syndromes are our staple work.
		<br><br>
		"I have completed upwards of 600 hours of Carrick institute seminars and 6 weeks at the Carrick Brain Center. The knowledge and experience has been invaluable and has transformed my clinical approach to all patients. It is my goal to make neurology clinically applicable and accessible, enriching both our experience and the patients."
	</p>
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