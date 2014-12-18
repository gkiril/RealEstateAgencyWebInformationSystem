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

<title>Добавяне</title>
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
                    <h3>Добавяне: </h3>
			<form action="add_apartment.php" method="get" id="AddAppartmentForm">
			<p>
				Ако искате да добавите ново жилище, натиснете на бутона "добави жилище"
				<input class="button" type="submit" value="Добави жилище" 
                                       align ="right"/>
			</p>
                        </form>
                    
                        <form action="add_landlord.php" method="get" id="AddLandlordForm">
			<p>
				Ако искате да добавите нов наемодател, натиснете на бутона "добави наемодател"
				<input class="button" type="submit" value="Добави наемодател" 
                                       align ="right"/>
			</p>
                        </form>

                        <form action="add_placement.php" method="get" id="AddPlacementForm">
			<p>
				Ако искате да добавите новo местоположение, натиснете на бутона "добави местоположение"
                                <br>
                                <input class="button" type="submit" value="Добави местоположение"
                                       align ="right"/>
			</p>
                        </form>

                        <form action="add_house_type.php" method="get" id="AddHouseTypeForm">
			<p>
				Ако искате да добавите нов тип на жилище, натиснете на бутона "добави нов тип"
                                <br>
                                <input class="button" type="submit" value="Добави нов тип"
                                       align ="right"/>
			</p>
                        </form>

                        <form action="add_furniture.php" method="get" id="AddHouseTypeForm">
			<p>
				Ако искате да добавите нов тип на обзавеждане, натиснете на бутона "добави нов тип"
                                <br>
                                <input class="button" type="submit" value="Добави обзавеждане"
                                       align ="right"/>
			</p>
                        </form>
                    
                    <h3>Изтриване: </h3>

                    <form action="search_del.php" method="get" id="SearchDelete">
                    <p>
                        Ако искате да изтривате, натиснете по-долу върху бутона "Търси", откъдето след
                        процеса на търсене когато намерите желаното жилище, ще можете да го изтриете
                    <br>
                    <input class="button" type="submit" value="Търси"
                                       align ="right"/>
                    </p>
                    </form>
                    
                    <h3>Редактиране: </h3>

                    <form action="search_edit.php" method ="get"
                          id="SearchEdit">
                        <p>
                            Ако искате да модифицирате данните, натиснете 
                            по-долу върху бутона "Търси", откъдето след процеса
                            на търсене когато намерите желаното жилище, ще
                            можете да редактирате неговите данни
                            <br>
                            <input class="button" type="submit" value="Търси"
                                   align ="right"/>
                        </p>
                    </form>

                    <h3>Заявки за наемане:</h3>
                    <form action="queries.php" method="get" id="QueriesForm">
                        <p>
                            Ако желаете да видите всички заявки за наемане
                            подадени от потребителите, натиснете по-долу върху
                            бутона "Виж заявките!", откъдето след това ще
                            одлучите дали едно жилище да бъде наето или не.
                            <br>
                            <input class="button" type="submit"
                                   value="Виж заявките" align="right"/>
                        </p>
                    </form>
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