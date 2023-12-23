<?php
try{
    $DbConnect = new PDO("mysql:host=localhost;dbname=hmd;charset=UTF8","root",""); //database connection clause

}catch(Exception $err){
    echo "Connection Error <br/>". $err->getMessage();
    die();
}

//We filter the incoming value with this function
function Filter($Vale) {
    $stepOne = trim($Vale);  //delete space
    $stepTwo = strip_tags($stepOne);//delete html tags
    $stepThree = htmlspecialchars($stepTwo, ENT_QUOTES); //quotation mark removal
    return $stepThree;
}
?>