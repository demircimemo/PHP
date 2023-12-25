<?php
require_once("connect.php");
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
            <tr>
                <td> </td>
            </tr>
            <tr bgcolor="#990000">
                <td align="left" style="color: white";> Articles Title</td>
                <td align="right" style="color: white";>  Count of views   </a></td>

            </tr>
            <?php

            $Query  =   $DbConnect->prepare("SELECT * FROM articles");
            $Query->execute();
            $Row    = $Query->rowCount();
            $Records   = $Query->fetchAll(PDO::FETCH_ASSOC);

            if($Row >0){
                foreach($Records as $Record){
                    ?>
                <tr height="30">
                <td align="left" > <a style="text-decoration:none; color:black;" href="content.php?id=<?php echo $Record ["id"]; ?>"><?php echo $Record ["article_title"]; ?></a></td>
                <td align="right" > <?php echo $Record ["impression_count"]; ?> </a></td>
                </tr>
                    <?php
            }
        }
            ?>
    </table>
    
</body>
</html>