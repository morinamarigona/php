<?php
session_start();
require("fq/Konektimi.php");


$fid=mysqli_real_escape_string($connection, $_SESSION["fid"]);
$uid=mysqli_real_escape_string($connection, $_SESSION["id"]);
$reply=mysqli_real_escape_string($connection, $_POST["reply"]);
$date=date("Y-m-d H:i:s");

$query="INSERT INTO `replies`(`rid`,`fid`,`uid`,`reply`,`reply_date`) VALUES(NULL,'$fid', '$uid', '$reply', '$date')";
mysqli_query($connection,$query);

header("Location: http://localhost:1234/Projekti/Detajle.php?id=".$_SESSION["item_id"]);

?>