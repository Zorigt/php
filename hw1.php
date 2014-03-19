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
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<h2 class="heading">Homework 1: <span class="text-muted">Copy of Basic Example</span></h2>
					
					<div class="well">				
<?php 
 $hoursWorked = 40; 
 $payRate = 12;
 $grossPay = $hoursWorked * $payRate; 
 
 print "<p>Hours Worked: $hoursWorked</p>";
 print "<p>Pay Rate: $payRate</p>"; 
 print "<p>Gross Pay: $grossPay</p>"; 
?>			
					</div>
				</div>
				<div class="col-md-3">
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
