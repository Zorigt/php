<!DOCTYPE html>
<html>
	<head>
		<title>Zorigt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./cnit132/assets/css/bootstrap.min.css" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="./cnit132/assets/css/style.css">
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>window.jQuery || document.write('<script src="./cnit132/js/jquery-1.10.2.min.js"><\/script>')</script>
		<!--[IF lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->

		 <style>
	      	#map-canvas {
	        width: auto;
		    height: 300px;
		    background-color: white;
	      }
	    </style>
	    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
	    <script>


			var san_francisco = new google.maps.LatLng(37.7793, -122.4189);
			var city_hall = new google.maps.LatLng(37.7793427, -122.4189105);
			var marker;
			var map;

			function initialize() {
			  var mapOptions = {
			    zoom: 13,
			    center: san_francisco
			  };

			  map = new google.maps.Map(document.getElementById('map-canvas'),
			          mapOptions);

			  marker = new google.maps.Marker({
			    map:map,
			    draggable:true,
			    animation: google.maps.Animation.DROP,
			    position: city_hall
			  });
			  google.maps.event.addListener(marker, 'click', toggleBounce);
			}

			function toggleBounce() {

			  if (marker.getAnimation() != null) {
			    marker.setAnimation(null);
			  } else {
			    marker.setAnimation(google.maps.Animation.BOUNCE);
			  }
			}

			google.maps.event.addDomListener(window, 'load', initialize);

	    </script>
	</head>
	<body>
		<!-- Navbar ================================================================================ -->
		<div id="header"></div>
		<?php include "header.php"; ?>

		<!-- Content ================================================================================ -->
		<div class="container marketing">
			<hr class="featurette-divider">
			<div class="row featurette">
				<div class="col-md-1">
				</div>
				<div class="col-md-5">
					<h2 class="featurette-heading">Contact Zorigt</h2>
					<p class="well">Duis tristique accumsan elit mattis elementum. Aliquam fermentum dapibus quam, id aliquam purus. Morbi et massa vitae dui posuere condimentum. Suspendisse lectus leo, dapibus eget fringilla ac, convallis sit amet ligula. Donec pharetra tincidunt neque at convallis. Praesent mattis eros ac diam adipiscing egestas. Curabitur congue ullamcorper consectetur. Nulla quis justo nibh.</p>
				</div>
				<div class="col-md-5">
					<div id="map-canvas" class="well"></div>
					<br>
				</div>
				<div class="col-md-1">
				</div>
			</div>
			<hr class="featurette-divider">
		</div>
		
		<!-- Footer -->
		<footer>
			<div class="col-md-6">
				<p class="pull-right">
					<script type="text/javascript">
						var dateModified=document.lastModified;
						mydate=dateModified.slice(0,16);
						document.write("Last Updated: "+mydate);
					</script>
				</p>
			</div>
			<div id="footer"></div>			
		</footer>
		<?php include "footer.php"; ?>

		
		<script src="./cnit132/assets/js/bootstrap.min.js"></script>
	</body>
</html>
