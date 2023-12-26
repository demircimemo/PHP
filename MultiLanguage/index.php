<?php
session_start();

if(empty($_SESSION["SiteLanguage"])){
    include"langtr.php";
}else{
if($_SESSION["SiteLanguage"] == "TR"){
    include"langtr.php";
}elseif($_SESSION["SiteLanguage"] == "DE"){
    include"langde.php";
}else{
    include"langen.php";
}
}
?>
<!DOCTYPE html>
<html lang="tr-TR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multi Language</title>
</head>
<body>
    <table width="1000" align="center" border="0">
        <tr height="40">
            <td><?php echo ANASAYFA ; ?></td>
            <td><?php echo HAKKIMIZDA ; ?></td>
            <td><?php echo URUNLER ; ?></td>
            <td><?php echo ILETISIM ; ?></td>
            <td><a href="select.php?Language=TR" style="color:black; text-decoration:none;">TR </a>| <a href="select.php?Language=EN" style="color:black; text-decoration:none;">EN </a> | <a href="select.php?Language=DE" style="color:black; text-decoration:none;">DE </a></td>
        </tr>

    </table>
</body>
</html>