<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />
</head>

<body>
<div id="wrap">

	<a name="top"></a>

	<!-- header -->
	<div id="header">

		<br><br>
		<i><center><h2 id="logo-text"><a href="index.php" title="">Информационна система</a></h2></center> </i>
		<p id="intro">за наемане на жилища</p>

		<!-- navigation -->
		<div  id="nav">
			<ul>
				<li><a href="index.php">Начало</a></li>
				<li><a href="search.php">Търси</a></li>
				<li><a href="vhod.php">Вход</a></li>
				<li  id="current"><a href="register.php">Регистрирай се</a></li>
				
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
                    $bck_link = "register.php";
                    $name1 = $_POST['name1'];
                    $name2 = $_POST['name2'];
                    $name3 = $_POST['name3'];
                    $user_name = $_POST['user_name'];
                    $password_field = $_POST['password_field'];
                    $password_field2 = $_POST['password_field2'];
                    $email = $_POST['email'];

                    $telephone1 = $_POST['telephone1'];
                    $telephone2 = $_POST['telephone2'];
                    $telephone3 = $_POST['telephone3'];
                    $telephone = $telephone1." ".$telephone2." ".$telephone3;

                    
                    $full_name = $name1." ".$name2." ".$name3;
                        
					include "config.php";  

                   
                    $sql = "INSERT INTO users (NAME,User_name,password,e_mail, telephone, Permission)
                            VALUES('".$full_name."','".$user_name."', '".$password_field."','".$email."','".$telephone."','user')";

                    if (!mysql_query($sql,$dbconnect)){
                        die('Error: ' . mysql_error());
                        }
                    echo "<p> Вие се регистрирахте успешно!";

                    mysql_close($dbconnect);
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