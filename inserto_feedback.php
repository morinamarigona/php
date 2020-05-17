<?php
session_start();
require("fq/Konektimi.php");
include("fq/init.php");

//include "delete_cart.php";

$rid=$_SESSION["rid"];
$uid=$_SESSION["id1"];
$feedback=mysqli_real_escape_string($connection, $_POST["feedback"]);
$rating=$_POST["rating"];
$date=date("Y-m-d H:i:s");

$query="INSERT INTO `feedbacks`(`fid`,`rid`,`id`,`feedback`,`rating`,`likes`, `feed_date`) VALUES(NULL,'$rid','$uid','$feedback','$rating','0','$date')";
mysqli_query($connection,$query);

header("Location: Receta.php");

?>