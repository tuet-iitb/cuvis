<?php
// session_start();

 // include("conf.php");
 
$array1 = $_SESSION;

$i=0;
$array2 = array_keys($array1);

for ($i=0; $i < sizeof($array2); $i++)
{ 
	// echo "<br>".$array2[$i].": ".$array1[$array2[$i]]."<br>";
			$tempCol = $array2[$i];
			$sql = $dbh->prepare("SELECT * FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = 'test' AND TABLE_NAME = 'user_info' AND COLUMN_NAME = ?");
			$sql->execute(array($tempCol));
			if ($result = $sql->fetch())
			{

				 // echo "Column Present";
			}
			else
			{
				// echo "Column not Present ".$tempCol;
				$sql1 = $dbh->prepare("ALTER TABLE user_info ADD ".$tempCol." TEXT;");
				$sql1->execute();
			}

			//Logging the Values
			if($tempCol!="promptSequence")
			{

			$sql = $dbh->prepare("SELECT * FROM user_info WHERE username = ? AND sessionName = ? ");
			$sql->execute(array($_SESSION['username'], $_SESSION['sessionName']));
			if ($result = $sql->fetch())
			{

				 // update table if row exists
				$sql1 = $dbh->prepare("UPDATE `user_info` SET ".$tempCol."=? WHERE username = ? AND sessionName = ?  ; ");
				$sql1->execute(array($_SESSION[$tempCol], $_SESSION['username'], $_SESSION['sessionName']));
			}
			else
			{
				// insert into tabe if row does not exist
				// echo "Column not Present ".$tempCol;
				$sql1 = $dbh->prepare("INSERT INTO `user_info` (".$tempCol.", sessionName) VALUES(?,?);");
				$sql1->execute(array($_SESSION[$tempCol], $_SESSION['sessionName']));
			}

		}

			//******************


			
}

?>


