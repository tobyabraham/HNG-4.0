<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="hero-image">
		<div class="hero-text">
			<h1>HNG INTERNSHIP <b>4.0</b></h1>
		</div>
		<div class="wrap">
			<div class="date">
	<?php
	 date_default_timezone_set("Africa/Lagos");
	 $currentTime=date('H');
	 echo $currentTime;
	?>
				<p>HOURS</p>
			</div>
			<div class="date">
	<?php
	 date_default_timezone_set("Africa/Lagos");
	 $currentTime=date('i'); 
	 echo $currentTime;
	?>
				<p>MINUTES</p>
			</div>
			<div class="date-third">
	<?php
	 date_default_timezone_set("Africa/Lagos");
	 $currentTime=date('s'); 
	 echo $currentTime;
	?>
				<p>SECONDS</p>
			</div>
		</div>
	<div class="footer"> 
		<?php
	 $currentDate=date('D d M Y'); 
	 echo $currentDate;
	 ?>
	</div>
	</div>
	

</body>
</html>