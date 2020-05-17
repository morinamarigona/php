<?php
require ("fq/DB-recetat.php");

$p=$recetat;


// get the q parameter from URL
$q = $_REQUEST["search_receta"];
//$q = ($_GET['search_receta']);

$output = "";

// lookup all products from array if $q is different from "" 
if ($q !== "") {

    $len=strlen($q);
    foreach($recetat as $key => $value) {

        if (stristr($recetat[$key]["emri"], $q)) {

           $output = $output. "<li >";
            $output = $output. '<a href="Detajle.php?id='.$recetat[$key]["id"].'" target="_blank">';
            $output = $output. "<div style='width:30%;height:30%;margin-top:1%;background-color:;float:left;'>";
    
			$output = $output. "<b style='font-size:100%;font-variant:small-caps;text-decoration:underline;color:#993366;' >" .$recetat[$key]["emri"]. "</b>";
            $output = $output. '<img src="' .  $recetat[$key]["foto"] . '"width="90%;" height="70%" style="margin-top:5px;" alt="' . $recetat[$key]["emri"] . '">';
           // $output = $output. "<p>Price $". $products[$key]["price"] ."</p>";
            $output = $output. "</a>";
			$output = $output . "</div>";
			$output= $output. "<div style='width:70%;height:30%;background-color:;margin-top:1%;float:left;'>";
	        $output = $output."<p style='margin-top:40px;height:70%;font-size:20px;text-align:justify;background-color:#f9d2d2;color:gray;'>.". $recetat[$key]["pershkrimi"]."</p>";
	        $output = $output. "</div>";
            $output = $output. "</li>";
			
			/*$output = $output. "<li>";
    $output = $output. '<a href="details.php?id='.$rec["id"].'" target="_blank">';
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
    $output = $output. "</li>";*/
        }
    }
}

echo $output === "" ? "No suggestions" : $output;
?>