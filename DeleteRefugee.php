<?php

    require_once "Connection.php";

    $refugeeId = null;
    if(isset($_GET['refugeeId'])){
        $refugeeId = $_GET['refugeeId'];
    }else{
        echo "ERROR: Refugee ID not set";
    }

    $sql = "DELETE FROM refugee WHERE ID=?";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(1, (int)$refugeeId, PDO::PARAM_INT);
    $stmt->execute();

    header("location: vettrsindexrefugee.php");