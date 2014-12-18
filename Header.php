<?php   
    session_start();
    include "config.php"; 
	
	 if(!isset($_SESSION['username']))
	 {
	 }
	 else 
	 {
	   
	   echo "<a href = 'Logout.php'/>Изход </a> <br>";
	   
	 }
     if (!isset($_SESSION['username2']))
	 {
		
	 }
	 else 
	 {
	   echo "<a href = 'Logout2.php'/>Изход за администратори </a> <br>";
	 }

?>




