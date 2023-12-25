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
    if($Count>0){
    ?>
    <form action="vote.php" method="post">
            <table width="400" align="center" border="0" cellpadding="0" cellspacing="0">
            <tr height ="30">
                <td colspan="2"><b><?php echo $Record["question"] ; ?></b></td>
            </tr>
            <tr height="30">
                <td width="50"><input type="radio" name="answer" value="1"></td>
                <td width="350"><?php echo $Record["answerone"] ; ?></td>
            </tr>
            <tr height="30">
                <td width="50"><input type="radio" name="answer" value="2"></td>
                <td width="350"><?php echo $Record["answertwo"] ; ?></td>
            </tr>
            <tr height="30">
                <td width="50"><input type="radio" name="answer" value="3"></td>
                <td width="350"><?php echo $Record["answerthree"] ; ?></td>
            </tr>
            <tr height ="30">
                <td colspan="2"> <input type="submit" value="Send Vote"> </td>
            </tr>
            <tr height ="30">
                <td colspan="2"> <a href="results.php" style="color:red; text-decoration:none;" > <b>Results</b></td>
            </tr>

            </table>
    </form>
    <?php
    }else{
        ?>
    No Survey Conducted Yet... 
    <?php }
    ?>
</body>
</html>
<?php
$DbConnect = null ;
?>