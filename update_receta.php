<?php
require("fq/Konektimi.php");

if(isset($_POST['insert']))
{
    $rid=mysqli_real_escape_string($connection, $_POST['item_id']);
    $emri=mysqli_real_escape_string($connection, $_POST['receta_emri']);
    $pershkrimi=mysqli_real_escape_string($connection,$_POST['receta_pershkrimi']);
    $receta=mysqli_real_escape_string($connection,$_POST['receta_recete']);
	$kategoria=mysqli_real_escape_string($connection, $_POST['receta_kategoria']);

    if(isset($_POST['receta_foto']))
         $foto="foto/".mysqli_real_escape_string($connection, $_POST['receta_foto']);
     else 
         $img=mysqli_real_escape_string($connection, $_POST['item_foto']);

    $query = "UPDATE recetat SET emri = '$emri', foto = '$foto', pershkrimi = $pershkrimi, kategoria = $kategoria WHERE rid=$rid";
    mysqli_query($connection, $query);
}

header('Location: products.php');

?>
