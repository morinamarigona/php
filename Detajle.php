<?php

require("fq/DB-recetat.php");
include("fq/init.php");
require ("fq/DB-feedbacks.php");
require("fq/DB-reply.php");

if(isset($_GET["id"])) {
    $receta_id = $_GET["id"];
    mysqli_query($connection,"UPDATE recetat set `views`=`views`+1 where rid='$receta_id'");

    foreach ($recetat as $key => $value) {
        if($value["id"]==$receta_id)
        {
            $receta=$recetat[$key];
        }
    }
}

 if(!isset($receta))
 {
     header("Location: Receta.php");
     exit();
 }

$section="recetat";
$pageTitle=$receta["emri"];
include ('fq/header.php');

$_SESSION["rid"]=$_GET["id"];

$receta_emri=&$receta['emri'];

$query=mysqli_query($connection, "SELECT * from recetat where rid=$receta_id");
                   while($row=mysqli_fetch_array($query))
                      {
                        $views=$row['views'];
                        $_SESSION['views']=$views;
                    }

?>

<script>
    function check(num)
    {
        <?php
            if(!isset($_SESSION["id"]))
            {?>
                if(num==1)
                {
                    alert("Please log in to add to cart.");
                    return false;
                } else if(num==2)
                {
                    alert("Please log in to write a feedback.");
                    return false;
                } else if(num==3)
                {
                    alert("Please log in to write a reply.");
                    return false;
                }
        <?php  } ?>
    }
</script>
<div class="section page" style="width:80%;margin-left:10%;background-color:;">
    <div class="wrapper" style="background-color:;width:auto;">
        <div class="breadcrumb"style="background-color:;margin-top:5%;"><a href="Receta.php" style="color:grey;font-size:20px;">Recetat</a> &gt; <?php echo $receta["emri"]; ?></div>
        <?php
        eval('?>'.$_SESSION['eval']);
        test();
        ?>
        <h2 style="color:grey;">Views: <?php echo $_SESSION['views']; ?></h2>
        <div style="float:top;background-color:;width:100%;height:70%;" class="shirt-picture">
            
                <img  style="width:60%;height:100%;float:left;"src="<?php echo $receta["foto"]; ?>" alt="<?php echo $receta["emri"]; ?>">
            
			<div style="float:left;width:35%;background-color:;margin-left:5%;">
			
			<?php if(is_admin($id1)== true){ ?>

               
               
				
            <?php/* }else {*/?>
            
                <form method="post" action="Regjistro-receta.php">
                    <input type="hidden" name="item_id" value="<?php echo $receta["id"]; ?>">
                    <input type="hidden" name="item_emri" value="<?php echo $receta["emri"]; ?>">
                    <input type="hidden" name="item_foto" value="<?php echo $receta["foto"]; ?>">
                    <input type="hidden" name="item_pershkrimi" value="<?php echo $receta["pershkrimi"]; ?>">
                    <input type="hidden" name="item_kategoria" value="<?php echo $receta["kategoria"]; ?>">
                    
                    <input style="width:90%;height:35px;background-color:grey;font-size:23px;color:white;float:right;" type="submit" value="Update recept" name="update_receta">
                </form>

                <form method="post" action="delete_receta.php">
                    <input type="hidden" name="item_id" value="<?php echo $receta["id"]; ?>">
                    <input style="width:90%;height:35px;background-color:grey;margin-top:1%;color:white;font-size:23px;float:right;"type="submit" value="Delete recept" name="delete_receta">
                </form>
				
				
				
		   
				
				 
                
			<?php } ?>
			</div>
			<div style="float:top;margin-left:;width:60%;height:auto;background-color:;" class="shirt-details">
            <h1><span class="price"><?php echo "<span style='color:grey;'>" . $receta["emri"] . "<br><br>".$receta["pershkrimi"] ."<br><br><br>" . $receta["receta"]. "</span>";?></span>
               
                <!--<p class="note-designer"><span style="color: red;">*NOTICE: Image may be subject to copyright.</span><br>We do not own this product, nor the product image. This is used for school project purspose only.</p>
            </h1>-->

           // 
            </div>
			
			
			<div class="wrapper" width=";float:left;background-color:red;">
        <h2 style="float:left;color:grey;width:;background-color:;text-align:left;">Feedbacks<a href="feedbacks.php" style="margin-left: 5px;" onclick="return check(2);"><img src="foto/feedback.png"></a></h2>
        <br><br><br><br>
		<ul style="float:left;width:54%;background-color:;">
        <?php
            foreach($feedbacks as $f)
            {
                ?>
                <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" style="float:left;margin-top:3%; width:;">


                    <?php
                    echo "<br><br>";
                    if($f["rid"]==$_GET["id"])
                    {
                        $query=mysqli_query($connection,"SELECT emri FROM user WHERE id=".$f['uid']);
                        while($feed_emri=mysqli_fetch_array($query))
                        { ?>
                            <dl>
                        <?php
                        echo "<dt style='float:left;padding-bottom:;text-align:left;'><span style='color:grey;font-size:;'><b>" . $feed_emri["emri"] ."<b></span> says:";
                        }
                        
                        echo " <i style='color:grey;'>" . $f["feedback"] . "</i> ";

                       for($i=1;$i<6;$i++)
                        {
                            if($f["rating"]==$i)
                            {
                                echo '<img src="foto/stars';
                                echo $i;
                                echo '.gif">';
                            }
                        }
                        echo "<span style='margin-left: 15px;color:grey;'>".$f["likes"]. " likes</span>";
                        ?>
                        
                            <input type="hidden" name="fid" value="<?php echo $f["fid"]; ?>">
                            <input type="submit" name="like" value="<?php echo $f["likes"]; ?>" style="margin-left: 80px; color: transparent; background-image: url('foto/like.png'); width: 33px; height: 33px;">
                        <?php
                        echo "</dt>";
                     
                        foreach ($replies as $r) {
							
                            if($r["fid"]==$f["fid"]){
                                  //$iduser=$r['uid'];
								 
                                 $query=mysqli_query($connection,"SELECT emri FROM user WHERE id=".$r['uid']);
                                while($reply_emri=mysqli_fetch_array($query))
                                { ?>
                                <?php
                                echo "<dd style='padding-bottom: 10px; margin-left: 60px;'><span style='color:pink;'><img src='foto/reply1.png' style='margin-right: 8px;width:30px;height:30px;'>".$reply_emri["emri"]."</span> replied: <i>".$r["reply"]."</i></dd>";
                                }
                            }
                       }
                        ?>
                  
                        </dl>

                </form>
                            <form method="post" action="reply.php" onsubmit="return check(3);">
                                <input type="hidden" name="fid" value="<?php echo $f["fid"]; ?>">
                                <input type="submit" name="reply" style="float: right;margin-top:12%; padding: 0px; width: 80px; height: 30px; font-size: 12px;color:white; background-color:#e60073; border-radius: 25px;" value="<?php
                                        $_SESSION["feedback_emri"]=$f["emri"]; 
										$_SESSION['fid']=$f['fid'];
                                        $_SESSION["item_id"]=$f["rid"];
                                        echo 'Reply';
                                        ?>">
                            </form>

            <?php } ?>

                <?php
            }
        ?>
        </ul>
    </div>
			
			
        </div>
		

        
    </div>
</div>
