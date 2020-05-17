<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Regjistrohu</title>

<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="Rethnesh.css">

<link rel="stylesheet" type="text/css" href="style2Ch.css">

<style type="text/css">

</style>
<script type="text/javascript" src="Regjistrohu.js"></script>
</head>



<body>


<?php
/*$EmriError = $MbiemriError = $EmailiError=$FjalekalimiError =$FjalekalimiError2=$NrTelError=$MoshaError=$AdresError=$GjiniaError="";
$emri = $mbiemri = $emaili = $fjalekalimi1=$fjalekalimi2 = $nrtelefoni = $mosha=$adresa=$gjinia="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["emri"]))
	{
		$EmriError = "* Shkruani emrin! ";
	}
	else
	{
		//$name= test_input
		$emri = test_input($_POST["emri"]);
		if (!preg_match("/^[A-Z][a-zA-Z ]*$/",$emri))
		{
       $EmriError = "Fillo me shkronje te madhe dhe perdor vetem shkronja!"; 
     }
	}
	
	if(empty($_POST["mbiemri"]))
	{
		$MbiemriError="* Shkruani mbiemrin!";
	}
	else
	{
		$mbiemri = test_input($_POST["mbiemri"]);
		if(!preg_match("/^[A-Z][a-zA-Z]*$/",$mbiemri))
		{
			$MbiemriError="Fillo me shkronje te madhe dhe perdor vetem shkronja!";
		}
		
	}
	if(empty($_POST["emaili"]))
	{
		$EmailiError ="*Shkruani emailin!";
	}
	else
	{
		$emaili = test_input($_POST["emaili"]);
		if (!preg_match('/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$emaili)) 
		{
				$EmailiError="Shkruaj email-in ne forme te rregullt!";
			}
		
	}
	if(empty($_POST["fjalekalimi"]))
	{
		$FjalekalimiError = "*Shkruani fjalekalimi!";
	}
	else
	{
		$fjalekalimi1=test_input($_POST["fjalekalimi"]);
		if(!preg_match("/^[a-zA-Z0-9]+$/",$fjalekalimi1))
		{
			$FjalekalimiError ="Shkruaj vetem numra dhe shkronja!";
		}
	}
	if(empty($_POST["fjalekalimi2"]))
	{
		$FjalekalimiError2="Konfirmo fjalekalimin!";
	}
	else
	{
		$fjalekalimi2=test_input($_POST["fjalekalimi2"]);
		if($fjalekalimi1!=$fjalekalimi2)
		{
			$FjalekalimiError2="Nuk keni dhene fjalekalim te njejte!";
		}
	}
	if(empty($_POST["nrtelefoni"]))
	{
		$NrTelError="Shkruaj numrin e telefonit!";
		
	}
	else
	{
	   $nrtelefoni=test_input($_POST["nrtelefoni"]); 
	if(!preg_match("/^[+][0-9]{3}[0-9]{2}[0-9]{3}[0-9]{3}$/",$nrtelefoni))
		{
			$NrTelError="Shkruaj formen e rregullt duke perdorur vetem numra!";
		}		
	}
	if(empty($_POST["bday"]))
	{
		$MoshaError="Zgjedh daten e lindjes!";
	}
	else
	{
		
		$mosha=test_input($_POST["bday"]);
		
	}
	if(empty($_POST["adress"]))
	{
		$AdresError="Shkruaj adresen!";
	}
	else
	{
		$adresa=test_input($_POST["adress"]);
		if(!preg_match("/^[a-zA-Z0-9]+$/",$adresa))
		{
			$AdresError="Shkruaj adresen ne formen e rregullt!";
		}
		
	}
	if (empty($_POST["gender"])) {
     $GjiniaError = "Zgjedh gjinine!";
   } 
   else
   {
	   $gjinia=test_input($_POST["gender"]);
   }
   
}
function test_input($data){
   $data = trim($data);
   
   $data = stripslashes($data);
   
   $data = htmlspecialchars($data);
   
   return $data;
   }
*/
?>

<?php
/*include 'fq/init.php';
if(empty($_POST) === false && empty($errors)===true)
{
	$register_data= array(
	'username'=>$_POST['username');
	
	);
}
else
{
	echo output_errors($errors);
}
*/
?>
<?php
if(empty($_POST === false))
{
	echo "Form submited.";
}
?>

 <div id="Baking" >
<hr style="margin-top:3%;width:80%;margin-left:10%;">
<a href="Home.html">
<img  style="width:80%;height:17%;margin-left:10%;"src="foto\header_title.gif"></a>
</div>

<div class="menu"><ul><li ><a href="home.php"> Home</a></li>
<li><a>Receta</a>
<ul><li><a>-Gjelle kryesore </a></li>
<li><a>-Dreke</a></li>
<li><a>-Supa</a></li>
<li><a>-Mengjes</a></li>
<li><a>-Embelsira</a></li></ul></li>
<li><a>CookBooks</a></li>
<li><a>Rreth Nesh</a>
<ul><li><a>-Kontakti</a></li>
<li><a>-Biografi</a></li></ul></li>
<li ><a>Shop</a></li></ul></div>

 <div style="background-color:#ffcccc;margin-left:10%;width:80%;height:810px;">


	<div id="left side"  style="background-color:;height:90%;width:80%;float:left;margin-left:5%;padding-top:5%;">
    <h2 style="color:#bf4040;margin-left:5%">Informatat personale:</h2>
   <form method="post" action=""   >
   <table style="background-color:	#bf4040;width:90%;height:80%;margin-left:5%;" border="border" cellpadding="5" cellspacing="2" style="border-bottom-color:#333;border-left-color:#333;border-right-color:#333;border-top-color:#333;">
    <th colspan="2" ><b><ins style="color:#FFFFFF;">Mbushni t&euml; gjitha kolonat</ins></b></th>
    <tr>
    <td style="color:#FFFFFF;">Emri: </td><td><input type="text" name="emri" size="22" maxlength="22" 
                    value="<?php echo $emri;?>">
					<span class="error"> <?php //echo $EmriError;?></span></td>
    </tr>
    <tr>
    <td style="color:#FFFFFF;">Mbiemri: </td><td><input type="text" name="mbiemri" size="22" maxlength="22"
                    value="<?php echo $mbiemri;?>">
					<span class="error"><?php echo $MbiemriError;?></span></td>
			
	</tr>
    <tr>
    <td style="color:#FFFFFF;">Email: </td><td><input type="" size="35" maxlength="35" name="emaili"
	                 value="<?php echo $emaili;?>">
					 <span class="error"><?php echo $EmailiError;?></span></td>
    </tr>
    
    <tr>
    <td style="color:#FFFFFF;">Fjal&euml;kalimi: </td><td><input type="password" size="12" maxlength="12" name="fjalekalimi"
	                 value="<?php echo $fjalekalimi1;?>">
					 <span class="error"><?php echo $FjalekalimiError;?></span></td>
	</tr>
	<tr>
    <td style="color:#FFFFFF;">Konfirmo Fjal&euml;kalimin: </td><td><input type="password" size="12" maxlength="12" name="fjalekalimi2"
	                 value="<?php echo $fjalekalimi2;?>">
					 <span class="error"><?php echo $FjalekalimiError2;?></span></td>
	</tr>
      <tr>	
    <td style="color:#FFFFFF;">Numri i <br/>telefonit: </td><td><input type="text" size="12" maxlength="12" name="nrtelefoni"
	                 value="<?php echo $nrtelefoni;?>">
					 <span class="error"><?php echo $NrTelError;?></span></td>
                    </tr>
                    <tr>
                    
    <td style="color:#FFFFFF;">Mosha: </td><td><input type="date" size="12" maxlength="12" name="bday"
	                 value="<?php echo $mosha;?>">
					 <span class="error"><?php echo $MoshaError;?></span></td>
					</tr>
                    <tr>
                    
    <td style="color:#FFFFFF;">Adresa: </td><td>
					 <input name="adress" type="address" size="22" value="<?php echo $adresa;?>"></input>
					 <span class="error"><?php echo $AdresError;?></span></td>
					</tr>
                    <tr>
   <tr>
   <td colspan="2" style="color:#FFFFFF;">
   <h3 style="color:#FFFFFF;">Gjinia</h3>
   <input type="radio" name="gender"<?php if (isset($gjinia) && $gjinia=="male") echo "checked";?> value="male" />  Mashkull <br/>
    <input type="radio" name="gender"<?php if (isset($gjinia) && $gjinia=="female") echo "checked";?> value="female"> Fem&euml;r <br/>
    <span class="error"><?php echo $GjiniaError;?></span>
	</td><!--Radio box mundeson qe te zgjedhim vetem njerin nga opcionet, automatikisht e deselekton opcionin tjeter-->
    </tr>
    </table>
    <br />
     
     <p>
  <input type="submit" target="_top" value="Submit"name="submit">
              <input type="reset" value="Anulo"/>
   </p>
   <br /><br />
   </form>
    </div>
    <!--Blloku per pjesen e djathte te faqes-->
    
    </div>
	
	
    <div id="copyrights" style="width:80%;height:50px;margin-left:10%; background-color:#bf4040;"><!--Blloku per copyrights-->
    <hr align="left"/>
    <p style="text-align:center;color:#FFFFFF;">&copy; T&euml; drejtat autoriale i takojn&euml; GrupitB2<!--&copy;paraqet simbolin e copyrights-->
  	<abbr title="Kthehu n&euml; krye">
    <a href="#Top"><img src="../images1/Back.png" width="25" height="25" alt="Back to top" align="right"/></a>
    </abbr><!-- kemi perdorur hyperlink qe do te na dergoj te #Top. Dhe atributin align me vlere right te elementi img-->
    </p>
    <hr align="left"/>
    </div>

</body>
</html>