<?php
//session_start();
$pageTitle = "Feedback";
$section="";
include('fq/header.php');
include('fq/init.php');
//include('inc/db_cart.php');
?>

<style>
.wrapper table, th ,td
{
	border: 1px solid black;
    border-collapse: collapse;
}
.wrapper th, td {
    padding: 20px;
}

</style>

<div class="section page" style="margin-left:35%;width:430px;margin-top:5%;border:;">
    <div class="wrapper" >

        <?php  if(isset($_GET["status"]) AND $_GET["status"] == "thanks") {?>
            <p>Thank you for the feedback! Keep shopping with us.</p>
        <?php  } else {?>

            <?php
                $item_name=$_POST["feedback"];
            ?>

            <p align="center"><b><?php echo $_SESSION["emri"]; ?></b> please write your feedback</p>
            <form method="post" id="feedback" action="inserto_feedback.php">
                <table style="background-color:#fce8e8;">
                    <tr>
                        <th>
                            <label style="color:gray;font-size:20px;"for="feedback">Feedback</label>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <textarea name="feedback" id="feedback" style="height: 100px;width:300px;" placeholder="Type your feedback here"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <label style="color:gray;font-size:20px;" for="rating">Rating (between 1 and 5)</label>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="number" name="rating" style="width:300px;"id="rating" min="1" max="5" placeholder="rate">
                        </td>
                    </tr>

                </table>

                <input type="submit" style="background-color:grey;color:white;width:345px;height:35px;margin-top:2%;"value="Submit" name="send_feedback">

            </form>
        <?php  } ?>
    </div>
</div>
<?php include ('footer.php'); ?>