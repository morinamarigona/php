<div id="Baking"  >
<hr style="margin-top:3%;width:80%;margin-left:10%;">
<a href="home.php">
<img  style="width:80%;height:17%;margin-left:10%;"src="foto/header_title.gif"></a>
</div>

<div class="menu" style="background-color: #fce8e8;color:grey;"><ul><li ><a href="home.php" style="text-decoration:none;background-color:#fce8e8;color:grey;"> Home</a></li>
<li><a href="Receta.php" style="background-color:#fce8e8;color:grey;text-decoration:none;">Receta</a></li>
<!--<ul><li><a  onclick="showCat(1)" id='1' style="color:white;" >-Gjelle kryesore </a></li>
<li><a style="color:white;">-Dreke</a ></li>
<li><a  style="color:white;">-Pica</a></li>
<li><a  style="color:white;">-Mengjes</a ></li>
<li><a  style="color:white;">-Cake</a></li>
<li><a style="color:white;">-Coko</a></li>
<li><a  style="color:white;">-Healthy</a></li></ul></li>-->
<li><a href="Galery.php"style="background-color:#fce8e8;color:grey;text-decoration:none;">Galery</a></li>
<li><a style="background-color:#fce8e8;color:grey;text-decoration:none;" href="Kontakt.php">-Kontakti</a></li>
<li><a href="user_info.php" style='color:grey;background-color:#fce8e8;text-decoration:none;'>User info</a></li></ul></div>


<?php
include('fq/init.php');
//include("fq/header.php");
include("fq/prov1.php");



/*if(user_exists('flakron')===true)
{
echo 'exist';
}*/
//echo "exist";
//echo user_exists('flakron');
echo "<p style='background-color:#fce8e8;color:grey;width:80%;margin-left:10%;height:7.1%;font-size:30px;font-variant: small-caps;'>";
if(empty($_POST)===false)
{
	$username=$_POST['username1'];
	$password=$_POST['passwordi'];
	$password1=$_POST['passwordi1'];
	
	//echo $email . " " . $password . " ". $password1;
	if(empty($username) === true || empty($password) ===true || empty($password1)===true)
	{
		$errors[] = "Ploteso te gjitha fushat!!!";
	}
	else 
		if(user_exists($username)===false)
		{
			$errors[] = "Nuk mund te gjejme user me kete username.A jeni i regjistruar?";
			
		}
		else 
			if(user_active($username)===false)
		{
			$errors[] = "Nuk e keni aktivizuar acountin tuaj!!!";
			
		}
		else
			if($password !== $password1)
			{
				$errors[] ="Keni konfirmuar passwordin gabimisht!!!";
				
			}
			else
				if(login($username,$password) === false)
			         {
				        $errors[] = "Keni gabuar passwordin!!!";
			         }
			         else
					 {
						 
			         $_SESSION['id']=login($username,$password);
					 $_SESSION['emri']=$username;
					 //$_SESSION['password']=$password;
			         header("Location: home.php");
					 
					 }
		output_errors($errors);
	
}
echo "</p>";
?>
<div style="float:left;margin-left:10%;margin-top:9.5%;width:20%;height:99%;background-color:pink;"><br></br>
<span Style="color:white;margin-left:18px;font-size:20px">Welcome to passionforbaking.com </span>
<div style="margin-left:5%;margin-top:40px;width:90%;height:70%;background-color:#E6E6FA;>

<?php 
//include("init.php");

include("fq/login.php");

?>
<!--<fieldset width="90%";>
<form>
<br>

<p style="margin-left:10%;">Log IN</p>
<span style="margin-left:3%">Email:</span><br><input style="margin-left:3%;width:90%;"type="text" name="emailLog">
<br>
<span style="margin-left:3%">Password:</span><br><input style="margin-left:3%;width:90%;" type="password" name="passwordi">
<br>
<span style="margin-left:3%">Konfirmo Password:</span><br><input style="margin-left:3%;width:90%;" type="password" name="passwordi">
</form>
<br>
<input style="margin-left:15%;margin-top:3%" type="submit" name="Submit" value="Submit">

</fieldset>-->

</div></div>
<?php
include("fq/prov2.php");
//include("footer.php");

?>