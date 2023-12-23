<?php
require_once("connect.php");

?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Record Delete</title>
</head>
<body>
    <form action="result.php" method="post">
            <table width="500" align="center" border="1">
            <?php
            $Query   = $DbConnect->prepare("SELECT * FROM wp_posts");
            $Query->execute();

            $RecordCount = $Query->rowCount();
            $Counts = $Query->fetchAll(PDO::FETCH_ASSOC);
            foreach($Counts as $Count){
            ?>
            
                <tr>
                    <td><input type="checkbox" name="selected[]" value="<?php echo $Count["ID"]; ?>"></td>
                    <td><?php echo $Count["post_title"] . " | " . $Count["post_status"] ;?></td>

                </tr>


            <?php
            }
            ?>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="selectedDelete"></td>
            </tr>
        </table>
    </form>
    
</body>
</html>