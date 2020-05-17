<?php
require("fq/Konektimi.php");

if(isset($_POST['insert']))
{
    $rid=mysqli_real_escape_string($connection, $_POST['item_id']);
    $emri=mysqli_real_escape_string($connection, $_POST['receta_emri']);
    $pershkrimi=mysqli_real_escape_string($connection,$_POST['receta_pershkrimi']);
    $kategoria=mysqli_real_escape_string($connection, $_POST['receta_kategoria']);

    if(isset($_POST['receta_foto']))
         $foto="img/shirts/".mysqli_real_escape_string($connection, $_POST['receta_foto']);
     else 
         $foto=mysqli_real_escape_string($connection, $_POST['item_foto']);

    $query = "UPDATE products SET emri = '$emri', foto= '$foto', pershkrimi = $pershkrimi, kategoria = $kategoria WHERE rid=$rid";
    mysqli_query($connection, $query);
}

header('Location: products.php');

?>