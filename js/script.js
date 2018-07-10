jQuery( document ).ready(function() {
// After here

//On Page Load
jQuery('.hidecourse').hide();

//MENU 
	// Open
		jQuery('#mobilemenuopen').click(function() {
			jQuery('#mobilemenuopen').css({'display':'hidden'});
			jQuery('#header-menu').fadeIn(500);
			jQuery('#mobilemenuclose').fadeIn(500);
		});
	
	
	// Close
		jQuery('#mobilemenuclose').click(function() {
			jQuery('#header-menu').hide();
			jQuery('#mobilemenuclose').hide();
			jQuery('#mobilemenuopen').fadeIn(800);
		});
	
	

// Show/Hide Contact Page

	// Show
	jQuery('.open-contact').click( function() {
		jQuery('#contact').fadeIn(800);		
	});
	
	
	// Hide
	
	jQuery('#contact-close').click( function() {
		jQuery('#contact').fadeOut(800);		
	});

// Show/Hide Course Content

	// Show
	jQuery('.cbt1').click( function() {
		jQuery('.course1').toggleClass('showflex');
		jQuery('#showcourse1').toggle();
		jQuery('#hidecourse1').toggle();
	});

	jQuery('.cbt2').click( function() {
		jQuery('.course2').toggleClass('showflex');
		jQuery('#showcourse2').toggle();
		jQuery('#hidecourse2').toggle();
	});
	
	jQuery('.cbt3').click( function() {
		jQuery('.course3').toggleClass('showflex');
		jQuery('#showcourse3').toggle();
		jQuery('#hidecourse3').toggle();
	});

	/* Hide
	jQuery('#hidecourse1').click( function() {
		jQuery('.course1').hide();
		jQuery('#showcourse1').show();
		jQuery(this).hide();
	});
	
	jQuery('#hidecourse2').click( function() {
		jQuery('.course2').hide();
		jQuery('#showcourse2').show();
		jQuery(this).hide();
	});
	
	jQuery('#hidecourse3').click( function() {
		jQuery('.course3').hide();
		jQuery('#showcourse3').show();
		jQuery(this).hide();
	});
	*/

//END
});