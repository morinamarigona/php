<?php
$pageTitle = "Add receta";
$section = "";
include('fq/header.php');
?>

    <div class="section page" style="margin-left:10%;width:80%;">
        <h1>Add product</h1>
        <form method="post" action="
                        <?php 
                            if(isset($_POST['update-receta']))
                            {
                                echo "update-receta.php";
                            }
                            else
                            {
                                echo "inserto_receta.php";
                            }
                        ?>">
                            
            <table>
                <tr>
                    <th>
                        <label for="receta_emri">Emri Recetes</label>
                    </th>

                    <td>
                        <input type="text" name="receta_emri" id="receta_emri" autofocus required 
                        <?php 
                            if(isset($_POST['update-receta']))
                            {
								?>
                            value="<?php echo $_POST['item_emri']; ?>"
                        <?php
                            }
                        ?>>
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_pershkrimi">Pershkrimi</label>
                    </th>

                    <td>
                        <input type="text" name="receta_pershkrimi" id="receta_pershkrimi" required
                        <?php 
                            if(isset($_POST['update-receta']))
                            {
							?>
                            value="<?php echo $_POST['item_pershkrimi']; ?>"
                        <?php
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_kategoria">Kategoria</label>
                    </th>

                    <td>
                        <select name="receta_kategoria" id="receta_kategoria">
                            <option>Select category</option>
                            <option value="2" <?php if($_POST['item_kategoria']==2) echo "selected"; ?>>BROWNIES</option>
                            <option value="3" <?php if($_POST['item_kategoria']==3) echo "selected"; ?>>CUPCAKES</option>
                            <option value="4" <?php if($_POST['item_kategoria']==4) echo "selected"; ?>>PICA</option>
                            <option value="5" <?php if($_POST['item_kategoria']==5) echo "selected"; ?>>MENGJES</option>
                            <option value="6" <?php if($_POST['item_kategoria']==6) echo "selected"; ?>>HEALTHY</option>
                        </select>

                    </td>
                </tr>

                <tr>
                    <th>
                        <label for="receta_foto">Zgjedh foton</label>
                    </th>

                    <td>
                        <input type="file" name="receta_foto" id="receta_foto" accept="image/*" 
                        <?php if(!isset($_POST['update-receta']))
                              echo "required";
                                ?>>
                    </td>
                </tr>
            </table>
            <?php if(isset($_POST['update-receta'])){ ?>
                            <input type="hidden" name="item_id" value="<?php echo $_POST['item_id']; ?>">
                            <input type="hidden" name="item_pershkrimi" value="<?php echo $_POST['item_pershkrimi']; ?>">
                            <input type="hidden" name="item_kategoria" value="<?php echo $_POST['item_kategoria']; ?>">
                            <input type="hidden" name="item_foto" value="<?php echo $_POST['item_foto']; ?>">
                        <?php
                            }
                            ?>
            <input type="submit" value="Submit" name="insert">
        </form>
    </div>

<?php include ('footer.php'); ?>