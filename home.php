<html>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<link rel="stylesheet" type="text/css" href="Rethnesh.css">


</head>
<style>
a:link {color:white;text-decoration:none;}
a:visited {color:white;text-decoration:none;}
a:hover {color:white;text-decoration:none;}
a:active {color:white;text-decoration:none;}
.menu
{
display:block;
width:80%;


margin-left:10%;
background-color:#BD7A9C; 
color:white;
font-size:150%;
}
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

li {
    display: inline;
	margin-left:12%;
	margin-top:1%;
}

.menu ul li
{
  display:inline-block;
  
}

.menu ul li:hover
{
background-color:#BD7A9C ;
}

.menu ul li a:visited
{
color:gray;
display:block;
}

.menu ul li a:hover
{
color:white;}

.menu ul li:hover ul
{
display:none;
position:absolute;
width:10%;
}

.menu ul li:hover ul
{
display:block;
}

.menu ul ul
{
display:none;
position:absolute;
background-color:#BD7A9C ;
}
.menu ul ul li{
display:block;}

#divfotoja1
{
margin-left:10%;
width:90%;
}
#fotoja1
{
margin-top:2%;
width:89%;
height:30%;
}


</style>
<body>

<?php
include("fq/init.php");
include("fq/header.php");
require("fq/DB-recetat.php");

function add(&$a)
{
    $a++;
}
function &position()
{
    $position=&$GLOBALS['pos'];
    return $position;
}
$numri1=1;
$numri23=array(1,2);
$numrat=array($numri1, &$numri23[0], &$numri23[1]);
$numrat[1]++;
$numrat[2]++;

?>
<div class="section banner" style="height: 330px;margin-top:1%; margin-left:10%;width:80%;background:#3d3d3d url('foto/<?php 
            if(isset($_COOKIE['foto']))
            {
                echo $_COOKIE['foto'];
            }
            else
            {
                echo "fotojameny1.jpg";
            } ?>') center center no-repeat; background-repeat:no-repeat;background-size:100% 100%;">
            <div style="width:50px;height:100%;background-color:black;opacity:0.4">
            <form method="post" action="change_background.php" style="float: left;">
                <input type="radio" id="radio1" name="foto" value="fotojameny1.jpg" onclick="this.form.submit()" 
                <?php 
                    if($_COOKIE['foto']=="fotojameny1.jpg" || !isset($_COOKIE['foto'])) 
                        echo "checked";
                ?>>
                <label for="radio1"><?php echo $numri1; ?></label><br>
                <input type="radio" id="radio2" name="foto" value="passionforbaking.jpg" onclick="this.form.submit()"
                 <?php 
                    if($_COOKIE['foto']=="passionforbaking.jpg") 
                        echo "checked";
                ?>>
                <label for="radio2"><?php echo $numri23[0]; ?></label><br>
                <input type="radio" id="radio3" name="foto" value="passionforbaking3.jpg" onclick="this.form.submit()"
                 <?php 
                    if($_COOKIE['foto']=="passionforbaking3.jpg") 
                        echo "checked";
                ?>>
                <label for="radio3"><?php echo $numri23[1]; ?></label>
            </form>
			</div>
		</div>

		<!--
<div id="divfotoja1"><img id="fotoja1" src="foto/fotojameny.jpg"></img></div>
-->
<div style="float:left;margin-left:10%;margin-top:3%;width:20%;height:99%;background-color:pink;"><br></br>
<span Style="color:black;margin-left:20px;font-size:20px">Welcome to passionforbaking.com </span>
<div style="margin-left:5%;margin-top:40px;width:90%;height:70%;background-color:#f2f2f2;">

<?php 
if(logged_in() ===true)
{
	if(is_admin($_SESSION['id1']))
	{
		echo "<p style='color:grey;font-variant:small-caps;'>Logged in as ADMIN</p>";
		echo "<br><br><br>";
	echo "<p style='margin-top:60%;'><a href='logout.php' style=''><input type='button' name='Log out' value='Logout' style='margin-left:10%;background-color:pink;color:grey;font-size:20px;width:80%;height:10%' ></a></p>";

	}
	else
	{
	echo "<p style='font-size:17px;width:60%;font-variant:small-caps;margin-left:5%;color:grey;margin-top:20px;'>Welcome USER we are happy that you are Logged In to our page!</p>";
	echo "<br><br><br>";
	echo "<p style='margin-top:60%;'><a href='logout.php' style=''><input type='button' name='Log out' value='Logout' style='margin-left:10%;background-color:pink;color:grey;font-size:20px;width:80%;height:10%' ></a></p>";

	}
}
else
{
	include("fq/login.php") ;
}
?>

</div></div>



<div id="divLatest" style="background-color:#E6E6FA;">
<div id="Latest1recept"><span style="font-family:Times New Roman;padding-left:5%;margin-top:3%;">Recetat e fundit</span></div>
<div style="width: 95%; margin: 0 auto;">
<ul class="recetat" style="background-color:red;width:100%;">
            <?php
            krsort($recetat);
            $total_recetat=count($recetat);
            
            $pos=0;
            unset($pos);

            foreach($recetat as $receta) {
                add(position());
                $remaining=$total_recetat-position();
                if($remaining>$total_recetat-5) //shfaq 4 produktet e fundit
                echo get_product_list($receta);
            } ?>
        </ul>
		</div>
	</div>
		
<!--<div id="receta1L"><img src="foto/dredhza1.jpg" style="width:25%;height:100%;"></img><div style="float:right;width:70%;height:100%;background-color:#993366;"><b style="text-decoration:underline;margin-left:10%;color:white;"><a>Vere me dredheza te shtrydhura</a></b><br>
<span style="margin-left:1%;font-variant:normal;color:white;">Beni slushies lehtë të verës në shtëpi! Luleshtrydhe të ngrira, verë Moscato dhe rrudhë lagësht mollë
<br><a href="http//google.com">LEXO ME SHUME..</a>
</span></div></div>
<div id="receta1L"><img src="foto/chocolate1.jpg"style="width:25%;height:100%;"></img>
<div style="float:right;width:70%;height:100%;background-color: #993366;"><b style="text-decoration:underline;margin-left:10%;color:white;"><a>Cokollate e zhytur ne biskota </a></b><br>
<span style="margin-left:1%;font-variant:normal;color:white;">Une dua cokollate dhe un dua patatina dhe keto biskota te gjitha se bashku, kete kemi nje rece..
<br><a href="http//google.com">LEXO ME SHUME..</a>
</span></div></div>
<div id="receta1L"><img src="foto/chokolade1.jpg"style="width:25%;height:100%;"></img>
<div style="float:right;width:70%;height:100%;background-color: #993366;"><b style="text-decoration:underline;margin-left:10%;color:white;"><a>Vere me dredheza te shtrydhura</a></b><br>
<span style="margin-left:1%;font-variant:normal;color:white;">I love chocolate and I love potato chips, and these cookies have both…

Here is the recipe, enjoy!
<br><a href="http//google.com">READ MORE..</a>
</span></div></div>
<div id="receta1L"><img src="foto/fotoja1brown.jpg"style="width:25%;height:100%;"></img>
<div style="float:right;width:70%;height:100%;background-color: #993366;"><b style="text-decoration:underline;margin-left:10%;color:white;"><a>Vere me dredheza te shtrydhura</a></b><br>
<span style="margin-left:1%;font-variant:normal;color:white;">I love chocolate and I love potato chips, and these cookies have both…

Here is the recipe, enjoy!
<br><a href="http//google.com">READ MORE..</a>
</span></div

</div>
</div-->
<?php/*
if(isset($_SESSION['id']))
{
	echo "Logged in ";
}
else
{
  echo "Not logged in";
}*/
?>

<?php
include("footer.php");
?>

</body>
</html>