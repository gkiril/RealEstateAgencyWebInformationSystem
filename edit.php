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

<title>Редактиране</title>
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
		<i><center><h2 id="logo-text"><a href="index.php" title="">
                                Информационна система</a></h2><center> </i>
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

                    ?>
                   <form name= 'EditForm' method='post'
                      action='edit2.php'  id='EditForm'>

                       <input type='hidden' id='K' name='K' value='<?php echo $PK;?>'/>
                       

                   <p>
                   <label>Адрес:</label><br />
                         <textarea name='Adres' cols='40' rows='4' id='Adres'>
                                <?php echo $ADDRESS;?>
                         </textarea>
                    </p>;

                    <?php
                        echo "<p>";
                        echo "<label>Град: </label> <br>
                                <input name='Grad' type='text'
                                size='30' id='Grad'
                                value = '".$CITY."'> <br>";
                        echo "</p>";
                    ?>
                    <p>
                     <label>Eтаж: </label><br/>
				<select id="subject" name="Etaj">
					<option value="1">&nbsp;&nbsp;1</option>
                                        <option value="2">&nbsp;&nbsp;2</option>
                                        <option value="3">&nbsp;&nbsp;3</option>
					<option value="4">&nbsp;&nbsp;4</option>
					<option value="5">&nbsp;&nbsp;5</option>
					<option value="6">&nbsp;&nbsp;6</option>
					<option value="7">&nbsp;&nbsp;7</option>
					<option value="8">&nbsp;&nbsp;8</option>
					<option value="9">&nbsp;&nbsp;9</option>
					<option value="10">10 </option>
					<option value="11">11</option>
					<option value="12">12</option>
					<option value="13">13</option>
					<option value="14">14</option>
					<option value="15">15</option>
					<option value="16">16</option>
					<option value="17">17</option>
					<option value="18">18</option>
					<option value="19">19</option>
					<option value="20">20</option>
					<option value="21">21</option>
					<option value="22">22</option>
					<option value="23">23</option>
					<option value="24">24</option>
					<option value="25">25</option>
                                </select>
                     </p>
                     <p>
                          <label for="subject">Площ: </label><br/>
                          <input name="Plosht" type="text"
                                 value ="<?php echo $AREA; ?>"size="7"
                                 id="Plosht"/>
                     </p>

                     <p>
                         <label>Тип на жилище:</label><br />
                          <?php
                                mysql_query("SET CHARACTER SET utf8");
                                $query="SELECT * FROM type_of_house";

                                $result = mysql_query ($query);
                                echo "<select name=Tip_j value=''>kategoriq
                                    </option>";

                                while($nt=mysql_fetch_array($result)){
                                    echo "<option value=$nt[TypeOfHouse_PK]>
                                    $nt[NameOfType]</option>";
                                }

                                echo "</select>";
                            ?>
                     </p>

                     <p>
			<label>Статус:</label><br />
                        <select id="subject" name="Status" >
                            <option value="n">Незаето</option>
                            <option value="z">Заето</option>
                        </select>
                     </p>

                     <p>
                         <label>Обзавеждане: </label><br />
                         <?php
                              mysql_query("SET CHARACTER SET utf8");
                              $query="SELECT * FROM type_of_furnishing";

                              $result = mysql_query ($query);
                              echo "<select name=Obzavejdane value=''>obzavejdane
                                  </option>";

                              while($nt=mysql_fetch_array($result)){
                                 echo "<option value=$nt[TypeOfFurnishing_PK]>
                                  $nt[NameOfType]</option>";
                              }

                             echo "</select>";
                         ?>
                     </p>

                     <p>
                         <label>Цена на наема: </label><br/>
                         <input name="Cena" type="text"
                                id ="Cena" size="7" value="
                             <?php echo $MRENT?>"/>
                     </p>

                     <p>
                            <label>Наемодател: </label><br/>
                            <?php
                            //dropdown menu за наемодателите - извлича
                            //стойностите от базата
                            $query="SELECT * FROM landlordtable";

                            $result = mysql_query ($query);
                            echo "<select name=Naemodatel value=''>Naemodateli
                                </option>";

                            while($nt=mysql_fetch_array($result)){
                                echo "<option value=$nt[LandLord_PK]>$nt[Name]
                                </option>";
                            }
                            echo "</select>";

                            ?>
                    </p>

                    <p>
                            <label>Разположение: </label><br />
                            <?php
                            $query="SELECT * FROM placement_category";

                            $result = mysql_query ($query);
                            echo "<select name=Razpolojenie value=''>
                                Razpolozenie </option>";

                            while($nt=mysql_fetch_array($result)){
                                echo "<option value=$nt[PlacementCategory_PK]>
                                $nt[Position]</option>";
                            }
                            echo "</select>";
                            ?>
                            </p>

                            <p>
				<label>Допълнителни коментари:</label><br />
                                <textarea name="Komentari" cols="40" rows="3">
                                <?php echo $COM?></textarea>
                            </p>

                            <p>
                                <input class="button" type="submit"
                                       value="Редактирай!"/>
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
						&copy;2010 всички права
                                                запазени! &nbsp;
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
		<a href="http://www.bluewebtemplates.com/" 
                   title="Website Templates">website templates</a>
                by <a href="http://www.styleshout.com/">styleshout</a>
            </p>
	</div>
</div>

</body>
</html>