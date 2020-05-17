<?php
session_start();
$con=mysqli_connect("localhost:3306","root","flakron","dbprojekti");
//mysqli_select_db("dbprojekti");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email=mysqli_escape_string($con,$_POST['email']);
	$password=mysqli_escape_string($con,$_POST['password']);
	echo $email;
	
	echo "<br>";
    $password1=md5($password);
	echo $password1;
	$sql = "SELECT * FROM dbprojekti where email='$email' AND password='$password1'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$active=$row['active'];
	$count = mysqli_num_rows($result);
	//echo "<br>nr". $sql;
	if($count==1)
	{
		$_SESSION['email']=$email;
		echo "Logged in";
	}
	else
	{
		echo "<b>ERROR</b>";
	}
	}


?>