
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
  "http://WWW.W3.org/TR/xhtml11/DTD/XHTML11.DTD">
  

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
  <head>
    <title> NPa$ley Music: Artwork</title>
     
    <link rel="stylesheet" href="css/artwork_parallax.css"> 
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/artwork.js"></script>
  </head>
    
<!-- Container for parallax scrolling-->
    <body id="container" data-type="background"
          data-speed="9">
       <section id="layer1" data-type="background"
               data-speed="4">
        <article id ="layer2" data-type="background" 
               data-speed="3">
            <p id ="layer3" data-type="background" 
               data-speed="2">
                <div id="layer4" data-type="background"
                data-speed="5">
                    <a id="layer5" data-type="background"
                       data-speed="12">
                    </a> 
                </div>
            </p>
                        
        </article>   
      </section>
      
      
      <!--layer1 -->
      <script type="text/javascript">
          $(document).ready(function(){ 
          $window=$(window);
            
           $('body[data-type="background"]').each(function(){
             var $layerOneObj=$(this);
             
	    $(window).scroll(function(){ 
                
               var yValue= -($window.scrollTop()/$layerOneObj.data('speed'));
               var placeImage= '50% ' + yValue + 'px';
               $layerOneObj.css({backgroundPosition:placeImage});
            });
	
      });      
              
       
 });     
      </script>

      
  </body>
</html>
 
