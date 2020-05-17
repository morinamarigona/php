<?php
include("fq/header.php");
include('fq/init.php');

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
<div style="margin-left:2%;" class="wrapper">
        <h1>Shto receta</h1>
        <form method="post" action="inserto_receta.php">
                           
            <table style="background-color:#fce8e8;">
			 
			<?php
           if(isset($_GET['success']) && empty($_GET['success']))
             {
	            echo "Regjistrimi u krye me sukses!";
              }
           else
           {
            if(empty($_POST) === false)
            {
	        $register_data = array(
	        'emri'=>$_POST['receta_emri'],
	        'foto'=> "foto/" . $_POST['receta_foto'],
	        'kategoria'=>$_POST['receta_kategoria'],
	        'pershkrimi' =>$_POST['receta_pershkrimi'],
	        'views'=>'0'
	         );
	         register_receta($register_data);
	         //echo "jdjdjd";
	           //exit();
	        array_walk($register_data,'array_sanitize');
	       //print_r($register_data)
	          header("Location: Regjistro-Receta.php?success");
	
            }
         }
       ?>
                <tr>
                    <th>
                        <label for="receta_emri" style="color:gray;font-size:20px;">Emri Recetes</label>
                    </th>

                    <td style="border:1px solid grey; border-collapse: collapse;">
                        <input type="text" name="receta_emri" id="receta_emri" autofocus required >
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_pershkrimi" style="color:gray;font-size:20px;">Pershkrimi</label>
                    </th>

                    <td style="border:1px solid grey; border-collapse: collapse;">
                        <input type="text" name="receta_pershkrimi" id="receta_pershkrimi" required>
                        
                    </td>
                </tr>
				<tr>
                    <th>
                        <label for="receta_recete" style="color:gray;font-size:20px;">Receta</label>
                    </th>

                    <td style="border:1px solid grey; border-collapse: collapse;">
                        <input type="text" name="receta_recete" id="receta_recete" required>
                        
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_kategoria"style="color:gray;font-size:20px;">Kategoria</label>
                    </th>

                    <td style="border:1px solid grey; border-collapse: collapse;">
                        <select name="receta_kategoria" id="receta_kategoria">
                            <option>Select category</option>
                            <option value="2" >2</option>
                            <option value="3" >3</option>
                            <option value="4" >4</option>
                            <option value="5" >5</option>
                            <option value="6" >6</option>
							<option value="6" >7</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_foto" style="color:gray;font-size:20px;">Zgjedh foton</label>
                    </th>

                    <td>
                        <input type="file" name="receta_foto" style="border:1px solid grey; border-collapse: collapse;" id="receta_foto" accept="image/*"
                        <?php if(!isset($_POST['update_receta']))
							echo "required";
						?>>
					</td>
                </tr>
            </table>
           <?php if(isset($_POST['update_receta'])){ ?>
                            <input type="hidden" name="item_id" value="<?php echo $_POST['item_id']; ?>">
                            <input type="hidden" name="item_price" value="<?php echo $_POST['item_price']; ?>">
                            <input type="hidden" name="item_category" value="<?php echo $_POST['item_price']; ?>">
                            <input type="hidden" name="item_img" value="<?php echo $_POST['item_img']; ?>">
                        <?php
		   }
		   ?>
						
						
            <input type="submit" style="margin-top:3%;color:white;background-color:#808080;width:420px;height:40px;" value="Submit" name="insert">
        </form>
    </div>
	</div>

<?php include ('footer.php'); ?>