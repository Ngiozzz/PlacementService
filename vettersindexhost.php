<?php

    require_once "Connection.php";

    $sql = "SELECT * FROM host";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $hosts = $stmt->fetchAll();
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
                <td>".$host->status."</td>                <td>
                    <a href='hostChangeStatus.php?refugeeId=".$host->hostID."&status=approved' 
                    class='button button-green button-normal'>Approve</a>
                    <a href='hostChangeStatus.php?refugeeId=".$host->hostID."&status=disapproved' 
                    class='button button-red button-normal'>Disapprove</a>
                    <a href='DeleteHost.php?refugeeId=".$host->hostID."' 
                    class='button button-normal button-black'>Remove</a> 
                 </td>
            </tr>";
        }
    ?>
    </table>
    <a href="vettersindex.php">BACK</a>
</body>
</html>