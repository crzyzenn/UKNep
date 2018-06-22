
$(window).on('load', function(){
	// Disable all active links on navbar
	disable_active_links();

	// Set hide animation status to hide
	var hideEvent = 1;

	// Toggle active classes on the URL clicked
	$('#rv-header').on('click', '.nav-link', function(event){
		// Only prevent button clicks if the button's not home
		if(this.id != "home"){
			event.preventDefault();
		}

		// Reset active classes
		disable_active_links();

		// DIV to go to
		var section = "#" + this.id + "Div"; 

		// Auto scroll to that div
		$('html, body').animate({
		    scrollTop: ($(section).offset().top - 100)
		},500);


		// Set active class to the link clicked
		$(this).closest('li').attr('class', 'nav-item active');
	}); 
		

	// For footer links
	$('.footerLinks').on('click', '.text-muted', function(event){
		// Only prevent button clicks if the button's not home
		if(this.id != "home"){
			event.preventDefault();
		}
		

		// DIV to go to
		var section = "#" + this.id + "Div"; 

		// Auto scroll to that div
		$('html, body').animate({
		    scrollTop: ($(section).offset().top - 100)
		},500);
	}); 	




	var height = 0; 

	$('.thumbnail').hover(function() {


		var elem = $(this).find('.caption'); 
		height = parseInt(elem.find('p').css('height')) + 48;
		// console.log(elem.css('height') + " new = " + height);

		elem.animate({
			height: '100%'},
			200);
	}, function() {		
		var elem = $(this).find('.caption');
		elem.animate({
			height: height},
			500);
	});

	// Show navbar on scroll
	// Navbar visible on scroll
	$(window).scroll(function (event) {
		// Get scroll data
	    var scroll = $(window).scrollTop();	
	  	

	  	// Stay non fixed initially
		if(scroll == 0){
			hideEvent = 1;
			$('#navbar').attr({
	    		class: 'navbar navbar-expand-md navbar-light bg-white navbar-shadow'	    		
	    	});
		}

		// If scrolled show navbar with fixed navbar
		else if (scroll > 0) {	    		 
    		$('#navbar').attr({
    			class: 'navbar navbar-fixed navbar-expand-md navbar-light bg-white navbar-shadow'    		
    		});			    		
	    			
	    }

	    // Scrolled on any area except top, show white navbar
	    else{		    	
	    	$('#navbar').attr({
	    		class: 'navbar navbar-expand-md navbar-light'	    		
	    	});	    	
	    }
	       
	    
	});

	// Disable all active class (indicator) on links
	function disable_active_links(){
		$('.nav-item').each(function(index, el) {				
			$(el).attr('class', 'nav-item');
		});		
	}
}); 
