<?php
session_start();
//session radio2 variable
// database configuration file
//session variable store into database code
include("conf.php");
include("logData.php");

// $_SESSION['previousPromptID'] = $_SESSION['currentPromptID'];
// $_SESSION['previousPromptIndex'] = $_SESSION['currentPromptIndex'];

//Code to store prompt inputs into session variables
$keysGET=array_keys($_GET);
// print_r (($keysGET));
// echo (sizeof($keysGET));
for ($i=0; $i < sizeof($keysGET); $i++) { 
	echo $_SESSION['currentPromptID'].($keysGET[$i]);


	$strTemp = $_SESSION['currentPromptID'].($keysGET[$i]);
	$_SESSION[$strTemp]=$_GET[$keysGET[$i]];

	// echo ", Value = ".($_GET[$keysGET[$i]]);
	echo "<br>";
}
// echo $_SESSION['P24input1_text'];


//Code to switch the environment variables for generating the next Prompts page
if(isset($_SESSION['promptSequence']) && ($_SESSION['currentPromptIndex']<($_SESSION['countPrompts']-1)))
{
	echo $_SESSION['currentPromptIndex'];
	//skipping logic
	
	// if($_SESSION['optradio2'] === 'Obj3' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P11' && $_SESSION['P11input2_radio_element'] === '2')
	// {
	// 	$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
	// 	$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// // 		// call the cuvisPromp page

	// 			 header('Location: 1.php');
	
				
	// }
	if ($_SESSION['optradio2'] === 'Obj3' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P17' && $_SESSION['P11binput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 // header('Location: 1.php');
	}
	if ($_SESSION['optradio2'] === 'Obj6' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P21' && $_SESSION['P11ainput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 // header('Location: 1.php');
	}

	if ($_SESSION['optradio2'] === 'Obj5' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P21' && $_SESSION['P11ainput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 	// header('Location: 1.php');
	}
	

	$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
	$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];

	
	// call the cuvisPromp page
	 header('Location: 1.php');
}
else 
{
	if($_SESSION['optradio2'] === 'Obj5' && $_SESSION['optradioTime'] === 'T1' &&  $_SESSION['P11ainput2_radio_element'] === '2')
	{
		$strTemp0="Location: blueprint_".$_SESSION['optradio2']."_".$_SESSION['optradioTime']."_skip.php";
	echo $strTemp0;
	echo $_SESSION['input2_radio_element'];
	header($strTemp0);
	}
	else if($_SESSION['optradio2'] === 'Obj6' && $_SESSION['optradioTime'] === 'T1' &&  $_SESSION['P11ainput2_radio_element'] === '2')
	{
	$strTemp0="Location: blueprint_".$_SESSION['optradio2']."_".$_SESSION['optradioTime']."_skip.php";
	echo $strTemp0;
	echo $_SESSION['input2_radio_element'];
	header($strTemp0);
	}
	else if($_SESSION['optradio2'] === 'Obj3' && $_SESSION['optradioTime'] === 'T1' &&  $_SESSION['P11binput2_radio_element'] === '2')
	{
	$strTemp0="Location: blueprint_".$_SESSION['optradio2']."_".$_SESSION['optradioTime']."_skip.php";
	echo $strTemp0;
	echo $_SESSION['input2_radio_element'];
	header($strTemp0);
	}
	else
	{
	$strTemp0="Location: blueprint_".$_SESSION['optradio2']."_".$_SESSION['optradioTime'].".php";
	echo $strTemp0;
	echo $_SESSION['input2_radio_element'];
	header($strTemp0);
	}
}
// header('Location: cuvisprompt.php');








?>