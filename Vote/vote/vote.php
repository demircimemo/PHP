<?php
require_once("connect.php");

$PostValue = Filter($_POST["answer"]);

$Control    = $DbConnect->prepare("SELECT * FROM voters WHERE ip_adress = ? AND date_ >= ?");
$Control->execute([$IpAdress, $BackTime]);
$ControlNum = $Control->rowCount();

if($ControlNum>0){
    echo "ERROR: <br/>";
    echo "You have already voted today. Please try again after 24 hours. <br/>";
    echo "Click to Return <a href='index.php'> HOMEPAGE</a>";
}else{
    if($PostValue == 1){
        $Update = $DbConnect->prepare("UPDATE votes SET votesone = votesone+1, totalvotes = totalvotes+1");
        $Update->execute();
    }elseif($PostValue == 2){   
        $Update = $DbConnect->prepare("UPDATE votes SET votestwo = votestwo+1, totalvotes = totalvotes+1");
        $Update->execute();
    } elseif($PostValue == 3){
        $Update = $DbConnect->prepare("UPDATE votes SET votesthree = votesthree+1, totalvotes = totalvotes+1");
        $Update->execute();
    }else{
        echo "ERROR :<br/>";
        echo "Answer record not found. <br/>";
        echo "Click to Return <a href='index.php'> HOMEPAGE</a>";
    }

    $Insert = $DbConnect->prepare("INSERT INTO voters(ip_adress, date_) values(?, ?)");
    $Insert->execute([$IpAdress,$TimeStamp]);
    $InsertControl = $Insert->rowCount();

    if($InsertControl> 0){
        echo "THANKS :<br/>";
        echo "Your vote has been recorded. <br/>";
        echo "Click to Return <a href='index.php'> HOMEPAGE</a>";

    }else{
        echo "ERROR :<br/>";
        echo "Unexpected Error Occurred While Voting. <br/>";
        echo "Click to Return <a href='index.php'> HOMEPAGE</a>";
     
    }
}
$DbConnect = null ;
?>



