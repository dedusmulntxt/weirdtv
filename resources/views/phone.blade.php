<!DOCTYPE html>
<html>

<head>
<script src="htmx.min.js"></script>
<link href="css.css" rel="stylesheet" type="text/css"> 
</head>

<body class="phonebody">

<phonehand>
    <speechbubble>
        <div id="bubblebox" hx-get="bubblediag1" hx-trigger="load" hx-target="#toreplace" hx-swap="innerHTML">
            <div id="toreplace"></div>
        </div>
    </speechbubble>
</phonehand>

<script>
	var sound = document.getElementById("myAudio"); 

	function playsound() {
  		sound.play();
	} 
</script>

</body>
</html> 

</html>