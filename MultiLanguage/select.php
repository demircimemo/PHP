<?php
session_start();

$SelectedLang = $_GET["Language"];
$_SESSION["SiteLanguage"] = $SelectedLang;
header("Location:index.php");
exit();
?>
