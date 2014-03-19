<!DOCTYPE html>
<html>
	<head>
		<title>PHP - Zorigt</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="./cnit132/assets/css/bootstrap.min.css" rel="stylesheet">		
		<link rel="stylesheet" type="text/css" href="./cnit132/assets/css/style.css">
		<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
		<script>window.jQuery || document.write('<script src="./cnit132/js/jquery-1.10.2.min.js"><\/script>')</script>
		<!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	    <![endif]-->
	</head>
	<body>
		<!-- Navbar ================================================================================ -->
		<div id="header"></div>
		<?php include 'header.php'; ?>		
		
		<!-- Carousel ================================================================================ -->
		<!--
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:1st slide" alt="First slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example Headline One.</h1>
							<p>Blah blah blah.</p>
							<p><a class="btn btn-lrg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:2nd slide" alt="Second slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example Headline Two.</h1>
							<p>Yada yada yada.</p>
							<p><a class="btn btn-lrg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
			</div>

			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:3rd slide" alt="Third slide">
					<div class="container">
						<div class="carousel-caption">
							<h1>Example Headline Three.</h1>
							<p>Opps doops deep.</p>
							<p><a class="btn btn-lrg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
		-->
		<!-- Content ================================================================================ -->
		<div class="container marketing">
			<hr class="featurette-divider">
			<div class="row">
				<div class="col-lg-4 text-center">
					<img class="img-circle resize" src="./cnit132/assets/img/zorigt.jpg" alt="Zorigt">
					<h2>Zorigt</h2>
					<p>Hi, so nice to meet you!</p>
				</div>
				<div class="col-lg-4 text-center">
					<img class="img-circle resize" src="./cnit132/assets/img/html5css3.png" alt="Programming">
					<h2>Programming</h2>
					<p>I am learning to become a full stack developer. Currenlty, I am building a web application with Ruby on Rails. It would be nice to get a job as a web application developer to get real world experience.</p>
				</div>
				<div class="col-lg-4 text-center">
					<img class="img-circle resize" src="./cnit132/assets/img/travel.jpg" alt="Hobbies">
					<h2>Hobbies</h2>
					<p>I like to travel. I have been to Brazil, Mexico, Spain, Portugal, Italy, Germany, France, China, Mongolia, Japan. I hope to travel while I work from my laptop.</p>
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
		<?php include 'footer.php'; ?>
		
		<script src="./cnit132/assets/js/bootstrap.min.js"></script>
	</body>
</html>
