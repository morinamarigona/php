<?php
$pageTitle = "user info";
$section="info";

include ("fq/header.php");
require ("fq/Konektimi.php");
include("fq/init.php");
admin_protect();

$query=mysqli_query($connection, "SELECT * FROM user WHERE type='0'");
	$users = array();
	while($user=mysqli_fetch_array($query))
	{
	    $users[] = array(
	        "emri" => $user['emri'],
	        "adresa" => $user['adresa'],
	        "email" => $user['email-i'],
	        //"date" => $user['Reg_Date']
			);
	}

if(isset($_POST["refresh"])){

	
	    	$user_list = fopen("user_list.xml", "w") or die("Unable to open file!");
	    	$info="<USERS>";
	    	foreach ($users as $u) {
	    		
		        $info = $info."<USER><NAME>".$u["emri"]."</NAME><ADDRESS>".$u["adresa"]."</ADDRESS><EMAIL>".$u["email"]."</EMAIL></USER>";
		        
		        
	    	}
	    	$info = $info."</USERS>";
	    	fwrite($user_list, $info);
	        fclose($user_list);
}
?>

<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("user_info").innerHTML="<b>User info will be listed here...</b>";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("user_info").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","zgjedh_userin.php?user="+str,true);
  xmlhttp.send();
}
</script>

<style>
.wrapper table, th ,td
{
	border: 1px solid grey;
    border-collapse: collapse;
}
.wrapper th, td {
    padding: 20px;
}

</style>

<div class="wrapper" style="margin-left:40%;width:430px;margin-top:5%;border:;">
		<form style="margin-left:0%;"align="center" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			
			<table style="margin-left:0%;background-color:pink">
				<tr>
					<th style="font-size:20px;color:grey;">Select a user</th>
					<td>
						<select name="users"style="font-size:15px;color:grey;" onchange="showUser(this.value)">
						<option value=""style="font-size:20px;color:grey;">Select a user</option>
						<?php foreach ($users as $u) {?>
							<option value='<?php echo $u["emri"]; ?>'><?php echo $u["emri"]; ?></option>
						<?php } ?>
						</select>
					</td>
					<td><input type="submit"style="font-size:15px;color:white;background-color:grey;" id="refresh" name="refresh" value="Refresh"></td>
				</tr>
			</table>
		</form>
</div>

<form id="user_info" method='post' style="margin-left:40%;"action='Kontakt.php'><b>User info will be listed here...</b></form>


<?php include ("footer.php"); ?>