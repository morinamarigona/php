<?php

$dbhost = "localhost:3306";
$dbuser='root';
$dbpass='';

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,'dbcooking');
//$dbSelect =mysqli_select_db($conn,"dbcooking") or die("unable");
/*
if(!$conn)
{
	die("Lidhja me BDH nuk mund te realizohet.".mysqli_connect_error());
	
}
echo ('Lidhja me BDH u realizua me sukses!');

echo "<br>";
/*

$sql = 'CREATE Database dbcooking';
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
	die("Baza e te dhenave nuk u kriju.".mysqli_connect_error());
}
echo "BDH u krijua me sukses";


$sql = "CREATE TABLE `dbcooking`.`user` (
`emri` VARCHAR(50) NOT NULL , 
`mbiemri` VARCHAR(50) NOT NULL , 
`email-i` VARCHAR(70) NOT NULL ,
 `fjalekalimi` VARCHAR(60) NOT NULL , 
 `fjalekalimikonfirm` VARCHAR(60) NOT NULL , 
 `nrtelefonit` VARCHAR(50) NOT NULL ,
 `mosha` DATE NOT NULL ,
 `adresa` VARCHAR(100) NOT NULL ,
 `gjinia` VARCHAR(30) NOT NULL ,
 `active` INT NOT NULL DEFAULT '0')";
	
	$sql = "INSERT INTO `user` (
	`id`, 
	`emri`,
	`mbiemri`,
	`email-i`, 
	`fjalekalimi`, 
	`fjalekalimikonfirm`, 
	`nrtelefonit`, 
	`mosha`, 
	`adresa`,
	`gjinia`, 
	`active`)
	VALUES (NULL,'marigona', 'morina', 'marigona.morina25@outlook.com', MD5('137259'), MD5('137259'), '+38349456121', '1993-07-2', 'Qikatov e Vjeter-Drenas-Drenas', 'F', '0')";

	$sql="INSERT INTO `user`(`id`, `emri`, `mbiemri`, `email-i`, `fjalekalimi`, `fjalekalimikonfirm`, `nrtelefonit`, `mosha`, `adresa`,`gjinia`,`active`) VALUES(0, 'Vefsa', 'Mucolli', 'flakron_bajrolami@hotmail.com', '6c7f3e32cf206580bf64a4aa4fddd81b', '6c7f3e32cf206580bf64a4aa4fddd81b', '+38649359534', '2016-05-25', 'jjjjjjj', 'female', '0')";


$retval=mysqli_query($conn,$sql);
if(!$retval)
{
	die("Tabela  dnuk u krijua.".mysqli_connect_error());
}
echo "Tabela u krijua";


$sql = "CREATE TABLE `dbcooking`.`recetat`( 
	`rid` INT NOT NULL ,
	`emri` VARCHAR(80) NOT NULL , 
	 `foto` VARCHAR(100) NOT NULL,
	`kategoria` INT NOT NULL DEFAULT '2' ,
	`views` INT NOT NULL DEFAULT '0' , 
	PRIMARY KEY (`rid`))";


	/*$sql = 'CREATE TABLE teRegjistruarit(
	emri varchar(50),
	mbiemri varchar(50),
	email varchar(70),
	fjalekalimi varchar(70),
	konfirmfjalekalimi varchar (70),
	nrtelefonit varchar(50),
	mosha date,
	adresa varchar(70),
	gjinia varchar(10),
	PRIMARY KEY(email))';
	$sql="INSERT INTO `recetat` (`rid`, `emri`, `foto`, `kategoria`, `views`) VALUES
	('1', 'Vere me dredheza te shtrydhura', 'foto/dredhza1.jpg', '2', '0'),
	('24', 'Vere me dredheza te shtrydhura', 'foto/dredhza2.jpg', '2', '0')";
    
	
	$sql="INSERT INTO `recetat` (`rid`, `emri`, `foto`, `kategoria`, `views`) VALUES
	('2','Cokolate e zhytur ne biskota','foto/chocolate1.jpg','5','0'),
	('3','BREAKFAST OATMEAL MUFFINS','foto/mengjesi/mufins1.jpg','3','0')";
	
	$sql="ALTER TABLE `recetat` ADD `pershkrimi` VARCHAR(200) NOT NULL AFTER `kategoria`";
	
	$sql="UPDATE `recetat` SET `pershkrimi` = 'Make easy wine slushies at home! Frozen strawberries, Moscato wine, and sour apple pucker created the best Jolly Rancher wine slushy ever!! Stock the freezer' WHERE `recetat`.`rid` = 1";
	$sql="INSERT INTO `recetat` (`rid`, `emri`, `foto`, `kategoria`,`pershkrimi`,`views`) VALUES
	('5','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0'),
	('6','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0'),
	('7','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0'),
	('8','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0'),
	('9','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0'),
	('10','Brioche sweet','foto/mengjesi/brioche1.jpg','3','Hello everyone, I hope your weekend was a good one.One of my favorite breads to eat in the weekends is brioche','0')";
	
	$sql="INSERT INTO `recetat` (`rid`, `emri`, `foto`, `kategoria`,`pershkrimi`,`views`) VALUES
	('12','Fudge brownies','foto/brownies/Fudge brownies.jpg','2','Fudge Brownies on a wednesday , yes please!
Sharing the recipe for this delicious cake, 
This trio is so delicious with brownies.
Let’s show you how to make this.','0'),
     ('13','Fudge brownies & walnuts','foto/brownies/Fudge brownies & walnuts','2','
Hello everyone, I hope your Saturday was great. Today’s Sunday, and a perfect day to bake some brownies.
Brownies are the perfect weekend treat, especially for chocolate lovers.
I like to add some walnuts to give the fudgy brownies some crunch.','0')";

$sql="INSERT INTO `recetat` (`rid`, `emri`, `foto`, `kategoria`,`pershkrimi`,`views`) VALUES
    ('14','Brownie and oreo cheescake','foto/brownies/Brownie and oreo cheescake.jpg','2','
Hi you all, It’s Sunday the perfect day for baking, 
Sharing the recipe for this delicious oreo cheesecake, 
This trio is so delicious with brownies, oreo cheesecake, and ganache.
Let’s show you how to make this.','0'),
    ('15','Peanut Butter Oreo Cream Cheese cookes','foto/brownies/Peanut Butter Oreo Cream Cheese cookes.jpg','2','Hello everyone!
I know that most of you love Oreo cookies, I got that confirmed when I posted this photo of the new Peanut Butter Oreos.
It’s a limited edition Oreo special, and so incredibly good….
No less than 1602 comments and almost 20 000 likes in instagram – wow!
I just had to come up with something yummi to make with these treats, and today I made delicious Peanut Butter Oreo Cream Cheese cookes…
Recipe will follow.','0'),
   ('16','Hi-hat cupcakes','foto/brownies/Hi-hat cupcakes.jpg','3','
Hello everyone, I hope you are enjoying the holidays.
New Year’s Eve isn’t too far away, and I’d like to share these delicious chocolate 
cupcakes with you.Maybe you’ll be tempted to make them for New Year’s Eve…?
I like to top these with a fantastic vanilla fluff, and then dip them into some melted chocolate…
A pretty addition to any dessert table, and so, so good!
You just have to try them…','0'),
   ('17','Chocolate cupcakes','foto/brownies/Chocolate cupcakes.jpg','3','Hello everyone, I hope you’ve all have a good weekend so far.
Weekends are perfect for baking, so why not make these soft, 
delicious chocolate cupcakes with an amazing chocolate cream cheese frosting?
Easy to make, and oh-so good.','0')";


/*$sql=mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `feedbacks` (
`fid` int(17) NOT NULL,
  `rid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Feedback` varchar(80) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Likes` int(11) NOT NULL DEFAULT '0',
  `Feed_Date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
	
$retval=mysqli_query($conn,$sql);
if(!$retval)
{
	die("Baza e teddd dhenave nuk u kriju.".mysqli_connect_error());
}
echo "BDH u krijua me sukses";

/*$insetimi = "INSERT INTO user(id,email,password)
             VALUES(1,'marigona.morina25@outlook.com','588a62c51f6e9f27fa8f218fdde1736a')";
		$retval = mysqli_query($conn,$insetimi);


		if(!$retval)
	{
		die('Te dhenat nuk mund te regjistrohen.;'.mysqli_connect_error());
	}	 
	
	echo "Te dhenat u regjistruan!";
	
	

$sql="DELETE FROM `teregjistruarit` WHERE `teregjistruarit`.`emri` = 'Marigona'";

$sql="ALTER TABLE `teregjistruarit` ADD `active` INT NOT NULL DEFAULT '0' AFTER `gjinia`;";
$retval=mysqli_query($conn,$sql);

$retval=mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `feedbacks` (
`fid` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `feedback` varchar(180) NOT NULL,
  `rating` int(11) NOT NULL,
  `likes` int(11) NOT NULL DEFAULT '0',
  `feed_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");

$retval=mysqli_query($conn, "ALTER TABLE `feedbacks`
ADD CONSTRAINT `feedbacks1` FOREIGN KEY (`rid`) REFERENCES `recetat`(`rid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `feedbacks2` FOREIGN KEY (`id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;");

$retval=mysqli_query($conn, "CREATE TABLE IF NOT EXISTS `replies`(
`rid` int(11) NOT NULL,
  `fid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `reply` varchar(80) NOT NULL,
  `reply_date` datetime,
) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
*/
$retval=mysqli_query($conn, "ALTER TABLE `replies`
ADD CONSTRAINT `replies1` FOREIGN KEY (`fid`) REFERENCES `feedbacks` (`fid`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `replies2` FOREIGN KEY (`uid`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;");


if(!$retval)
{
	die("Baza e teddd dhenave nuk u kriju.".mysqli_connect_error());
}
echo "BDH u krijua me sukses";


?>