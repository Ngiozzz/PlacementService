<?php

    require_once "Connection.php";

    $sql = "SELECT * FROM host WHERE status = 'approved' OR status = 'paired'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $hosts = $stmt->fetchAll();

    $sql1 = "SELECT * FROM refugee WHERE status = 'approved' OR status = 'paired'";
    $stmt1 = $conn->prepare($sql1);
    $stmt1->execute();
    $refugees = $stmt1->fetchAll();

	$sql2 = "SELECT * FROM pairedrefugeeshost";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $hostsrefugees = $stmt2->fetchAll();

    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <meta name="viewport" content="initial-scale=1.0 width=device-width">

    <title>Test</title>
    <link href="app.css" rel="stylesheet">
</head>
<body>
    <!-- <div class="navbar">
        <div class="dropdown">
            <button class="dropbtn">
                Back
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
                <a href="SystemAdministratorsIndex.php.php">BACK</a>                     
            </div>
        </div>
</div> -->
</body>
<body>

    <h1 class="heading-level-1 heading-center">host</h1>
    <table class="table table-bordered">
        <tr>
        	<th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>National Identification</th>
            <th>Email</th>
            <th>Race</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    <?php
        foreach ($hosts as $host){
            echo "
            <tr>
                <td>".$host->hostID."</td>
                <td>".$host->hostName."</td>
                <td>".$host->Gender."</td>
                <td>".$host->Age."</td>
                <td>".$host->Nationality."</td>
                <td>".$host->NationalIdentification."</td>
                <td>".$host->Email."</td>
                <td>".$host->Race."</td>
                <td>".$host->status."</td> 
                <td>
                	<a href='SystemAdministratorshostChangeStatus.php?refugeeId=".$host->hostID."&status=approved' 
                    class='button button-green button-normal'>Approve</a>

                    <a href='SystemAdministratorshostChangeStatus.php?refugeeId=".$host->hostID."&status=paired' 
                    class='button button-red button-normal'>Pair</a>


                </td>
        	</tr>";
        }
    ?>
	</table>
</body>

<body>
	<h1 class="heading-level-1 heading-center">Refugee</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>National Identification</th>
            <th>Race</th>
            <th>Email</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    <?php
        foreach ($refugees as $refugee){
            echo "
            <tr>
                <td>".$refugee->ID."</td>
                <td>".$refugee->Name."</td>
                <td>".$refugee->Gender."</td>
                <td>".$refugee->Age."</td>
                <td>".$refugee->Nationality."</td>
                <td>".$refugee->NationalIdentification."</td>
                <td>".$refugee->Race."</td>
                <td>".$refugee->Email."</td>
                <td>".$refugee->status."</td>
                <td>
                	<a href='SystemAdministratorsrefugeeChangeStatus.php?refugeeId=".$refugee->ID."&status=approved' 
                    class='button button-green button-normal'>Approve</a>

                    <a href='SystemAdministratorsrefugeeChangeStatus.php?refugeeId=".$refugee->ID."&status=paired' 
                    class='button button-red button-normal'>Pair</a>
                </td>
            </tr>";
        }
    ?>
	</table>

<?php require_once('finishbutton.php'); ?>
<body>
   <form method="POST" action="">
      <div class="main">
         <label>HostID</label>
         <input type="text" name="hostID" id="hostID"><br>
         <br>

         <label>Host Name</label>
         <input type="text" name="hostName" id="hostName"><br>
         <br>

         <label>Refugee ID</label>
         <input type="text" name="refID" id="refID"><br>
         <br>

         <label>Refugee Name</label>
         <input type="text" name="refName" id="refName"><br>
         <br>

         <input type="Submit" name="pair" id="pair" value="Finished">
      </div>
   </form>
</body>

</body>
<body>
	<h1 class="heading-level-1 heading-center">Paired</h1>
	<table class="table table-bordered">
		<tr>
			<th>HostID</th>
			<th>Host Name</th>
			<th>RefugeeID</th>
			<th>Refugee Name</th>
		</tr>
    <?php
        foreach ($hostsrefugees as $hostrefugee){
            echo "
            <tr>
            <td>".$hostrefugee->hostID."</td>
            <td>".$hostrefugee->hostName."</td>
            <td>".$hostrefugee->ID."</td>
            <td>".$hostrefugee->Name."</td>
            </tr>";
        }
    ?>		
	</table>
    <a href="SystemAdministratorsIndex.php">BACK</a>
</body>
</html>