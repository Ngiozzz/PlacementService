<?php 
	session_start();
	require_once('Connection.php');
	if(isset($_POST['register']))
	{
		$vetterID = $_POST['vetID'];
		$vetterName = $_POST['vetName'];

		$sql = "INSERT INTO vetter(vetterID, vetterName) VALUES (:vetID, :vetName)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':vetID', $vetterID);
		$stmt->bindValue(':vetName', $vetterName);
   		$stmt->execute();
   		header('location:SystemAdministratorsvetters.php');
   	}

?>