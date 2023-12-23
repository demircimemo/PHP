<?php
require_once("connect.php");


$Selected       = $_POST["selected"];  //values from post
$MergeIDs       = implode(",", $Selected); //merge incoming ids
$IDs            = Filter($MergeIDs); //filter operation

$Del   = $DbConnect->prepare("DELETE FROM wp_posts WHERE id IN($IDs)"); //delete selected ids
$Del->execute();

header("Location:index.php"); //Redirect to the page where the records are located
exit();

/*
$Selected       = $_POST["selected"]; 
foreach ($Selected as $DelId) {
    $DelId = Filter($DelId);
    $Del   = $DbConnect->prepare("DELETE FROM wp_posts WHERE id = ? LIMIT  1");
    $Del -> execute($DelId);    
}
header("Location:index.php"); //Redirect to the page where the records are located
exit();
*/
?>