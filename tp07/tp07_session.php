<?php
session_start();

$_SESSION["isi"] = "informatique et système d’information";
$_SESSION["liste"] = array("ISI", "RT", "GI", "GM", "MTE");

echo "<a href='analyse_superglobales.php'>analyse_superglobales.php</a>";
?>