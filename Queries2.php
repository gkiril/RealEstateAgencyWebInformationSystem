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
                            $PK = $_POST['PK'];
                            $ADDRESS = $_POST['ADDRESS'];
                            $CITY = $_POST['CITY'];
                            $AREA = $_POST['AREA'];
                            $FLOOR = $_POST['FLOOR'];
                            $TIP_J = $_POST['TIP_J'];
                            $STATUS = $_POST['STATUS'];
                            $FURNITURE = $_POST['FURNITURE'];
                            $MRENT = $_POST['MRENT'];
                            $LANDLORD = $_POST['LANDLORD'];
                            $PLACE = $_POST['PLACE'];
                            $COM = $_POST['COM'];
                            $HOME_FK = $_POST['HOME_FK'];

                            include "config.php";


                            if(isset($_REQUEST['YES'])) {
                                echo "<h3><center> Натиснахте ДА!"."</center></h3><br>";
								
                                echo "Заявка №:".$PK."<br>";
                                echo "Адрес: ".$ADDRESS."<br>";
                                echo "Град: ".$CITY."<br>";
                                echo "Площ: ".$AREA."<br>";
                                echo "Етаж: ".$FLOOR."<br>";
                                echo "Тип на жилище: ".$TIP_J."<br>";
                                echo "Статус: ".$STATUS."<br>";
                                echo "Тип на обзавеждане: ".$FURNITURE."<br>";
                                echo "Месечен наем: ".$MRENT."<br>";
                                echo "Наемодател: ".$LANDLORD."<br>";
                                echo "Местоположение: ".$PLACE."<br>";
                                echo "Допълнителни коментари: ".$COM."<br>";
                                echo "Номер на жилището: ".$HOME_FK."<br>";

                                $sql = "UPDATE hometable
                                        SET Status='z'
                                        WHERE Home_PK= '".$HOME_FK."'";

                                if (!mysql_query($sql,$dbconnect))
                                    die('Error: ' . mysql_error());

                                $sql2 ="DELETE FROM rent
                                        WHERE Rent_PK=".$PK;
                                if (!mysql_query($sql2,$dbconnect))
                                    die('Error: ' . mysql_error());

                                echo "<p> <center> <h3><b>Жилището вече е заето!
                                    <br> Заявката е изтрита!
                                    </b></h2> </center> </p>";
                            }
                            else if(isset($_REQUEST['NO'])) {

                                $sql2 ="DELETE FROM rent
                                        WHERE Rent_PK=".$PK;
                                if (!mysql_query($sql2,$dbconnect))
                                    die('Error: ' . mysql_error());

                                echo "<p> <center> <h3><b>Заявката е изтрита!
                                    </b></h2> </center> </p>";
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