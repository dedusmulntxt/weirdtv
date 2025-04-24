<!DOCTYPE html>
<html>

<head>
<script src="htmx.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css"> 
</head>

<body>

<phone><a href="phone"><img src="img/phone.png" alt="phone image"></a></phone>

<audio id="myAudio">
  <source src="{{ asset('/audio/noise.ogg') }}" type="audio/ogg">
  oh now there is no sound... for we all live underground
</audio>

<tv hx-get="video" hx-trigger="click" hx-target="find toreplace" hx-swap="innerHTML" onclick="playsound()">

	
	<toreplace><div id="videocontainer"><static></static></div></toreplace>


</tv>



<script>
	var sound = document.getElementById("myAudio"); 

	function playsound() {
  		sound.play();
	} 
</script>

</body>
</html> 

</html>