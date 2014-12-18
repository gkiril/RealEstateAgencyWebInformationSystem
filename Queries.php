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

<title>Заявка</title>
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
				           <li><a href="index2.php">Начало</a></li>
                            <li><a href="search2.php">Търси</a></li>
                            <li><a href="vhod2.php">Вход</a></li>
                            <li id="current"><a href="add.php">Редактирай</a></li>
                            <li><a href="about2.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear">
            <div id="content-wrap" >
		<div class="content">
			              <?php
                            include "config.php";

                            $query="SELECT * FROM rent";
                            $result = mysql_query ($query);

                            $br = 0;
                            $br = (int)$br;

                            while($row = mysql_fetch_array($result))
                            {
                                echo "<form name= 'QueryForm" . $br . "' method='post'
                                action='Queries2.php'  id='QueryForm".$br."'>";

                                $br++;

                                echo "<p>";
                                echo "<b>Заявка №: ".$row['Rent_PK']."<br>".
                                     "<b>Адрес: </b> ".$row['Address'] . "<br>" .
                                     "<b>Град:</b> ". $row['city'] . "<br>".
                                     "<b>Площ: </b>".$row['Area'] . "<br>".
                                     "<b>Етаж: </b>".$row['Floor']."<br>".
                                     "<b>Тип на жилище: </b>".
                                        $row['TypeOfHouse']."<br>".
                                     "<b>Статус: </b>".$row['Status'].
                                        "<br>".
                                     "<b>Тип на обзавеждане:</b> ".
                                        $row['TypeOfFurnishing']."<br>".
                                     "<b>Месечен наем: </b>".
                                        $row['MonthRent'] . "<br>".
                                     "<b>Наемодател:</b> ".$row['LandLord'].
                                        "<br>".
                                     "<b>Местоположение:</b> ".
                                        $row['PlacementCategory']."<br>".
                                     "<b>Допълнителни коментари: </b>" .
                                        $row['comment']. "<br>";

                                echo "<input type='hidden' id='PK' name='PK'
                                       value='".$row['Rent_PK']."'/>";
                                echo "<input type='hidden' id='FLOOR'
                                    name='FLOOR' value ='".$row['Floor']."'/>";
                                echo "<input type='hidden' id='HOME_PK'
                                    name='HOME_PK' value='".$row['Home_PK']."'/>";
                                echo "<input type='hidden' id='ADD' 
                                    name='ADDRESS' value='".$row['Address'].
                                    "' />";
                                echo "<input type='hidden' id='CIT'
                                    name='CITY' value='".$row['city']."' />";
                                echo "<input type='hidden' id='ARE'
                                    name='AREA' value='".$row['Area']."' />";
                                echo "<input type='hidden' id='MRENT' 
                                    name='MRENT' value='".$row['MonthRent'].
                                    "' />";
                                echo "<input type='hidden' id='COM' name='COM'
                                    value='".$row['comment']."' />";
                                echo "<input type='hidden' id='TIP_J'
                                       name='TIP_J'
                                       value='". $row['TypeOfHouse']."' />";
                                echo "<input type='hidden' id='STATUS'
                                       name='STATUS'
                                       value='".$row['Status']."' />";
                                echo "<input type='hidden' id='FURNITURE'
                                       name='FURNITURE'
                                       value='".$row['TypeOfFurnishing']."' />";
                                echo "<input type='hidden' id='FURNITURE'
                                       name='FURNITURE'
                                       value='".$row['TypeOfFurnishing']."' />";
                                echo "<input type='hidden' id='LANDLORD'
                                       name='LANDLORD'
                                       value='".$row['LandLord']."' />";
                                echo "<input type='hidden' id='PLACE'
                                       name='PLACE'
                                       value='".$row['PlacementCategory'].
                                       "' />";
                                echo "<input type='hidden' id='HOME_FK'
                                    name='HOME_FK' value='".$row['Home_FK']."'/>";

                                echo "</p>";

                                echo "<br>";
                                echo " <input class='button' type='submit' 
                                    name='YES' value='Да'/>";
                                echo " <input class='button' type='submit'
                                    name='NO' value='Не'/>";
                            echo "</form>";
                        }
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

</body>
</html>