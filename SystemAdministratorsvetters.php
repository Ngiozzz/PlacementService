<?php 
	require_once('Connection.php');

	$sql = "SELECT * FROM vetter";
	$stmt = $conn->prepare($sql);
    $stmt->execute();
    $vetters = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta lang="en">
    <meta name="viewport" content="initial-scale=1.0 width=device-width">
    <title>Test</title>
    <link rel="stylesheet" type="text/css" href="SystemAdministratorsvetterscss.css">
    <link rel="stylesheet" type="text/css" href="app.css">
    </head>
<body>
	<h1 class="heading-level-1 heading-center">Vetters</h1>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th class="brown">Vetters Name</th>
		</tr>
		<?php 
			foreach ($vetters as $vetter){
            echo "
            <tr>
                <td>".$vetter->vetterID."</td>
                <td>".$vetter->vetterName."</td> 
        	</tr>";
        }
		?>
	</table>
	<a href="registerVetter.php">CREATE NEW VETTER</a>
	<a href="SystemAdministratorsIndex.php">BACK</a>
</body>
</html>