<?php 
	require_once('Connection.php');

	if(isset($_POST['logIn']))
	{
		$adminID = $_POST['adminID'];
		$adminName = $_POST['adminName'];

		$sql = "SELECT adminID FROM systemadministrators WHERE adminID = :adminID";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':adminID', $adminID);
   		$result=$stmt->execute();
   		$result = $stmt->fetch(PDO::FETCH_ASSOC);
   		if($result === false)
   		{
   			echo "You are not in the system";
   		}
   		else
   		{
   			header('Location: SystemAdministratorsIndex.php');
   		}

	}

?>