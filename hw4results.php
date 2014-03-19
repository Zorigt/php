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
					<h2 class="heading">Homework 4: <span class="text-muted">Loops</span></h2>
						<?php
						$size = $_REQUEST['size'];
						if (!is_numeric($size)) {
							printf('<div class="alert alert-danger">
										<p><strong>Error: </strong>The input size %s is not accpeted. Please enter a number, not a string. Click here to go back.</p>
								 	</div>', $size);
						}
						elseif ($size < 1 || $size > 10) {
							printf('<div class="alert alert-danger">
										<p><strong>Error: </strong>Square table size %s is not accpeted. Please pick a number between 1 and 10. Click here to go back.</p>
								 	</div>', $size);
						}
						else {
							print '<div class="well">';
								echo '<table class="table" style="text-align: center;"><thead><tr>';

								for($column=0; $column <= $size; $column++) {
									if ($column == 0) {
										echo '<th></th>';
									}
									else {
										echo '<th style="text-align: center;">'.$column.'</th>';
									}
								}

								echo '</tr></thead><tbody>';

								for($row=0; $row<$size; $row++) {
									echo '<tr>';
									for($column=0; $column <= $size; $column++) {
										if ($column==0) {
											echo '<td><strong>'.($row+1).'</strong></td>';
										}
										else {
											echo '<td>'.($row+1).' * '.$column.' = '.($row+1)*$column.'</td>';
										}
									}
									echo '</tr>';
								}
								echo '</tbody></table>';
							print '</div>';
						}
						?>
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
