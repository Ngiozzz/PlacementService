<?php 
	session_start();
	require_once('Connection.php');
	if(isset($_POST['register']))
	{
		$adminID = $_POST['adminID'];
		$adminName = $_POST['adminName'];

		$sql = "INSERT INTO systemadministrators(adminID, adminName) VALUES (:adminID, :adminName)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':adminID', $adminID);
		$stmt->bindValue(':adminName', $adminName);
   		$stmt->execute();
   		header('location:SystemAdministratorsIndex.php');
   	}

?>