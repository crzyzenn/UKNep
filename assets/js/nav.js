
$(window).on('load', function(){

	// Show non fixed navbar initially
	$('#navbar').attr({
		class: 'navbar navbar-expand-md navbar-light bg-white navbar-shadow'	    		
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




    // Go to engagement section onclick
    $('.engagementBtn').on('click', function(event) {
    	event.preventDefault();
    	var section = $('#engagementDiv'); 
    	$('html, body').animate({
    		scrollTop: ($(section).offset().top - 100)},
    		1000);
    });




}); 
