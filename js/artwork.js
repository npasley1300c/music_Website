/* 
 * Author: Nieamiah Pasley
 * Artwork.js
 * Layers for Parallax Scrolling
 */


$(document).ready(function(){
	// Cache the Window object
	$window = $(window);
                
   $('section[data-type="background"]').each(function(){
     var $layerTwoObj = $(this); // assigning the object
                    
      $(window).scroll(function() {
                    
		// Scroll the background at var speed
		// the yPos is a negative value because we're scrolling it UP!								
		var yPos = -($window.scrollTop() / $layerTwoObj.data('speed')); 
		
		// Put together our final background position
		var coords = '50% '+ yPos + 'px';

		// Move the background
		$layerTwoObj.css({ backgroundPosition: coords });
                
                               
       }); // window scroll Ends

   });	

});

    $(document).ready(function(){ 
          $window=$(window);
            
           $('div[data-type="background"]').each(function(){
             var $layerOneObj=$(this);
             
	    $(window).scroll(function(){ 
                
               var yValue= ($window.scrollTop()/$layerOneObj.data('speed'));
               var placeImage= '50% ' + yValue + 'px';
               $layerOneObj.css({backgroundPosition:placeImage});
            });
	
      });      
              
       
 });
 
     $(document).ready(function(){ 
          $window=$(window);
            
           $('p[data-type="background"]').each(function(){
             var $layerOneObj=$(this);
             
	    $(window).scroll(function(){ 
                
               var yValue= -($window.scrollTop()/$layerOneObj.data('speed'));
               var placeImage= '50% ' + yValue + 'px';
               $layerOneObj.css({backgroundPosition:placeImage});
            });
	
      });      
              
       
 });
 
     $(document).ready(function(){ 
          $window=$(window);
            
           $('a[data-type="background"]').each(function(){
             var $layerOneObj=$(this);
             
	    $(window).scroll(function(){ 
                
               var yValue= -($window.scrollTop()/$layerOneObj.data('speed'));
               var placeImage=  '50% '+yValue + 'px';
               $layerOneObj.css({backgroundPosition:placeImage});
            });
	
      });      
              
       
 });
 
     $(document).ready(function(){ 
          $window=$(window);
            
           $('article[data-type="background"]').each(function(){
             var $layerOneObj=$(this);
             
	    $(window).scroll(function(){ 
                
               var yValue= ($window.scrollTop()/$layerOneObj.data('speed'));
               var placeImage= '50% ' + yValue + 'px';
               $layerOneObj.css({backgroundPosition:placeImage});
            });
	
      });      
              
       
 });
 //new layer
 $(document).ready(function(){
     $window=$(window);
     
     ('ol[data-type="background"]').each(function(){
         var $imageLayer= $(this);
         
         $(window).scroll(function(){
             
           var yValue= ($window.scrollTop()/$imageLayer.data('speed'));
           
           var placeImage= '50% ' + yValue + 'px';
           
           $imageLayer.css({backgroundPosition:placeImage});
         
         });
          
     });
     
 });