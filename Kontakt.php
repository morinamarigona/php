<?php
$pageTitle = "Contact a-store.com";
$section="contact";
include('fq/init.php');
include('fq/header.php'); 
session_start();

if(isset($_POST["submit"])) {

    if($_SESSION['active']=="1")
    {
        $admin = "marigona.morina25outlook.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $header="From: .marigona.morina25@outlook.com";

        $tedhenat=preg_split("/ /", $name);
        $name_split=current($tedhenat);
        $surname_split=end($tedhenat);

        $message = $_POST["message"];
        $message = wordwrap($message, 70);
        $email_body="";
        $email_body=$email_body."Admin: ".$name_split." ".$surname_split."\n\n";
        $email_body=$email_body."Message: ".$message."\n";

        mail($email, "passionforbaking.com admin message", $email_body, $header);
        header("Location: Kontakt.php?status=thanks1");
    }
    else
    {
        $admin = "marigona.morina25@outlook.com";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $header="From:".$email;

        $message = $_POST["message"];
        $message = wordwrap($message, 70);
        $email_body="";
        $email_body=$email_body."Name: ".$name."\n\n";
        $email_body=$email_body."Message: ".$message."\n";

        class customException extends Exception {
          public function errorMessage() {
            //error message
            $errorMsg = '<p align="center"><b>'.$this->getMessage().'</b> is not a valid e-mail address</p>';
            return $errorMsg;
          }
        }

        try {
          //check if
          if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
            //throw exception if email is not valid
            throw new customException($email);
          }
          else {
            mail($admin, "passionforbaking.com client message", $email_body, $header);

            header("Location: Kontakt.php?status=thanks2");
          }
        }

        catch (customException $e) 
      {
        echo $e->errorMessage();
      }
    }

}

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
    <div class="wrapper" style="margin-left:2%;">
        <h1 style="color:grey;">Kontakto</h1>

        <?php  if(isset($_GET["status"]) AND $_GET["status"] == "thanks2") {?>
        <p align="center">Thanks for the email! We&rsquo;ll be in touch shortly.</p>
        <?php } else if(isset($_GET["status"]) AND $_GET["status"] == "thanks1") {?>
        <p align="center">Email has been sent to the client.</p>
        <?php  } else {?>

            <p align="center" style="color:grey">
			<?php if(logged_in() === true){
                        echo "Send email to costumers";
				}
                else
				{
				        echo "We&rsquo;d love to hear from you! Complete the form to send an email to marigona.morina25@outlook.com";
				}
				?>
				</p>
            <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contact_form">
                <table cellpadding="" style="background-color:#fce8e8;">
                    <tr style="">
                        <th style="border:1px solid grey;">
                            <label for="name" style="color:gray;font-size:20px;">Your name</label>
                        </th>

                        <td style="border:1px solid grey; border-collapse: collapse;">
                            <input style="width:230px" type="text" name="name" id="name" autofocus
                            <?php if(isset($_SESSION['id1']))
                            {
								
                            ?>
                                 value='<?php echo $_SESSION["emri"]; ?>'
                            <?php
                            }
                            ?>
                            >
                        </td>
                    </tr>

                    <tr>
                        <th style="border:1px solid grey; border-collapse: collapse;">
                            <label for="email" style="color:gray;font-size:20px;">
                                <?php if(logged_in() === true){
                                  echo "Costumer";
						           }
                                  else
				                {
				                    echo "Your";} 
                                ?>
                                 email</label>
                        </th>

                        <td style="border:1px solid grey;">
                            <input  style="width:230px" type="text" name="email" id="email"
                             <?php if(isset($_SESSION['id']))
                            {
                                if($_SESSION['active']!="1")
                                {
                            ?>
                                 value='<?php echo $_SESSION["emaili"]; ?>'
                            <?php
                                } else if(isset($_POST['email'])) {
                            ?>
                                value='<?php echo $_POST["email"]; ?>'
                            <?php          
							}
							}?>
                           >
                        </td>
                    </tr>

                    <tr>
                        <th style="border:1px solid grey;">
                            <label for="message" style="color:gray;font-size:20px;">Message</label>
                        </th>

                        <td >
                            <textarea name="message"  id="message" style="height: 100px;width:230px" placeholder="Type your message here"></textarea>
                        </td>
                    </tr>
                </table>
                <input style="margin-top:3%;color:white;background-color:#808080;width:410px;height:40px;" type="submit" value="Send" name="submit">
            </form>

        <?php  } ?>
    </div>
</div>

<?php include("footer.php"); ?>