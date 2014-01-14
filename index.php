<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>BEAST BEATS.COM</title>

	<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!-- sounds -->
        <script type="text/javascript" src="scripts/playSounds.js"></script>
	<!-- Styles -->
	<link rel="stylesheet" type="text/css" href="styles/styles.css"/>

</head>
<body style="background-color:black">
<span id="dummy"></span>
	<div id="container" class="container">
		<ul id="scene" class="scene">
                        
                        
			<li class="layer" data-depth="0.10"><img src="bear_animation/rightear.png"></li>
                        <li class="layer" data-depth="0.10"><img src="bear_animation/leftear.png"></li>
			
			
			<li class="layer" data-depth="1.00"><img src="bear_animation/Layer1.png"></li>
                        <li class="layer" data-depth="0.47"><img src="bear_animation/Layer2.png"></li>
                        <li class="layer" data-depth="0.58"><img src="bear_animation/Layer3.png"></li>
                        
                        <li class="layer" data-depth="0.66"><img src="bear_animation/Layer4.png"></li>
                        <li class="layer" data-depth="1.00">
                            <a id="title" href="frames.php">
                                <img src="bear_animation/mouth_hover.png"
                                    onclick="playSound('bear_animation/bear6.wav');"></a>
                        </li>
                </ul>       
	</div>


	<!-- Scripts -->
	<script src="scripts/jquery.js"></script>
	<script src="deploy/jquery.parallax.js"></script>
        <script type="text/javascript" src="scripts/playSounds.js"></script>
	<script>

	
	$('#scene').parallax();

	</script>

</body>
</html>

