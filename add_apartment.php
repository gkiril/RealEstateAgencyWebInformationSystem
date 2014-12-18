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

<script language = "Javascript">
function Validate()
{
    var addrss = document.getElementById('addrss');
    var city = document.getElementById('city');
    var area = document.getElementById('area');
    var price = document.getElementById('price');

    //проверки за адреса
    if(!(notEmpty(addrss,"Въведете адрес!")))
        return false;
    if(!(lengthRestriction(addrss, 10, 100, "адреса!")))
        return false;

    //проверки за градът
    if(!(notEmpty(city,"Въведете градът!")))
        return false;
    if(!(lengthRestriction(city, 4, 30, "градът!")))
        return false;

    //проверки за площта
    if(!(notEmpty(area,"Въведете площта!")))
        return false;
    //не работи!
    if(!(isNumeric(area, "Въведете САМО числа за площта!")))
        return false;

    //проверки за цената ne raboti!!!
    if(!(notEmpty(price,"Въведете цената!")))
        return false;
    if(!isNumeric(price, "Въведете числа за цената!"))
        return false;
}

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function lengthRestriction(elem, min, max, msg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Въведете измежду " +min+ " и " +max+ " символа за " + msg);
		elem.focus();
		return false;
	}

function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
}
</script>

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
                        <h3>Добави жилище</h3>
			<form name="add_apartment" method="post" 
                              action="add_app_validation.php" onsubmit="return Validate();">

                            <?php
                            include "config.php";
                                
                            ?>
                            <p>
				<label>Адрес:</label><br />
                                <textarea name="adrs" cols="40" rows="4" id="addrss"
                                </textarea>
                            </p>

                            <p>
                                <label>град: </label> <br>
                                <input name="city" type="text"  size="30" id="city">
                            </p>
                            
                            <p>
                                <label>Eтаж: </label><br/>
				<select id="subject" name="FromFloor">
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
                                <input name="area" type="text" size="7" id="area"/>
                            </p>
                            <p>
                            <label>Тип на жилище:</label><br />
                            <?php
                                mysql_query("SET CHARACTER SET utf8");
                                $query="SELECT * FROM type_of_house";

                                $result = mysql_query ($query);
                                echo "<select name=HomeType value=''>kategoriq </option>";

                                while($nt=mysql_fetch_array($result)){
                                    echo "<option value=$nt[TypeOfHouse_PK]>$nt[NameOfType]</option>";
                                }

                                echo "</select>";
                            ?>
                            </p>

                            <p>
				<label>Статус:</label><br />
                                    <select id="subject" name="status" >
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
                                    echo "<select name=furniture value=''>obzavejdane </option>";

                                    while($nt=mysql_fetch_array($result)){
                                        echo "<option value=$nt[TypeOfFurnishing_PK]>$nt[NameOfType]</option>";
                                    }

                                    echo "</select>";
                                ?>
                            </p>

                            <p>
                                <label>Цена на наема: </label><br/>
                                <input name="price" type="text" id ="price" size="7"/>
                            </p>

                            <p>
                            <label>Наемодател: </label><br/>
                            <?php
                            //dropdown menu за наемодателите - извлича стойностите от базата
                            $query="SELECT * FROM landlordtable";

                            $result = mysql_query ($query);
                            echo "<select name=renter value=''>Naemodateli </option>";
                            
                            while($nt=mysql_fetch_array($result)){
                                echo "<option value=$nt[LandLord_PK]>$nt[Name]</option>";
                            }
                            echo "</select>";

                            ?>
                            </p>

                            <p>
                            <label>Разположение: </label><br />
                            <?php
                            $query="SELECT * FROM placement_category";

                            $result = mysql_query ($query);
                            echo "<select name=place value=''>Razpolozenie </option>";

                            while($nt=mysql_fetch_array($result)){
                                echo "<option value=$nt[PlacementCategory_PK]>$nt[Position]</option>";
                            }
                            echo "</select>";
                            ?>
                            </p>

                            <p>
				<label>Допълнителни коментари:</label><br />
                                <textarea name="comments" cols="40" rows="3">
                                </textarea>
                            </p>
                            
                            <p>
                                <input class="button" type="submit" value="Добави"/>
								<input class="button" type="reset" value="Изчисти" />       
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