<?php
session_start();

$objectives = $_SESSION['optradio2'];
$time = $_GET['optradioTime'];
$_SESSION['optradioTime'] = $time;
  
echo $_SESSION['optradioTime'];
echo $objectives;
?>
