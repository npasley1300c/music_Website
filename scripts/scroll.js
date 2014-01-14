/* scroll.js
 * Nieamiah Pasley 
 * Parallax scrolling technique
 */


$(document).ready(function(){
	// Cache the Window object
	$window = $(window);
                
   $('body[data-type="background"]').each(function(){
     var $smokeObj = $(this); // assigning the object
                    
      $(window).scroll(function() {
                    
		// Scroll the background at var speed
		// the yPos is a negative value because we're scrolling it UP!								
		var yPos = -($window.scrollTop() / $smokeObj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$smokeObj.css({ backgroundPosition: coords  });
                
                               
}); // window scroll Ends

 });	

}); 

//adding a new layer	
$(document).ready(function(){
  $window = $(window);
  var $smokeObjTwo = $(this); 
  $('section[data-type="background"]').each(function(){
    
    $(window).scroll(function(){
      
										
		var yPos = ($window.scrollTop() / $smokeObjTwo.data('speed')); 
		
		
		var coords = '50% '+ yPos + 'px';

		
		$smokeObjTwo.css({ backgroundPosition: coords  });
        
    });
      
  });
  
});

