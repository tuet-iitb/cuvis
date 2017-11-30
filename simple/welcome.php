<?php
 include("session.php");
 include("config.php");
 ?>
<html>
<body>

<!-- Welcome <?php echo $_POST["name"]; ?><br> -->
<!-- Your email address is: <?php echo $_POST["email"]; ?> -->

<?php  
$_SESSION["name"] = $_POST["name"];
$_SESSION["email"] =   $_POST["email"];

// echo $_SESSION["name"]." :"."<br>" .$_SESSION["email"]. "<br>";
?>

 <?php 
$array1 = $_SESSION;

$i=0;
$array2 = array_keys($array1);

for ($i=0; $i < sizeof($array2); $i++)
{ 
	echo "<br>".$array2[$i].": ".$array1[$array2[$i]]."<br>";


			$tempCol = $array2[$i];
			$sql = $dbh->prepare("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'user_info' AND COLUMN_NAME = ?");
			$sql->execute(array($tempCol));
			if ($result = $sql->fetch())
			{

				echo "Column Present";
			}
			else
			{
				echo "Column not Present ".$tempCol;
				$sql1 = $dbh->prepare("ALTER TABLE user_info ADD ".$tempCol." TEXT;");
				$sql1->execute();
			}
			
}
?>
</body>
</html>

<?php

// // $table = "select * from user_info1";
// // $test = mysql_query($table);

// // if (!$test) {

// // 	echo "Database not found";
// 	$create = "CREATE TABLE `test`.'user_info1' ( `name` VARCHAR(100) NOT NULL , `email` VARCHAR(100) NOT NULL )";
// 	    $ok= mysql_query($create);

// 	    if (!$ok) {
// 	    	echo "error";
// 	    }
// 	    else{
// 	    	echo "table created";
// 	    }
// }
// else  {
// 	echo "database found";
?>
