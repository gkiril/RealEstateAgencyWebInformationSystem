<?php
$username = "root";
$password = "";
$hostname = "localhost";
$dbname = "renting";
$dbconnect = mysql_connect($hostname, $username, $password) or
                die("Unable to connect to MySQL");
            if (!$dbconnect){
                die('Could not connect: ' . mysql_error());

            mysql_select_db($dbname, $dbconnect)
                or die("MySQL Error: " . mysql_error());
                        }

            mysql_select_db($dbname, $dbconnect)
                or die("MySQL Error: " . mysql_error());
            mysql_query("SET CHARACTER SET utf8");
			mysql_query("set names utf8", $dbconnect);

?>