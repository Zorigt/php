<!DOCTYPE html>
<html>
	<head>
		<title>Zorigt</title>
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
		<?php include "header.php"; ?>

		<!-- Content ================================================================================ -->
		<div class="container">
			<hr class="featurette-divider">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<h2 class="heading">Homework 3 : <span class="text-muted">Conditional Statements</span></h2>
					<form class="form-horizontal" role="form" method="GET" action="hw3results.php">
						<div class="form-group">
							<label for="amount" class="col-sm-3 control-label">Background Color</label>
							<div class="col-sm-3">
									<select class="form-control" id="background" name="background">
										<option class="label label-primary">Blue</option>
										<option class="label label-success">Green</option>
										<option class="label label-info">Cyan</option>
										<option class="label label-warning">Orange</option>
										<option class="label label-danger">Red</option>
									</select>
							</div>
						</div>
						<div class="form-group">
							<label for="interest" class="col-sm-3 control-label">Text Color</label>
							<div class="col-sm-3">
									<select class="form-control" id="text" name="text">
										<option class="btn-primary">Blue</option>
										<option class="btn-success">Green</option>
										<option class="btn-info">Cyan</option>
										<option class="btn-warning">Orange</option>
										<option class="btn-danger">Red</option>
									</select>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-2">
								<input type="submit" class="btn btn-primary" value="Submit">
								<!--<button type="submit" class="btn btn-primary">Submit</button>
								-->
							</div>
						</div>
					</form>	
				</div>
				<div class="col-md-2">
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
