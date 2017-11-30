<?php
session_start();
include("conf.php");

$objectives = $_SESSION['optradio2'];

/*for time T1 & T2*/
$time = $_GET['optradioTime'];
$_SESSION['optradioTime'] = $time;

$ObjId= $objectives;
$TimeC= $_SESSION['optradioTime'];
$sql = $dbh->prepare('SELECT * FROM flow WHERE Obj_ID=? AND Time_cuvis=?');
$sql->execute(array($ObjId, $TimeC));
if ($result = $sql->fetch())
{
	// for($i=1;$i<2;$i++)
	// { 
	// 	echo "" . $result[$i].   "<br>";
	// }

	$ObjId=$result['Obj_ID'];
	$TimeC=$result['Time_cuvis'];
	$FlowPrompts = $result['Flow_prompts'];
	$_SESSION['Strategy'] = $result['Strategy'];


}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Cuvis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/default.css">
</head>
<body>
	<form class="margin">

		<div class="col-lg-1">
		</div>
		<div class="col-lg-10 div" id="cuvisflow">
			<h4><strong>Database cuvis flow here</strong></h4>


			<?php

			$Parr = explode(",",$FlowPrompts);
			$_SESSION['promptSequence']= $Parr;
			$Parrlength = count($_SESSION['promptSequence']);
			$_SESSION['countPrompts']= $Parrlength;
			$_SESSION['currentPromptIndex']= 0;
			$_SESSION['currentPromptID']= $_SESSION['promptSequence'][0];
			// $_SESSION['domain'] =  "CSE";


			echo "<br>";
			for($x = 0; $x < $Parrlength; $x++) {
				echo $_SESSION['promptSequence'][$x];
				echo "<br>";	

			}
			header('Location: 1.php');
			?>
		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-12">
		</div> 


		<div class="col-lg-1">
		</div>
		<div class="col-lg-10 div" id="Example">


		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-12">
		</div> 
		<!--Input Text 1  -->
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10 div" id="input1_text">


		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-12">
		</div> 
		<!-- input Text 1.1 -->	
		<div class="col-lg-1">
		</div>
		<div class="col-lg-10 radio div" id="input1_1_text">

		</div>
		<div class="col-lg-1">
		</div>
		<div class="col-lg-12">
		</div> 

<script type="text/javascript"></script>


	</form>
</body>


</html>
