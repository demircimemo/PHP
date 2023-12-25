<?php
require_once("connect.php");
$CoID = Filter($_GET["id"]);
$HitUpdate = $DbConnect->prepare("UPDATE articles SET impression_count = impression_count+1 WHERE id = ?");
$HitUpdate->execute([$CoID]);
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hit Counts</title>
</head>
<body>
    <table width="1000" border="0" cellpadding="0" cellspacing="0" align="center" > 
            <tr>
                <td align="left"> <h3>Views and Hit Page </h3>  </td>
                <td align="right"> <a href="index.php" > Home   </a></td>
            </tr>
    
    <?php
            $Query  =   $DbConnect->prepare("SELECT * FROM articles WHERE id = ?");
            $Query->execute([$CoID]);
            $Row    = $Query->rowCount();
            $Records   = $Query->fetch(PDO::FETCH_ASSOC);

            if($Row >0){
                ?>
                <tr height="30">
                <td colspan="2" align="left"> <h3><?php echo $Records["article_title"]; ?> </h3>  </td>
                </tr>
                <tr height="30">
                <td colspan="2" align="left"> <?php echo $Records["article_content"]; ?>   </td>
                </tr>
                <tr height="30">
                <td colspan="2" align="center"> This article has been viewed <?php echo $Records["impression_count"]; ?>  times </td>
                </tr>
               <?php
            }else{ 
                    header("Location:index.php");
            }
        
            ?>
            </table>
</body>
</html>
<?php
$DbConnect   = null ;
?>