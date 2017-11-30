<?php
session_start();
//session radio2 variable

// //Code to store prompt inputs into session variables
// $keysGET=array_keys($_GET);
// // print_r (($keysGET));
// // echo (sizeof($keysGET));
// for ($i=0; $i < sizeof($keysGET); $i++) { 
// 	echo $_SESSION['currentPromptID'].($keysGET[$i]);


// 	$strTemp = $_SESSION['currentPromptID'].($keysGET[$i]);
// 	$_SESSION[$strTemp]=$_GET[$keysGET[$i]];

// 	// echo ", Value = ".($_GET[$keysGET[$i]]);
// 	echo "<br>";
// }
// // echo $_SESSION['P24input1_text'];


if ($_SESSION['optradio2'] === 'Obj3' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P29' && $_SESSION['P11binput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']-1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 // header('Location: 1.php');
	}
	if ($_SESSION['optradio2'] === 'Obj6' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P26' && $_SESSION['P11ainput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']-1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 // header('Location: 1.php');
	}

	if ($_SESSION['optradio2'] === 'Obj5' && $_SESSION['optradioTime'] === 'T1' && $_SESSION['currentPromptID'] ==='P26' && $_SESSION['P11ainput2_radio_element'] === '2')
	{
		$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']-1;
		$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	// 		// call the cuvisPromp page

				 	// header('Location: 1.php');
	}
	

//Code to switch the environment variables for generating the next Prompts page
if(isset($_SESSION['promptSequence']) && ($_SESSION['currentPromptIndex']<=($_SESSION['countPrompts']-1)) && ($_SESSION['currentPromptIndex'] > 0))
{
	echo $_SESSION['currentPromptIndex'];
	
	

	$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']-1;
	$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];

	
	
	// call the cuvisPromp page
	 header('Location: 1.php');
}
else 
{
	
	header('Location: page3.php');
}


// header('Location: cuvisprompt.php');
?>