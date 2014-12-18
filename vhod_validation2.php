<?php 
      include "header.php";
   
   function Login2($username2, $password2)
   {
     $query=" SELECT User_name, password FROM users where User_name='$username2' and password='$password2' and Permission = 'admin'" ;
	 $result=mysql_query($query);
	 echo mysql_error();
	 $num=mysql_num_rows($result);
	  if($num==0)
	  {
	   return false;
	  }
	  else
	  return true;

   }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd>

<html>

<head>

<title>Вход</title>
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
		<i><center><h2 id="logo-text"><a href="index.php" title="">Информационна система</a></h2></center> </i>
		<p id="intro">за наемане на жилища</p>					
		
		<!-- navigation -->
		<div  id="nav">
			<ul>
				<li><a href="index2.php">Начало</a></li>
				<li><a href="search2.php">Търси</a></li>
				<li id="current"><a href="vhod2.php">Вход</a></li>
				<li><a href="add.php">Редактирай</a></li>
			
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
			
   
   $username2=$_POST['username2'];
   $password2=$_POST['password2'];
 
    if (Login2($username2,$password2))
	{
	   $_SESSION['username2']=$username2;
	 
	 
	   echo "<center><b> Добре дошъл администратор, $username2 </b></center> ";
           
	}		
		
   else 
	{
	echo "<center><b> Грешно администраторско име или парола! </b></center> " ; 
	echo "<center><b><a href='vhod2.php'>Вход</a></b></center>";
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
	<!-- footer ends -->
            </div>
        </div>
	<div id="footer-bottom">	
        <p>
			<a href="index2.php">Начална страница</a> |
			<a href="#top">Нагоре</a>
			&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
		</p>
	</div>		
</div>

</body>
</html>