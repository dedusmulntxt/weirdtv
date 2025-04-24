 <!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<script src="htmx.min.js"></script>
<style>

</style>


</head>
<body>

	

	<!-- <video autoplay class="fade-me-in">
		<source src="videos/frisbee.mp4" type="video/mp4">
		the dang tv broke !!
	</video>  -->

	<div id="videocontainer" hx-get="/getvideo" hx-trigger="load" hx-target="this">
	  <static></static>
	</div>


</body>
</html> 