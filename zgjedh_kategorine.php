
<?php
require("fq/Konektimi.php");

$q = intval($_GET['kategoria']);
//echo "$q";
//$q=3;
if($q==1)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else if($q==2)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else if($q==3)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else if($q==4)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else if($q==5)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else if($q==6)
{
	$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
}
else
	if($q==7)
	{
		$query=mysqli_query($connection, "SELECT * FROM recetat WHERE kategoria=$q");
	$recetat = array();
	while($receta=mysqli_fetch_array($query))
	{
	    $recetat[] = array(
	        "id" => $receta['rid'],
	        "emri" => $receta['emri'],
	        "foto" => $receta['foto'],
	        "pershkrimi" => $receta['pershkrimi']);
	}
	}


if(count($recetat)!=0){
	foreach($recetat as $rec) {
           
	            /*$output = $output. "<li>";
	            $output = $output ."<div style='background-color:;width:100%;height:45%;padding-top:;' >";
				
				$output = $output. '<a href="details.php?id='.$rec["id"].'" target="_blank">';
	            
				$output = $output. "<h2 style='color:black;text-decoration:underline;'>" . $rec["emri"] ."</h2>";
	            $output = $output ."<div style='background-color:#fad1eb;width:32%;float:left; height:84%;padding-top:1%;' >";
				
				$output = $output ."<div style='background-color:white;width:95%; height:95%;margin-left:2%;' >";
				
				$output = $output. '<img src="' .  $rec["foto"] . '"style="width:80%;height:80%;padding:8%;" alt="' . $rec["emri"] . '">';
	            
				//$output = $output. "<p>Price $". $rec["price"] ."</p>";
	            $output = $output. "</a>";
				$output = $output . "</div>";
				$output = $output . "</div>";
				$output = $output . "<div style='font-size:35px;float:left;background-color:#ee5db9;color:white;width:60%;margin-left:5%;height:84%;'>" .$rec["pershkrimi"];
				//$output = $output . "<p style='font-size:25px;color:white;background-color:#ee5db9;margin-top:10%;height:50%;'>" . $rec["pershkrimi"] . "</p>";
				$output = $output . "</div>";
				$output = $output . "</div>";
	            $output = $output. "</li>";*/
				//$output="";
  /* $output = $output. "<li style='width:;height:;'>";
	//$output = $output."<div>";
    $output = $output. '<a href="details.php?id='.$rec["id"].'" target="_blank">';
	$output = $output. "<div style='width:40%;height:60%;margin-top:1%;background-color:;float:top-left;'>";
    
    $output = $output. '<img src="' .  $rec["foto"] . '"width="90%;" height="90%" style="margin-top:5px;" alt="' . $rec["emri"] . '">';
    $output = $output. "<br><br>". "<b style='font-size:20px;font-variant:small-caps;text-decoration:underline;color:#993366;' >" . $rec["emri"] . "</b>";
	
	//$output = $output. "<p>View Details</p>";
   // $output = $output. "<p>Price $". $receta["price"] ."</p>";
    $output = $output. "</a>";
	$output = $output . "</div>";
	
	$output= $output. "<div style='width:40%;height:40%;background-color:;margin-top:5%;float:top-left;'>";
	$output = $output."<p style='margin-top:5px;font-size:15px;width:90%;height:80%;text-align:justify;background-color:#993366;color:white;'>.". $rec["pershkrimi"]."</p>";
	//$output = $output. "</div>";
	$output = $output. "</div>";
	
    $output = $output. "</li>";*/
	
	$output = $output. "<li>";
    $output = $output. '<a href="Detajle.php?id='.$rec["id"].'" target="_blank">';
	$output = $output. "<div style='width:30%;height:30%;margin-top:1%;background-color:;float:left;'>";
    $output = $output. "<br>". "<b style='font-size:100%;font-variant:small-caps;text-decoration:underline;color:#993366;' >" . $rec["emri"] . "</b>";
	
    $output = $output. '<img src="' .  $rec["foto"] . '"width="90%;" height="70%" style="margin-top:5px;" alt="' . $rec["emri"] . '">';
     
	//$output = $output. "<p>View Details</p>";
   // $output = $output. "<p>Price $". $receta["price"] ."</p>";
    $output = $output. "</a>";
	$output = $output . "</div>";
	
	$output= $output. "<div style='width:70%;height:30%;background-color:;margin-top:1%;float:left;'>";
	$output = $output."<p style='margin-top:40px;height:70%;font-size:20px;text-align:justify;background-color:#f9d2d2;color:gray;'>.". $rec["pershkrimi"]."</p>";
	$output = $output. "</div>";
    $output = $output. "</li>";
				
				
				
	    }
}
else {
	$output="<p align='center'>Nuk ka receta ne kete kategori</p>";
}

  echo $output;
?>