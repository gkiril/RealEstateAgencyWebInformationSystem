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

<title>Изтриване</title>
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
				<li><a href="register.php">Регистрирай се</a></li>
				<li id="current"><a href="add.php">редактирай</a></li>
				<li><a href="about.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear">
            <div id="content-wrap" >
		<div class="content">
                    <h3>Данни за жилището: </h3>
                    <?php

                        $ADDRESS = $_POST['ADDRESS'];
                        $CITY = $_POST['CITY'];
                        $AREA = $_POST['AREA'];
                        $FLO = $_FLO['FLO'];
                        $TIP_J = $_POST['TIP_J'];
                        $STA = $_POST['STA'];
                        $FURN = $_POST['FURN'];
                        $MRENT = $_POST['MRENT'];
                        $LLORD = $_POST['LLORD'];
                        $POS = $_POST['POS'];
                        $COM = $_POST['COM'];
                        $PK = $_POST['PK'];

                        include "config.php";

                        $sql = "DELETE FROM hometable WHERE Home_PK = ".$PK;

                        if (!mysql_query($sql,$dbconnect)){
                                die('Error: ' . "MySQL ERROR!");
                        }
                        else
                        {
                            echo "<br><center><b>Изтрихте успешно! Вие изтрихте успешно жилище със
                                следващите данни:</center> </b>";

                            echo "<form name= 'RentForm" . $br . "' method='post'
                                action='rent.php'  id='RentForm".$br."'>";
                            echo "<p>";
                            echo "Адреса: ".$ADDRESS."<br>";
                            echo "Град: ".$CITY."<br>";
                            echo "Площ: ".$AREA."<br>";
                            echo "Tип на жилище: ".$TIP_J."<br>";
                            echo "Статус: ".$STA."<br>";
                            echo "Тип на обзавеждане: ".$FURN."<br>";
                            echo "Цена на месечен наем: ".$MRENT."<br>";
                            echo "Наемодател: ".$LLORD."<br>";
                            echo "Местоположение: ".$POS."<br>";
                            echo "Допълнителни коментари: ".$COM."<br>";
                            echo "</p>";
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