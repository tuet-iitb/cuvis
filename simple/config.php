<?php
ini_set("display_errors","on");
if(!isset($dbh)){
 date_default_timezone_set("UTC"); // Set Time Zone
 $host = "localhost"; // Hostname
 $port = "3306"; // MySQL Port : Default : 3306
 $user = "root"; // Username Here
 $pass = ""; //Password Here
 $db   = "test"; // Database Name
 $t = "10";
 if ($t < "11") {
 	# code...
 	$dbh  = new PDO('mysql:dbname='.$db.';host='.$host.';port='.$port,$user,$pass); /*Change The Credentials to connect to database.*/
/* 	echo "connected";
*/ }
 
else

echo " not connected ";
}
?>
