<?php 
  include "header.php";
  
 ?>
<?php
session_start();
	
if(!isset($_SESSION['username2']))
	 {
	 echo "Достъпът е забранен! Само за администратори!";
	 print "<br><a href='index.php'>Назад</a>";
	    exit();

		}		
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd>

<html>

<head>

<title>Добавяне на жилище</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="author" content="Erwin Aligam - styleshout.com" />
<meta name="description" content="Site Description Here" />
<meta name="keywords" content="keywords, here" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="noarchive" />

<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />

</head>
<body>
<div id="wrap">

	<a name="top"></a>

	<!-- header -->
	<div id="header">

		<br><br>
		<i><center><h2 id="logo-text"><a href="index.php" title="">Информационна система</a></h2><center> </i>
		<p id="intro">за наемане на жилища</p>

		<!-- navigation -->
		<div  id="nav">
			<ul>
				<li><a href="index.php">Начало</a></li>
				<li><a href="search.php">Търси</a></li>
				<li><a href="vhod.php">Вход</a></li>
			
				<li id="current"><a href="add.php">Редактирай</a></li>
				<li><a href="about.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear">
            <div id="content-wrap" >
		<div class="content">
			<?php
                            $back_link = "add_apartment.php";
                            $adrs = $_POST['adrs'];
                            $area = $_POST['area'];
                            $price = $_POST['price'];
                            $FromFloor = $_POST['FromFloor'];
                            $HomeType = $_POST['HomeType'];
                            $status = $_POST['status'];
                            $furniture = $_POST['furniture'];
                            $place = $_POST['place'];
                            $comments = $_POST['comments'];
                            $city = $_POST['city'];
                            $renter = $_POST['renter'];
                                                                                  
                            //превръщане на етажа в число
                            $FromFloor = (int)$FromFloor;
                            
                            //превръща $area в цяло число
                            $area = (int)$area;

                            //типа на жилище 
                            $HomeType = (int)$HomeType;

                            //обзавеждане
                            $furniture = (int)$furniture;

                            //превръща $price в цяло число
                            $price = (int)$price;

                            //превръща renter в цяло число
                            $renter = (int)$renter;
                                    
                            //разположение (raboti)
                            $place = (int)$place;
							
							
                            include "config.php";

                            
                            echo "<p>Въведохте жилище със следващите данни: ";

                            echo "<p>Aдрес: ".$adrs."<br>";
                            echo "Град: ".$city."<br>";
                            echo "Етаж: ".$FromFloor."<br>";
                            echo "Площ: ".$area."<br>";
                            echo "Тип на жилище: ".$HomeType."<br>";
                            echo "Статус: ".$status."<br>";
                            echo "Oбзавеждане: ".$furniture."<br>";
                            echo "Наемодател: ".$renter."<br>";
                            echo "Цена на наема: ".$price."<br>";
                            echo "Разположение: ".$place."<br>";
                            echo "Допълнителни коментари: ".$comments."<br>";

                            
                            $sql = "INSERT INTO hometable (Address,city,Floor,Area,TypeOfHouse_FK,Status,TypeOfFurnishing_FK,MonthRent,LandLord_FK,PlacementCategory_FK,comment)
                            VALUES('".$adrs."','".$city."','".$FromFloor."','".$area."','".$HomeType."','".$status."','".$furniture."','".$price."','".$renter."','".$place."','".$comments."')";

                            if (!mysql_query($sql,$dbconnect)){
                                die('Error: ' . "Това потребителско име вече е заето!");
                            }

                            echo "<p> Успешно добавихте жилище!";
                            
                            echo "<p> Върнете се <a href=".$back_link.">обратно</a> </p>";
                        ?>
		</div>
            </div>
        </div>
	<!-- footer starts -->
	<div id="footer-outer" class="clear">
            <div id="footer-wrap">
		<div class="content">

			<!-- columns starts -->
			<div class="columns">
				<div class="col">
					<p class="copyright">
						&copy;2010 всички права запазени! &nbsp;
					</p>
				</div>
				<div class="col">
				</div>
			<!-- columns ends -->
			</div>
		</div>
	<!-- footer ends -->
            </div>
            <div id="footer-bottom">
                <p>
			<a href="index.php">Начална страница</a> |
			<a href="#top">Нагоре</a>
			&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
		</p>
            </div>
    </div>
</div>
</body>
</html>