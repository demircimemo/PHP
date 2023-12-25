<?php 
require_once("connect.php");
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMD's Vote</title>
</head>
<body>
    <?php
    $VoteQuery = $DbConnect->prepare("SELECT * FROM votes LIMIT 1");
    $VoteQuery->execute();
    $Count = $VoteQuery->rowCount();
    $Record = $VoteQuery->fetch(PDO::FETCH_ASSOC);

    $FirstOpt = $Record["votesone"];
    $SecondOpt = $Record["votestwo"];
    $ThirdOpt = $Record["votesthree"];
    $TotalOpt = $Record["totalvotes"];

    $FirstOptPercent = number_format((($FirstOpt/$TotalOpt)*100),2,",","");
    $SecondOptPercent = number_format((($SecondOpt/$TotalOpt)*100),2,".","");
    $ThirdOptPercent = number_format((($ThirdOpt/$TotalOpt)*100),2,".","");




    if($Count>0){
    ?>
    
            <table width="400" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height ="30">
                <td colspan="2"><b><?php echo $Record["question"] ; ?></b></td>
            </tr>
            <tr height="30">
                <td width="100"> <b>% <?php echo $FirstOptPercent;?></td>
                <td width="300"><?php echo $Record["answerone"] ; ?></td>
            </tr>
            <tr height="30">
                <td width="100"><b>% <?php echo $SecondOptPercent;?></td>
                <td width="300"><?php echo $Record["answertwo"] ; ?></td>
            </tr>
            <tr height="30">
                <td width="100"> <b>% <?php echo $ThirdOptPercent;?></td>
                <td width="300"><?php echo $Record["answerthree"] ; ?></td>
            </tr>

            <tr height ="30">
                <td colspan="2"> <a href="index.php" style="color:red; text-decoration:none;" > <b>HOMEPAGE</b></td>
            </tr>

            </table>

    <?php
    }else{
      
   header("Location:index.php");
   exit();
  }
    ?>
</body>
</html>
<?php
$DbConnect = null ;
?>
    
