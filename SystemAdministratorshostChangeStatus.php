<?php
    require_once "Connection.php";

    $refugeeStatus = null;
    $refugeeId = null;
    $hostName = null;
    if(isset($_GET['refugeeId'])){
        $refugeeId = $_GET['refugeeId'];
    }else{
        echo "ERROR: Refugee ID not set";
    }

    if(isset($_GET['status'])){
        $refugeeStatus = $_GET['status'];
    }else{
        echo "ERROR: Status not set";
    }

    $sql = "UPDATE host SET status=? WHERE hostID=?";
    $stmt = $conn->prepare($sql);
    switch($refugeeStatus){
        case "approved":
            $stmt->bindValue(1,"approved",PDO::PARAM_STR);
            break;
        case "paired":
            $stmt->bindValue(1,"paired",PDO::PARAM_STR);
            break;
        default:
            $stmt->bindValue(1,"pending",PDO::PARAM_STR);
            break;
    }
    $stmt->bindValue(2, (int)$refugeeId, PDO::PARAM_INT);
    $stmt->execute();    
    header('location:SystemAdministratorshostrefugees.php');