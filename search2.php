<?php 
  include "header.php";
  
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd>
<html>

<head>

<title>Търсене</title>
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
				<li id="current"><a href="search2.php">Търси</a></li>
				<li><a href="vhod2.php">Вход</a></li>
			    <li><a href="add.php">Редактирай</a></li>
				
				<li><a href="about.php">За проекта</a></li>		
			</ul>		
		</div>				
	
	</div>	
	<!-- header ends -->
	
	<!-- content starts -->
	<div id="content-outer" class="clear" ><div id="content-wrap" >
	
		<div class="content">
		
			<h3>Търси</h3>		
			
			<form name="SearchForm" method="post"
                            action="search_results2.php"  id="SearchForm">
                                 <?php  
                           include "config.php";   
						         ?>
			
			
				<p>
				<label for="subject">Тип на жилище:</label><br />
                                    <?php
                                        mysql_query("SET CHARACTER SET utf8");
                                        $query="SELECT * FROM type_of_house";

                                        $result = mysql_query ($query);
                                        echo "<select name = HomeType1 value=''>kategoriq </option>";

                                        while($nt=mysql_fetch_array($result)){
                                            echo "<option value=$nt[TypeOfHouse_PK]>$nt[NameOfType]</option>";
                                        }

                                        echo "</select>";
                                    ?>
				</p>	
				
				<p>
				<label for="subject">Цена на наем:</label><br />
				от:
				<select id="subject" name="FromPrice">
           			<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</option>
          			<option value="250">&nbsp;&nbsp;250</option>
          	 		<option value="500">&nbsp;&nbsp;500</option>
					<option value="750">&nbsp;&nbsp;750</option>
					<option value="1000">1000</option>
					<option value="1250">1250</option>
					<option value="1500">1500</option>
					<option value="1750">1750</option>
					<option value="2000">2000</option>
					<option value="2250">2250 </option>
					<option value="2500">2500</option>
					<option value="2750">2750</option>
					<option value="3000">3000</option>
					<option value="3250">3250</option>
					<option value="3500">3500</option>
					<option value="3750">3750</option>
					<option value="4000">4000</option>
					<option value="4250">4250</option>
					<option value="4500">4500</option>
					<option value="4750">4750</option>
					<option value="5000">5000</option>
         		</select>
				
				&nbsp;&nbsp;до:
				<select id="subject" name="ToPrice" >
           			<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</option>
          			<option value="250">&nbsp;&nbsp;250</option>
          	 		<option value="500">&nbsp;&nbsp;500</option>
					<option value="750">&nbsp;&nbsp;750</option>
					<option value="1000">1000</option>
					<option value="1250">1250</option>
					<option value="1500">1500</option>
					<option value="1750">1750</option>
					<option value="2000">2000</option>
					<option value="2250">2250 </option>
					<option value="2500">2500</option>
					<option value="2750">2750</option>
					<option value="3000">3000</option>
					<option value="3250">3250</option>
					<option value="3500">3500</option>
					<option value="3750">3750</option>
					<option value="4000">4000</option>
					<option value="4250">4250</option>
					<option value="4500">4500</option>
					<option value="4750">4750</option>
					<option value="5000">5000</option>
					<option selected="yes" value="6000">6000</option>
         		</select>
				</p>
				
				<p><label for="subject">Площ (в кв. м):</label><br />
					от:
					<select id="subject" name="FromArea" >
					<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</option>
          			<option value="50">&nbsp;&nbsp;&nbsp;&nbsp;50</option>
          	 		<option value="100">&nbsp;&nbsp;100</option>
					<option value="150">&nbsp;&nbsp;150</option>
					<option value="200">&nbsp;&nbsp;200</option>
					<option value="250">&nbsp;&nbsp;250</option>
					<option value="300">&nbsp;&nbsp;300</option>
					<option value="350">&nbsp;&nbsp;350</option>
					<option value="400">&nbsp;&nbsp;400</option>
					<option value="450">&nbsp;&nbsp;450 </option>
					<option value="500">&nbsp;&nbsp;500</option>
					<option value="550">&nbsp;&nbsp;550</option>
					<option value="600">&nbsp;&nbsp;600</option>
					<option value="650">&nbsp;&nbsp;650</option>
					<option value="700">&nbsp;&nbsp;700</option>
					<option value="750">&nbsp;&nbsp;750</option>
					<option value="800">&nbsp;&nbsp;800</option>
					<option value="850">&nbsp;&nbsp;850</option>
					<option value="900">&nbsp;&nbsp;900</option>
					<option value="950">&nbsp;&nbsp;950</option>
					<option value="1000">1000</option>
					</select>
					
					&nbsp;&nbsp;до:
					<select id="subject" name="ToArea">
					<option value="0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0</option>
          			<option value="50">&nbsp;&nbsp;&nbsp;&nbsp;50</option>
          	 		<option value="100">&nbsp;&nbsp;100</option>
					<option value="150">&nbsp;&nbsp;150</option>
					<option value="200">&nbsp;&nbsp;200</option>
					<option value="250">&nbsp;&nbsp;250</option>
					<option value="300">&nbsp;&nbsp;300</option>
					<option value="350">&nbsp;&nbsp;350</option>
					<option value="400">&nbsp;&nbsp;400</option>
					<option value="450">&nbsp;&nbsp;450 </option>
					<option value="500">&nbsp;&nbsp;500</option>
					<option value="550">&nbsp;&nbsp;550</option>
					<option value="600">&nbsp;&nbsp;600</option>
					<option value="650">&nbsp;&nbsp;650</option>
					<option value="700">&nbsp;&nbsp;700</option>
					<option value="750">&nbsp;&nbsp;750</option>
					<option value="800">&nbsp;&nbsp;800</option>
					<option value="850">&nbsp;&nbsp;850</option>
					<option value="900">&nbsp;&nbsp;900</option>
					<option value="950">&nbsp;&nbsp;950</option>
					<option selected="yes" value="1000">1000</option>
					</select>
				</p>
				
				<p>
					<label for="subject">Eтаж: </label><br />
						от:
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
					
					&nbsp;&nbsp;до:
					<select id="subject" name="ToFloor">
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
					<option selected="yes" value="25">25</option>
					</select>
				</p>
				
                                <p>
                                    <label>Обзавеждане: </label><br />
                                    <?php
                            
                                        $query="SELECT * FROM type_of_furnishing";

                                        $result = mysql_query ($query);
                                        echo "<select name=furniture value=''>obzavejdane </option>";

                                        while($nt=mysql_fetch_array($result)){
                                            echo "<option value=$nt[TypeOfFurnishing_PK]>$nt[NameOfType]</option>";
                                        }

                                        echo "</select>";
                                ?>
                            </p>
					
				<p class="no-border">
					<input class="button" type="submit" value="Търси"  />
                      <input class="button" type="reset" value="Изчисти" />                   
				</p>
					
			</form>	
			 
			
		</div>
						
	<!-- content ends -->	
	</div></div>	
		
	<!-- footer starts -->	
	<div id="footer-outer" class="clear"><div id="footer-wrap">				
		<div class="content">	
			<!-- columns starts -->
			<div class="columns">
				<div class="col">						
					<p class="copyright">
						&copy;2010 всички права запазени!&nbsp;
					</p>
				</div>	
				<div class="col">			
				</div>	
			<!-- columns ends -->	
			</div>
		</div>
	<!-- footer ends -->
	</div></div>
	
	<div id="footer-bottom">	
        <p>
			<a href="index2.php">Начална страница</a> |
			<a href="#top">Нагоре</a>
			&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
			<a href="http://www.bluewebtemplates.com/" title="Website Templates">website templates</a> by <a href="http://www.styleshout.com/">styleshout</a>
		</p>
	</div>			

<!-- wrap ends -->
</div>
</body>
</html>
