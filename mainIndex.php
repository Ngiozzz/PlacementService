<?php 
	require_once('Connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Placement Service</title>
	<link rel="stylesheet" type="text/css" href="mainIndexcss.css">
</head>
<body>
	<h1>REFUGEE PLACEMENT SERVICE</h1>
	<div class="navbar">
		<div class="dropdown">
			<button class="dropbtn">
				Register
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<!-- <a href="">Host</a> -->
				<a href="SystemAdministratorsRegister.php">System Administrators</a>
								
			</div>
		</div>
		<div class="dropdown">
			<button class="dropbtn">
				Log In
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<!-- <a href="">Host</a> -->
				<a href="SystemAdministratorsLogIn.php">System Administrators</a>
				<a href="vetterslogin.php">Vetters</a>
			</div>
		</div>		
	</div>
	<div class="mission1">
		<p class="mission">MISSION</p>
		<p>Refugee Placement service seeks to reduce situations of forced displacement by encouraging States and other institutions to create conditions which are conducive to the protection of human rights and the peaceful resolution of disputes. In pursuit of the
same objective, Refugee Placement Service actively seeks to consolidate the reintegration of returning refugees in their country of origin,
thereby averting the recurrence of refugee-producing situations</p>		
	</div>
	<div class="vision1">
		<p class="mission">VISION</p>
		<p>Realizing the full potential of the internet -- universal access to research and education, full participation in culture -- to drive a new era of development, growth, and productivity.</p>		
	</div>

	<div class="pictures">
		<img src="pic-1.jpg" width = 450px height=450px class="pics1">
		<img src="pic-2.jpg"width = 450px height=450px class="pics2">
		<img src="pics-3.jpg"width = 450px height=450px class="pics3">
	</div>


</body>
</html>