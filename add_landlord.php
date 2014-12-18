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

<script language = "Javascript">
function Validate(){
    var name1 = document.getElementById('name1');
    var name2 = document.getElementById('name2');
    var name3 = document.getElementById('name3');
    var telephone2 = document.getElementById('telephone2');
    var telephone3 = document.getElementById('telephone3');
    var EGN = document.getElementById('EGN');
    var check = true;

    //проверки за името
    if(!(notEmpty(name1,"Въведете името си!")))
        return false;
    if(!(lengthRestriction(name1, 3, 15, "Вашето име!")))
        return false;

    //проверки за второто име
    if(!(notEmpty(name2,"Въведете Вашето второ име!")))
        return false;
    if(!(lengthRestriction(name2, 4, 20, "Вашето второ име!")))
        return false;

    //проверки за фамилията
    if(!(notEmpty(name3,"Въведете фамилията си!")))
        return false;
    if(!(lengthRestriction(name3, 4, 20, "Вашата фамилия!")))
        return false;

    //проверка на числата за телефоните (за първите 4)
    if(!isNumeric(telephone2, "Въведете числа за първите номера от телефона!"))
        return false;
    if(checkTelephone(telephone2, 4) == false)
        return false;

    //проверка за числата на телефоните (за последните 3)
    if(!isNumeric(telephone3, "Въведете числа за последните номера от телефона!"))
        return false;
    if(checkTelephone(telephone3, 3) == false)
        return false;
    
    return check;
}

function isValidEGN(s){
    var t = [2,4,8,5,10,9,7,3,6];
    var helperMsg = "Невалидно ЕГН!"
    if(typeof s != 'string'){
        alert(helperMsg);
	elem.focus();
        return false;
    }
    if(s.length != 10){
        alert(helperMsg);
	elem.focus();
        return false;
    }
    var rv; var rr = 0;
    for(var i=0;i<9;i++){
        if(s[i] == 0)
            continue ;
        rr = rr + (s[i] * t[i]);
    }
    var chs = 0;
    chs = (rr % 11);
    if(chs == 10)
        chs = 0;
    if(s[9] == chs)
        return true;
    else{
        alert(helperMsg);
	elem.focus();
        return false;
    }
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
}

function checkTelephone (elem, constraint){
    var valElem = elem.value.length;

    if (valElem != constraint){
        alert("Въведете " + constraint + " цифри!");
        return false
    } else
        return true;
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
                    <h3>Добави наемодател</h3>
			<form name="AddLandLordForm" method="post"
                         action="add_landlord_validation.php" onsubmit="return Validate();">
                            <p>
				<label>имена: </label><br />
				<input name="name1" type="text" id ="name1" size ="10"/>
                                <input name="name2" type="text" id ="name2" size ="15"/>
                                <input name="name3" type="text" id ="name3" size ="15"/>
                            </p>

                            <p>
                                <label>телефон: </label> <br>
                                <select id="subject" name="telephone1">
                                    <option value="087">087</option>
                                    <option value="088">088</option>
                                    <option value="089">089</option>
                                </select>
                                <input name="telephone2" type="text"
                                       id="telephone2" size="4"/>
                                <input name="telephone3" type="text"
                                       id="telephone3" size="3"/>
                            </p>

                            <p>
                                <label> ЕГН: </label> <br>
                                <input name="EGN" type="text" id="EGN" size="10">
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