<?php 
  include "header.php";
  
 ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd>

<html>

<head>

<title>Вход</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/screen.css" />

<script type='text/javascript'>
function notEmpty(elem1, elem2){
	if(elem1.value.length == 0){
		helperMsg = "Не въведохте потребителското си име! Въведете поне 5 символа!";
                alert(helperMsg);
		elem1.focus();
		return false;
	}
        else if (elem1.value.length < 5){
                helperMsg = "Въведете поне 5 символа за потребителското си име!";
                alert(helperMsg);
                elem1.focus();
                return false;
        }
        
        if(elem2.value.length == 0){
		helperMsg = "Не въведохте паролата си! Въведете поне 6 символа!";
                alert(helperMsg);
		elem2.focus();
		return false;
	}
        else if (elem2.value.length < 6){
                helperMsg = "Въведете поне 6 символа за паролата си!";
                alert(helperMsg);
                elem2.focus();
                return false;
        }

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
				<li id="current"><a href="vhod.php">Вход</a></li>
				<li><a href="register.php">Регистрирай се</a></li>
			
				<li><a href="about.php">За проекта</a></li>		
			</ul>		
		</div>				
	
	</div>	
	<!-- header ends -->
	
	<!-- content starts -->
	
        <div id="content-outer" class="clear" >
            <div id="content-wrap" >
		<div class="content">
                        
                        <h3>Вход:</h3>
			<form action="vhod_validation.php"
                              method="post"
                              id="contactform"
                              onsubmit="return notEmpty(name,psw)">

                                <p>
					<label>Потребителско име: <font color="#FF0400"> * </font> </label><br />
                                        <input name="username" type="text" id="UserName" size="20">

				</p>
				
				<p>	
					<label>Парола: <font color="#FF0400"> * </font> </label><br />
					<input id="psw" name="password" type="password" size="20"/>
				</p>
				
				<p>
				     <input type="hidden" name="login" value="x1" />
					<input class="button" type="submit" value="Вход" size="20"
                                               onclick="notEmpty(document.getElementById('name', 'psw'))"/>
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
        </div>
	<!-- footer ends -->
	<div>
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