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

<title>Добавяне на наемодател</title>
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
				
				<li  id="current"><a href="add.php">Редактирай</a></li>
				<li><a href="about.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear">
            <div id="content-wrap" >
		<div class="content">
                    <p>
                        Въведохте наемодател със следващите данни: <br>
                        <?php
                            
							include "config.php";


                            $back_link = "add_landlord.php";

                            $name1 = $_POST['name1'];
                            $name2 = $_POST['name2'];
                            $name3 = $_POST['name3'];

                            $full_name = $name1." ".$name2." ".$name3;

                            $telephone1 = $_POST['telephone1'];
                            $telephone2 = $_POST['telephone2'];
                            $telephone3 = $_POST['telephone3'];

                            $telephone = $telephone1." ".$telephone2." ".$telephone3;

                            $EGN = $_POST['EGN'];

                            echo "Имена: ".$full_name."<br>";
                            echo "Телефон: ".$telephone."<br>";
                            echo "EGN: ".$EGN."<br>";

                            $sql = "INSERT INTO landlordtable (Name,Phone,EGN)
                            VALUES('".$full_name."','".$telephone."','".$EGN."')";

                            if (!mysql_query($sql,$dbconnect)){
                                die('Error: ' . "MySQL ERROR!");
                            }

                            echo "<p> Успешно добавихте наемодател!";

                            echo "<p> Върнете се <a href=".$back_link.">обратно</a> </p>";

                        ?>
                    </p>
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