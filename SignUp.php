<?php
$connection = mysqli_connect('localhost','root','marigona','dbprojekti') or die("Unable to connect to the MySQL server!");
//$dbSelect =mysqli_select_db($connection,"dbprojekti") or die("unable");


   
   $emri = $_POST['emri'];
   $mbiemri = $_POST['mbiemri'];
   $emaili = $_POST['emaili'];
   $fjalekalimi = $_POST['fjalekalimi'];
   $fjalekalimiKonfirm = $_POST['fjalekalimi2'];
   $nrTelefoni = $_POST['nrtelefoni'];
   $mosha = $_POST['bday'];
   $adresa= $_POST['adress'];
   $gjinia = $_POST['gender'];
   
   $sql="INSERT INTO teregjistruarit(emri,mbiemri,email,fjalekalimi,konfirmfjalekalimi,nrtelefonit,mosha,adresa,gjinia) 
   values('$emri','$mbiemri','$emaili','$fjalekalimi','$fjalekalimiKonfirm','$nrTelefoni','$mosha','$adresa','$gjinia')";
   
   $query1 = mysqli_query($connection,$sql);
   
   if(!$query1)
   {
	   echo "Failed";
   }
   else
   {
	   echo "Succesful";
   }
	   
?>