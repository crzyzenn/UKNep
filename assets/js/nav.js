
$(window).on('load', function(){

	// Show non fixed navbar initially
	$('#navbar').attr({
		class: 'navbar navbar-expand-md navbar-light bg-white navbar-shadow'	    		
	});

	// Set hide animation status to hide
	var hideEvent = 1;

	// Toggle active classes on the URL clicked
	$('#rv-header').on('click', '.dropdown-item', function(event){
		
		// // Prevent some button clicks
		// if(this.id != "director" && this.id != "gallery"){
			event.preventDefault();
		// }

		// if(this.id == "search"){
			
			
		// }

		// if(this.id == "home"){

		// 	// DIV to go to
		// 	var section = "#" + this.id + "Div"; 
		// 	console.log(section);
		// 	try{
		// 		// Auto scroll to that div
		// 		$('html, body').animate({
		// 		    scrollTop: ($(section).offset().top - 100)
		// 		},500);


		// 		// Set active class to the link clicked
		// 		// $(this).closest('li').attr('class', 'nav-item active');	
		// 	}
		// 	catch(err){
		// 		// window.location = "home";
		// 		console.log(err);  
		// 	}
			
		// }
		// else{
		// 	// Reset active classes
		// 	disable_active_links();

		// 	// DIV to go to
		// 	var section = "#" + this.id + "Div"; 
		// 	try{
		// 		// Auto scroll to that div
		// 		$('html, body').animate({
		// 		    scrollTop: ($(section).offset().top - 100)
		// 		},500);


		// 		// Set active class to the link clicked
		// 		$(this).closest('li').attr('class', 'nav-item active');	
		// 	}
		// 	catch(err){
		// 		window.location = "home"; 
		// 	}
		// }	

			disable_active_links();

			var section = "#" + this.id + "Div"; 
			$('html, body').animate({
			    scrollTop: ($(section).offset().top - 100)
			},500);

			$(this).attr("class", "dropdown-item active");


		
		
	}); 
		

	// For footer links
	$('.footerLinks').on('click', '.text-muted', function(event){
		// Only prevent button clicks if the button's not home
		if(this.id != "home" && this.id != "director" && this.id != "gallery"){
			event.preventDefault();
		}
		

		// DIV to go to
		var section = "#" + this.id + "Div"; 


		try{
			// Auto scroll to that div
			$('html, body').animate({
			    scrollTop: ($(section).offset().top - 100)
			},500);	
		}
		catch(err){
			window.location = "home"; 
		}
		
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
		$('.dropdown-item').each(function(index, el) {				
			$(el).attr('class', 'dropdown-item');
		});		
	}


	// Hover action for director's links
	$('.director-link').hover(function() {
		var elem = $(this); 
		elem.attr('class', 'col-sm-3 text-center bg-dark text-muted director-link');
	}, function() {
		var elem = $(this); 
		
		elem.attr('class', 'col-sm-3 text-center bg-light text-muted director-link');
	});




	// Navbar icon rotate
	var toggle = true; 
	$('#toggle').on('click', function(event) {
		console.log(toggle); 	
		if(toggle){
			$(this).contents().filter(".hamburger").attr("class", "hamburger hamburger--3dxy-r is-active"); 
			
			toggle = false; 
		}	
		else{
			$(this).contents().filter(".hamburger").attr("class", "hamburger hamburger--3dxy-r"); 
			toggle = true; 
		}
		
	});

	



    // Popover dismiss when clicked outside of the element
    $(document).on('click', function (e) {
    $('[data-toggle="popover"],[data-original-title]').each(function () {
        //the 'is' for buttons that trigger popups
        //the 'has' for icons within a button that triggers a popup
        if (!$(this).is(e.target) && $(this).has(e.target).length === 0 && $('.popover').has(e.target).length === 0) {                
            (($(this).popover('hide').data('bs.popover')||{}).inState||{}).click = false  // fix for BS 3.3.6
        }

      });
    });




}); 
