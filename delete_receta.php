<?php
include('fq/db_products.php');
require("fq/Konektimi.php");

if(isset($_POST['delete_receta']))
{
    $rid=mysqli_real_escape_string($connection, $_POST['item_id']);

    $query="DELETE FROM recetat WHERE rid='$rid'";
    mysqli_query($connection, $query);
}

header('location: Receta.php');

?>