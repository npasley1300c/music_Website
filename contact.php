<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title>Pa$ley Music: Contact </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
    <link rel="stylesheet" href="css/contact.css">
    <script type="text/javascript" src="js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src= "js/stellar.js"></script>
    <script type="text/javascript" src= "js/script.js"></script>
    <script type="text/javascript" src="js/artwork.js"></script>
</head>

     <!-- Container for Parallax Scrolling-->  
    
    <body id="container" data-type="background"
          data-speed="8">
       <section id="layer1" data-type="background"
               data-speed="8">
        <article id ="layer2" data-type="background" 
               data-speed="6">
            <p id ="layer3" data-type="background" 
               data-speed="4">
                <div id="layer4" data-type="background"
                data-speed="2">
                    <a id="layer5" data-type="background"
                       data-speed="3">
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

