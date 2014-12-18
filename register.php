<?php 
  include "header.php";
  
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd>

<html>

<head>

<title>Регистрация</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />

<script language = "Javascript">

function Validate()
{
    var name1 = document.getElementById('name1');
    var name2 = document.getElementById('name2');
    var name3 = document.getElementById('name3');
    var user_name = document.getElementById('user_name');
    var password_field = document.getElementById('password_field');
    var password_field2 = document.getElementById('password_field2');
    var email = document.getElementById('email');
    var telephone2 = document.getElementById('telephone2');
    var telephone3 = document.getElementById('telephone3');
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

    //проверки за потребителското име
    if(!(notEmpty(user_name,"Въведете потребителското име!")))
        return false;
    if(!(lengthRestriction(user_name, 5, 20, "потребителското име!")))
        return false;
    
    //proverki za password
    if(!(notEmpty(password_field,"Въведете паролата си!")))
        return false;
    if(!(lengthRestriction(password_field, 6, 20, "паролата!")))
        return false;
    
    //proverki za potrvryzdavane na parolata
    if(!(notEmpty(password_field2,"Потвърдете паролата си!")))
        return false;
    if(!(lengthRestriction(password_field2, 6, 20, "потвръждането на паролата!")))
        return false;

    //проверка за потвръждаване на паролата с оригиналната парола
    if(password_field.value != password_field2.value){
        alert("Паролите не съвпадат!");
        return false;
    }

    //проверка за електронна поща
    if(!emailValidator(email, "Въведете валидна e-mail адреса!"))
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

function notEmpty(elem, helperMsg){
	if(elem.value.length == 0){
		alert(helperMsg);
		elem.focus(); // set the focus to this input
		return false;
	}
	return true;
}

function checkTelephone (elem, constraint){
    var valElem = elem.value.length;

    if (valElem != constraint){
        alert("Въведете " + constraint + " цифри!");
        return false
    } else
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

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
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
				<li id="current"><a href="register.php">Регистрирай се</a></li>
			
				<li><a href="about.php">За проекта</a></li>
			</ul>
		</div>

	</div>
	<!-- header ends -->

	<!-- content starts -->
	<div id="content-outer" class="clear" ><div id="content-wrap" >
		<div class="content">
		
                    <h3>Регистрирай се: </h3>

                    <form name="registerForm" action="register_validation.php"
                              method="post" onsubmit="return Validate();">
				<p>
				
					<label>имена:<font color="#FF0400"> * </font> </label><br />
					 
					<input name="name1" type="text" id ="name1" size ="10"/>
                                        <input name="name2" type="text" id ="name2" size ="15"/>
                                        <input name="name3" type="text" id ="name3" size ="15"/>
				</p>

				<p>
					<label>потребителско име <font color="#FF0400"> * </font></label><br />
					<input name="user_name" type="text" id ="user_name" size="20"/>
				</p>

				<p>
					<label>парола: <font color="#FF0400"> * </font></label><br />
					<input name="password_field" type="password"
                                               id="password_field" size="30" />
				</p>

				<p>
					<label>потвърди паролата: <font color="#FF0400"> * </font></label><br />
					<input name="password_field2" type="password"
                                               id="password_field2" size="30"/>
				</p>

				<p>
					<label>e-mail: <font color="#FF0400"> * </font></label><br />
					<input name="email" type="text"
                                               id="email" size ="50"/>
				</p>

                                <p>
                                    <label>телефон: <font color="#FF0400"> * </font></label> <br>
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
					<input class="button" type="submit" value="Регистрирай се!"/>
					  <input class="button" type="reset" value="Изчисти" />      
				</p>
			</form>
		</div>
	</div>

	<!-- footer starts -->
	<div id="footer-outer" class="clear"><div id="footer-wrap">
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
</div>
</body>
</html>