<?php

include("fq/header.php");
include("fq/DB_Galery.php");
?>

<div style="background-color:;width:80%;margin-left:10%;height:1200px;;">
<h2>MOST VIEWED-</h2>


 <ul class="recetat" id="recetat" style="list-style-type: none;margin: 0;padding: 0;margin-left:3%;">
                <?php
                foreach($recetat as $receta) {
                    echo get_product_list2($receta);
                } ?>
           </ul>


</div>

<?php
include("footer.php")
?>