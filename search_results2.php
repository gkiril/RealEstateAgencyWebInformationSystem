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

<title>Резлутати от търсене</title>
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
				<li id="current"><a href="search2.php">Търси</a></li>
				<li><a href="vhod2.php">Вход</a></li>
				<li><a href="add.php">Редактирай</a></li>
			
				<li><a href="about2.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear">
            <div id="content-wrap" >
		<div class="content">
                    <h3>Резултати от търсенето: </h3>
                    <?php
                        include "config.php";

                        $HomeType1 = $_POST['HomeType1'];
                        $HomeType1 = (int)$HomeType1;

                        $FromPrice = $_POST['FromPrice'];
                        $ToPrice = $_POST['ToPrice'];
                        $FromPrice = (int)$FromPrice;
                        $ToPrice = (int)$ToPrice;

                        $FromArea = $_POST['FromArea'];
                        $ToArea = $_POST['ToArea'];
                        $FromArea = (int)$FromArea;
                        $ToArea = (int)$ToArea;

                        $FromFloor = $_POST['FromFloor'];
                        $ToFloor = $_POST['ToFloor'];
                        $FromFloor = (int)$FromFloor;
                        $ToFloor = (int)$ToFloor;

                        $Furniture = $_POST['furniture'];
                        $Furniture = (int)$Furniture;

                        $query="SELECT * FROM hometable
                                WHERE( (TypeOfHouse_FK =".$HomeType1.")
                                AND (TypeOfFurnishing_FK = ".$Furniture.")
                                AND (MonthRent BETWEEN ".$FromPrice." AND ".$ToPrice.")
                                AND (Floor BETWEEN ".$FromFloor." AND ".$ToFloor . ")
                                AND (Area BETWEEN " .$FromArea. " AND ".$ToArea . ")
                                )";
                        $result = mysql_query ($query);
                        
                        $br = 0;
                        $br = (int)$br;

                        while($row = mysql_fetch_array($result))
                        {
                            $br++;
                            echo "<form name= 'RentForm" . $br . "' method='post'
                            action='rent.php'  id='RentForm".$br."'>";

                            echo "<p>";
                             
							echo "<b> Адрес: </b> ".$row['Address'] . "<br>" .
                                 "<b>Град:</b> ". $row['city'] . "<br>".
                                 "<b>Площ: </b>".$row['Area'] . "<br>".
                                 "<b>Етаж: </b>".$row['Floor']."<br>";
                                 
                            echo "<b>Тип на жилище:</b> ";
                            $query2 = "SELECT NameOfType FROM type_of_house WHERE TypeOfHouse_PK = ".$row['TypeOfHouse_FK'];
                            $result2 = mysql_query ($query2);
                            while($row2 = mysql_fetch_array($result2))
                                echo $row2['NameOfType'];

                            echo "<br> <b>Статус: </b>";
                            if ($row['Status']=='z')
                                echo  "заето<br>";
                            else
                                echo "незаето <br>";

                            echo "<b>Тип на обзавеждане:</b> ";
                            $query3 = "SELECT NameOfType FROM type_of_furnishing WHERE TypeOfFurnishing_PK = ".$row['TypeOfFurnishing_FK'];
                            $result3 = mysql_query ($query3);
                            while($row3 = mysql_fetch_array($result3))
                                echo $row3['NameOfType'];

                            echo "<br><b>Месечен наем: </b>". $row['MonthRent'] . "<br>";

                            echo "<b>Наемодател:</b> ";
                            $query4 = "SELECT Name FROM landlordtable WHERE LandLord_PK  = ".$row['LandLord_FK'];
                            $result4 = mysql_query ($query4);
                            while($row4 = mysql_fetch_array($result4))
                                echo $row4['Name'];
                           
                            echo "<br><b>Местоположение:</b> ";
                            $query5 = "SELECT Position FROM placement_category WHERE PlacementCategory_PK  = ".$row['PlacementCategory_FK'];
                            $result5 = mysql_query ($query5);
                            while($row5 = mysql_fetch_array($result5))
                                echo $row5['Position'];
                            
                            echo "<br><b>Допълнителни коментари: </b>" . $row['comment']. "<br>";
                            echo "</p>";

                            echo "<br>";
                            if ($row['Status']=='n')
                                //echo " <input class='button' type='submit' name='naemai".$br."' value='Наемай'/>";
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
			<a href="index2.php">Начална страница</a> |
			<a href="#top">Нагоре</a>
			&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
		</p>
	</div>
</div>

</body>
</html>