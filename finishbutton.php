<?php 
	require_once('Connection.php');

	if (isset($_POST['pair'])) {
		$hostID = $_POST['hostID'];
		$hostName = $_POST['hostName'];
		$refugeeID = $_POST['refID'];
		$refugeeName = $_POST['refName'];

		$sql = "INSERT INTO `pairedrefugeeshost`(`hostID`, `hostName`, `ID`, `Name`) VALUES (:hostID, :hostName, :refID, :refName)";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':hostID', $hostID);
		$stmt->bindValue(':hostName', $hostName);
		$stmt->bindValue(':refID', $refugeeID);
		$stmt->bindValue(':refName', $refugeeName);
   		$stmt->execute();
   		header('Location:SystemAdministratorshostrefugees.php');

	}
?>