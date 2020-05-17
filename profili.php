<?php
$pageTitle = "profile";
$section="";
include("fq/header.php");
include("fq/init.php");
?>


<?php

?>
<style>
.wrapper table, th ,td
{
	border: 1px solid black;
    border-collapse: collapse;
}
.wrapper th, td {
    padding: 20px;
}

</style>

    <div class="wrapper" style="margin-left:35%;width:430px;margin-top:5%;border:;">
        <p>Ju jeni te regjistruar!</p>
		<h1>Your profile <a href=""><img src="foto/Sleep.png"></a></h1>

        <?php if(is_admin()===true)?>
                <p align="center"><?php echo $_SESSION["time"]; ?></p>
        
        <form id="profile" method="post" action="update_user.php">
            <table style="background-color:pink">
                <tr>
                    <th>
                        <label for="full">Username</label>
                    </th>

                    <td>
                        <input type="text" name="full" id="full" required = "Please fill out this field" value='<?php echo $_SESSION["emriR"]; ?>'>
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="address">Street address</label>
                    </th>

                    <td>
                        <input type="text" name="address" id="address" required = "Please fill out this field" pattern="[a-zA-Z0-9\s\]+" value='<?php echo $_SESSION["adresaR"];?>'>
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="email">Email</label>
                    </th>

                    <td>
                        <input type="text" name="email" id="email" required = "Please fill out this field" pattern="^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$" title="Is NOT a valid email" placeholder="someone@example.com" value='<?php echo $_SESSION["emailiR"];?>'>
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="pass">Password</label>
                    </th>

                    <td>
                        <input type="password" name="pass" id="pass" required = "Please fill out this field" placeholder="Password" value='<?php echo $_SESSION["fjalekalimiR"];?>'>
                    </td>
                </tr>
				<tr>
                    <th>
                        <label for="pass">Password Confirm</label>
                    </th>

                    <td>
                        <input type="password" name="pass" id="pass" required = "Please fill out this field" placeholder="Password" value='<?php echo $_SESSION["fjalekalimiR"];?>'>
                    </td>
                </tr>
            </table>
            </form>
    </div>
<?php include ("footer.php"); ?>