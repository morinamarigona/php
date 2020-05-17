<?php
//session_start();
require("fq/Konektimi.php");

$emri=mysqli_real_escape_string($connection,$_POST["receta_emri"]);
$foto=mysqli_real_escape_string($connection,"foto/".$_POST["receta_foto"]);
$pershkrimi=mysqli_real_escape_string($connection,$_POST["receta_pershkrimi"]);
$kategoria=mysqli_real_escape_string($connection,$_POST["receta_kategoria"]);
$receta=mysqli_real_escape_string($connection,$_POST["receta_recete"]);
    $query = "INSERT INTO `recetat`(`rid`, `emri`, `foto`,`kategoria`,`pershkrimi`,`receta`,`views`) VALUES (NULL, '$emri', '$foto','$kategoria', '$pershkrimi','$receta','0')";
    mysqli_query($connection, $query);

    header('Location: Receta.php');


?>
