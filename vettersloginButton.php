<?php 
	require_once('Connection.php');

	if(isset($_POST['logIn']))
	{
		$vetterID = $_POST['vetterID'];
		$vetterName = $_POST['vetterName'];

		$sql = "SELECT vetterID FROM vetter WHERE vetterID = :vetterID";
		$stmt = $conn->prepare($sql);
		$stmt->bindValue(':vetterID', $vetterID);
   		$result=$stmt->execute();
   		$result = $stmt->fetch(PDO::FETCH_ASSOC);
   		if($result === false)
   		{
   			echo "You are not in the system";
   		}
   		else
   		{
   			header('Location: vettersIndex.php');
   		}

	}

?>