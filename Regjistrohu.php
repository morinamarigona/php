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

<style>
a:link {color:white;text-decoration:none;}
a:visited {color:white;text-decoration:none;}
a:hover {color:white;text-decoration:none;}
a:active {color:white;text-decoration:none;}
</style>


<?php
//require("fq/DB-recetat.php");
//include("init.php");

?>






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
<li><a  href="Galery.php"style="background-color:#fce8e8;color:grey;text-decoration:none;">Galery</a></li>
<li><a style="background-color:#fce8e8;color:grey;text-decoration:none;" href="Kontakt.php">Kontakti</a></li>
<li><a href="user_info.php" style='color:grey;background-color:#fce8e8;text-decoration:none;'>User info</a></li></ul></div>


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



//include("fq/header.php");
include("fq/init.php");
?>

 <div style="background-color:#E6E6FA;margin-top:2%;margin-left:10%;width:80%;height:810px;">


	<div id="left side"  style="background-color:;height:90%;width:70%;float:left;margin-left:25%;padding-top:5%;">
    <h2 style="color:grey;margin-left:5%">Informatat personale:</h2>
   <form method="post" action=""   >
   <table style="background-color:#fce8e8;;width:50%;height:80%;margin-left:5%;" border="border" cellpadding="5" cellspacing="2" style="border-bottom-color:#333;border-left-color:#333;border-right-color:#333;border-top-color:#333;">
    <th colspan="2" ><b><ins style="color:grey;text-align:left;">Mbushni t&euml; gjitha kolonat</ins></b></th>
    <tr>
	<td colspan="2" style="text-align:center;color:red;">
	<?php 
if(empty($_POST === false))
{
	
	$required_fields=array('emri','mbiemri','emaili','fjalekalimi','fjalekalimi2','nrtelefoni','bday','adress','gender');
	foreach($_POST as $key=>$value)
	{
		if(empty($value) && in_array($key,$required_fields) === true)
		{
			$errors[] = "Fusat duhet te plotesohen te gjitha!";
		    break 1;
		}
	}
	
	if(empty($errors)=== true)
	{
		if(user_exists($_POST['emri']) === true)
		{
			$errors[] = "Me vjen keq ,ekzsiton user-i me emrin " . "'" .$_POST['emri'] . "'" ;
		}
		if(!preg_match("/^[A-Za-z][a-zA-Z ]*$/",$_POST['emri']))
		{
			$errors[] = "Emri duhet  te permbaje vetem shkronja!";
		}
        if(!preg_match("/^[A-Za-z][a-zA-Z]*$/",$_POST['mbiemri']))
		{
			$errors[]="Mbiemri duhet te  perdor vetem shkronja!";
		}
		if (!preg_match('/^[a-zA-Z0-9 _\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/',$_POST['emaili'])) 
		{
				$errors[]="Shkruaj email-in ne forme te rregullt!";
	    }
		if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['fjalekalimi']))
		{
			$errors[] ="Shkruaj fjalekalimin vetem me numra dhe shkronja!";
		}
		if(!preg_match("/^[+][0-9]{3}[0-9]{2}[0-9]{3}[0-9]{3}$/",$_POST['nrtelefoni']))
		{
			$errors[]="Shkruaj formen e rregullt per numrin e telefonit duke perdorur vetem numra!";
		}	
				
		if(strlen($_POST['fjalekalimi']) < 6 )
		{
			$errors[] ="Paswordi duhet te jete me me shume se 6 shkronja!";
		}
		if($_POST['fjalekalimi'] !== $_POST['fjalekalimi2'])
		{
			$errors[] = "Paswordi i konfirmuar duhet te jete i njejte!";
		}
		
		if(email_exists($_POST['emaili']) === true)
		{
			$errors[] ="Me vjen keq, ekziston nje user qe eshte duke perdorur email-in " . $_POST['emaili'];
		}
		
		
	}
	
	
	
}
//print_r($errors);
?>

<?php

if(isset($_GET['success']) && empty($_GET['success']))
{
	echo "Regjistrimi u krye me sukses!";
}
else
{
if(empty($_POST) === false && empty($errors) ===true)
{
	$register_data = array(
	'emri'=>$_POST['emri'],
	'mbiemri'=>$_POST['mbiemri'],
	'email-i' =>$_POST['emaili'],
	'fjalekalimi'=>$_POST['fjalekalimi'],
	'fjalekalimikonfirm'=>$_POST['fjalekalimi2'],
	'nrtelefonit'=>$_POST['nrtelefoni'],
	'mosha'=>$_POST['bday'],
	'adresa'=>$_POST['adress'],
	'gjinia'=>$_POST['gender'],
	'active'=>'0',
	'type'=>'0'
	);
	register_user($register_data);
	//exit();
	
	

	$_SESSION['emriR']=$register_data['emri'];
	$_SESSION['adresaR']=$register_data['adresa'];
	$_SESSION['mbiemriR']=$register_data['mbiemri'];
	$_SESSION['emailiR']=$register_data['email-i'];
	$_SESSION['fjalekalimiR']=$register_data['fjalekalimi'];
	
	
	array_walk($register_data,'array_sanitize');
	
	
	//print_r($register_data)
	header("Location: profili.php?success");
	//exit();
  }
    else if(empty($errors)===false){
	
	echo output_errors($errors);
	
     }

?>
</td>
	</tr>
	<tr>
    <td style="color:grey;">Emri: </td><td><input type="text" name="emri" size="22" maxlength="22" 
                    value="">
					<span class="error"> </span></td>
    <tr>
    <td style="color:grey;">Mbiemri: </td><td><input type="text" name="mbiemri" size="22" maxlength="22"
                    value="">
					<span class="error"></span></td>
			
	</tr>
    <tr>
    <td style="color:grey;">Email: </td><td><input type="" size="35" maxlength="35" name="emaili"
	    \             value="">
					 <span class="error"></span></td>
    </tr>
    
    <tr>
    <td style="color:grey;">Fjal&euml;kalimi: </td><td><input type="password" size="12" maxlength="12" name="fjalekalimi"
	                 value="">
					 <span class="error"></span></td>
	</tr>
	<tr>
    <td style="color:grey;">Konfirmo Fjal&euml;kalimin: </td><td><input type="password" size="12" maxlength="12" name="fjalekalimi2"
	                 value="">
					 <span class="error"></span></td>
	</tr>
      <tr>	
    <td style="color:grey;">Numri i <br/>telefonit: </td><td><input type="text" size="12" maxlength="12" name="nrtelefoni"
	                 value="">
					 <span class="error"></span></td>
                    </tr>
                    <tr>
                    
    <td style="color:grey;">Mosha: </td><td><input type="date" size="12" maxlength="12" name="bday"
	                 value="">
					 <span class="error"></span></td>
					</tr>
                    <tr>
                    
    <td style="color:grey;">Adresa: </td><td>
					 <input name="adress" type="address" size="22" value=""></input>
					 <span class="error"></span></td>
					</tr>
                    <tr>
   <tr>
   <td colspan="2" style="color:#FFFFFF;">
   <h3 style="color:grey;">Gjinia</h3>
   <input type="radio" name="gender"  style="color:grey;" value="male" /><b style="color:grey;">  Mashkull <b><br/>
    <input type="radio" name="gender" style="color:grey;" value="female"><b style="color:grey;"> Fem&euml;r <b><br/>
    <span class="error"></span>
	</td><!--Radio box mundeson qe te zgjedhim vetem njerin nga opcionet, automatikisht e deselekton opcionin tjeter-->
    </tr>
    </table>
    <br />
     
     <p>
  <input type="submit"style="color:grey;background-color:#fce8e8;margin-left:5%;width:20%;height:40px;" target="_top" value="Regjistrohu"name="submit">
              <input type="reset"style="color:grey;background-color:#fce8e8;width:20%;height:40px;" value="Anulo"/>
   </p>
   <br /><br />
   </form>
    </div>
    <!--Blloku per pjesen e djathte te faqes-->
    
   </div>
	
	
    
	

</body>
</html>
<?php
}
 include("footer.php");?>