<?php
try { 
    $DbConnect      = new PDO("mysql:host=localhost;dbname=git;charset=UTF8","root",""); 

 } catch (Exception $Err) {
    echo $Err->getMessage();
    die();
 }
 function Filter($Vale) {
    $stepOne = trim($Vale);  //delete space
    $stepTwo = strip_tags($stepOne);//delete html tags
    $stepThree = htmlspecialchars($stepTwo, ENT_QUOTES); //quotation mark removal
    return $stepThree;
}

?>