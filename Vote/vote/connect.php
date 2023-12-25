<?php 
try{
$DbConnect = new PDO("mysql:host=localhost;dbname=vote;charset=UTF8","root","");
}catch(PDOException $Err){
    echo $Err->getMessage();
    die();
}
function Filter($Value){
    $StepOne    = trim($Value);
    $StepTwo = strip_tags($StepOne);
    $StepThree = htmlspecialchars($StepTwo, ENT_QUOTES);
    return $StepThree;
}
$IpAdress = $_SERVER["REMOTE_ADDR"];
$TimeStamp = time();
$votesQuota = 86400;
$BackTime = $TimeStamp - $votesQuota;
?>