<?php
//session_start();
$pageTitle = "Reply";
$section="";
include('fq/header.php');
include('fq/DB-feedbacks.php');

$_SESSION["fid"]=$_POST["fid"]; 

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


<div class="section page" style="margin-left:40%;width:430px;margin-top:5%;border:;">
    <div class="wrapper" >

            <p align="center" style="margin-right:55%;"><b><?php echo $_SESSION["emri"]; ?></b> please write your reply</p>
                <form method="post" id="reply" action="inserto_reply.php">
                    <table style="background-color:#fce8e8;">
                        <tr>
                            <th>
                                <label for="Reply">Reply</label>
                            </th>
                        </tr>
                        <tr>
                            <td>
                                <textarea name="reply" id="reply" style="height: 130px;width:230px;" placeholder="Type your reply here"></textarea>
                            </td>
                        </tr>
                    </table>

                    <input type="submit" style="background-color:grey;color:white;width:270px;height:35px;margin-top:2%;"value="Submit" name="send_reply">

                </form>
    </div>
</div>
<?php include ('inc/footer.php'); ?>
