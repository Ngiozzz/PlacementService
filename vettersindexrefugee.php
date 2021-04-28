<?php

    require_once "Connection.php";

    $sql = "SELECT * FROM refugee";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $refugees = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta lang="en">
    <meta name="viewport" content="initial-scale=1.0 width=device-width">
    <title>Test</title>
    <link href="app.css?1422585377" rel="stylesheet">
</head>
<body>
    <h1 class="heading-level-1 heading-center">Refugees</h1>
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
                    <a href='ChangeStatus.php?refugeeId=".$refugee->ID."&status=approved' 
                    class='button button-green button-normal'>Approve</a>
                    <a href='ChangeStatus.php?refugeeId=".$refugee->ID."&status=disapproved' 
                    class='button button-red button-normal'>Disapprove</a>
                    <a href='DeleteRefugee.php?refugeeId=".$refugee->ID."' 
                    class='button button-normal button-black'>Remove</a> 
                 </td>
            </tr>";
        }
    ?>
    </table>
</body>
</html>


