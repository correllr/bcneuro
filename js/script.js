jQuery( document ).ready(function() {
// After here

//On Page Load
jQuery('.hidecourse').hide();

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
	jQuery('#showcourse1').click( function() {
		jQuery('.course1').css({'display':'flex'});
		jQuery('#showcourse1').hide();
		jQuery('#hidecourse1').show();
	});

	jQuery('#showcourse2').click( function() {
		jQuery('.course2').css({'display':'flex'});
		jQuery('#showcourse2').hide();
		jQuery('#hidecourse2').show();
	});
	
	jQuery('#showcourse3').click( function() {
		jQuery('.course3').css({'display':'flex'});
		jQuery('#showcourse3').hide();
		jQuery('#hidecourse3').show();
	});

	// Hide
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


//END
});