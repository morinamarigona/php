<?php

/*function add(&$a)
{
    $a++;
}
function &position()
{
    $position=&$GLOBALS['pos'];
    return $position;
}*/
$section ="recetat";
$pageTitle="a-store recetat";


require("fq/DB-recetat.php");
include("fq/header.php");
include('fq/init.php');

//admin_protect();
?>
<script>
function showReceta(var emri) {
    if (emri.length == 0) { 
        reload();
    } else {
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("recetat").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "zgjedh_receten.php?search_receta=" + emri, true);
        xmlhttp.send();
    }
}

function showCat(var cat) {
    if (cat== "") {
        document.getElementById("recetat").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("recetat").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET","zgjedh_kategorine.php?kategoria="+cat,true);
        xmlhttp.send();
        
        for (var i = 1; i <= 6; i++) {
            if(cat==i)
            {
                document.getElementById(i).style.color = "brown";
                document.getElementById(i).style.borderBottom = "";
                document.getElementById(i).style.fontWeight = "bold";
                document.getElementById(i).style.cursor = "default";
            }
            else
            {
                document.getElementById(i).style.color = "brown";
                document.getElementById(i).style.borderBottom = "0";
                document.getElementById(i).style.fontWeight = "";
                document.getElementById(i).style.cursor = "";
            }
        };
    }
}
</script>
<style>
.sort 
{
	width: 20%;
    border: solid 1px gray;
    border-radius: 5px;
    font-family: 'comic-sans';
    font-size: 17px;
    background-color: WhiteSmoke;
}

#navlist li a:hover
{
	background-color:#fce8e8;
	color:brown;
}
#navlist li a:active
{
	color:brown;
}
#navlist  li a:link
{
	color:brown;
}

#navlist li a:visited
{
	color:brown;
}


</style>

<div id="navcontainer" style="width:80%;height:190px;margin-left:10%;background-color:;">
        <ul id="navlist" style="width:300px;margin-left:0%;float:left;background-color: #fce8e8;margin-top:3%;font-size:20px;font-variant:small-caps;">
            <li id="active"><a onclick="showCat(1)" id='1' style="color:grey; border-bottom: 3px solid #999; font-weight: bold; cursor: default;">All</a></li>
			<br>
            <li><a onclick="showCat(2)" id='2' style="color:grey">Brownies</a></li>
			<br>
            <li><a onclick="showCat(3)" id='3' style="color:grey">Cupcakes</a></li>
			<br>
            <li><a onclick="showCat(4)" id='4' style="color:grey">Candy</a></li>
			<br>
            <li><a onclick="showCat(5)" id='5' style="color:grey">Macaroons</a></li>
			<br>
            <li><a onclick="showCat(6)" id='6' style="color:grey">Healthy</a></li>
			<br>
			<li><a onclick="showCat(7)" id='7' style="color:grey;">Others</a></li>

            
        </ul>
		
		<span style="float:right;margin-top:3%;">
                <label for="search_receta" style=""><img src="foto/search_icon.png"></label>
                <input type="text" id="search_receta" name="search_receta" onkeyup="showReceta(this.value)">
            </span>
    </div>


<div class="section products latest" style="float:top;margin-left:10%;width:80%;height:100%;background-color:;">

        <div class="wrapper"style="position:relative;">

            <h2 style="float:center;background-color:;color:#993366;">@@Passion for cooking and baking
                <?php 
				if(is_admin($id1)===true)
                {
                ?>
                    <a href="Regjistro-receta.php" style="margin-left: 12px;float:right;color:grey;">Inserto Recete<img style="width:30px;height:30px;"src="foto/plus2.png"></a>
                <?php
                }
                ?>
            </h2>
             <p class="note-designer" align="center"><span style="color:red;"></span><br></p>

            <form style="width: 100%;background-color:;" method="post" action="Receta.php">
                <p style="font-size:20px;color:#993366;">Rendit recetat-</p>
                <table>
                <tr>
				<td>
				<label for="radhiti_sipas_emrit" style="padding:10px;color:#993366;"><b>By name:</b></label>
                <select class="sort" name="radhiti_sipas_emrit" style="width:300px;border-color:#993366;color:#993366;;"id="radhiti_sipas_emrit" onchange="this.form.submit()">
                    <option style="color:#993366;">Select</option>
                    <option value="0" style="color:#993366;">None</option>
                    <option value="1" style="color:#993366;">Ascending</option>
                    <option value="2" style="color:#993366;">Descending</option>
                </select>
                </td>
				</tr>
				<tr>
				<td>
                <label for="radhiti_sipas_dates"  style="padding: 10px;color:#993366;"><b>By date :</b></label>
                <select class="sort" style="width:300px;border-color:#993366;color:#993366;"name="radhiti_sipas_dates" id="radhiti_sipas_dates" onchange="this.form.submit()">
                    <option style="color:#993366;">Select</option>
                    <option value="0" style="color:#993366;">None</option>
                    <option value="1" style="color:#993366;">Ascending</option>
                    <option value="2" style="color:#993366;">Descending</option>
                </select>
				</td>
				</tr>
				
				
				<!--<tr>
				<td>

                <label for="sort_by_price"  style="padding: 10px;color:#993366;"><b>By price :</b></label>
                <select class="sort" name="sort_by_price" style="width:300px"id="sort_by_price" onchange="this.form.submit()">
                    <option>Select</option>
                    <option value="0">None</option>
                    <option value="1">Ascending</option>
                    <option value="2">Descending</option>
                </select>
				</td>
				</tr>-->
				</table>
            </form>
			<hr style="margin-left:0%;width:100%;">
            
            <ul class="recetat" id="recetat" style="list-style-type: none;margin: 0;padding: 0;">
                <?php
                foreach($recetat as $receta) {
                    echo get_product_list1($receta);
                } ?>
           </ul>
		   
        </div>
    </div>
	
<?php include("footer.php");?>