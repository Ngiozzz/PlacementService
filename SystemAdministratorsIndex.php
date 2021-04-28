<?php 
	require_once("Connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Placement Service</title>
	<link rel="stylesheet" type="text/css" href="SystemAdministratorsIndexcss.css?1422585377">
</head>
<body>
	<h1>REFUGEE PLACEMENT SERVICE</h1>
	<div class="navbar">
		<div class="dropdown">
			<button class="dropbtn">
				LogOut
				<i class="fa fa-caret-down"></i>
			</button>
			<div class="dropdown-content">
				<a href="mainIndex.php">Log Out</a>						
			</div>
		</div>
</div>
	<div class="pictures">
		<img src="pic-1.jpg" width = 500px height=500px class="pics1">
		<a href="SystemAdministratorshostrefugees.php">Hosts/Refugees</a>
		<img src="pic-2.jpg" width = 500px height=500px class="pics2">
		<a href="SystemAdministratorsvetters.php">Vetters</a>

	</div>
</body>
</html>
