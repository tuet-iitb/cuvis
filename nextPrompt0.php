<?php
session_start();
// $promptid=$_GET['Prompt_id'];
// $domain=$_GET['Domain'];
//Code to Hanldle previous prompt form inputs
// $input1TextV = $_GET['input1_text'];
// $input11TextV = $_GET['input11_text'];
// $input2RadioElementV = $_GET['input2_radio_element'];
// $input4imageV = $_GET['input4_image'];
// $input5TextV = $_GET['input5_text'];
// $input6TextV = $_GET['input6_text'];
// $input7RadioNestedElementV = $_GET['input7_radioNested_element'];
// $input7NestedStaticTextV = $_GET['input7_nested_staticText'];
// $input7NestedText = $_GET['input7_nested_text'];
// $input7NestedImageText1= $_GET['input7_nested_imageText1'];
// $input7NestedImageText2 = $_GET['input7_nested_imageText2'];

// $_SESSION['input1_text'] = $input1TextV;
// $_SESSION['input11_text'] = $input11TextV;
// $_SESSION['input2_radio_element'] = $input2RadioElementV;
// $_SESSION['input4_image'] = $input4imageV;
// $_SESSION['input5_text'] = $input5TextV;
// $_SESSION['input6_text'] = $input6TextV;
// $_SESSION['input7_radioNested_element'] = $input7RadioNestedElementV;
// $_SESSION['input7_nested_staticText'] = $input7NestedStaticTextV;
// $_SESSION['input7_nested_text'] = $input7NestedText;
// $_SESSION['input7_nested_imageText1'] = $input7NestedImageText1;
// $_SESSION['input7_nested_imageText2'] = $input7NestedImageText2;

// echo $_SESSION['input1_text'];
// echo "<br>";
// echo $_SESSION['input11_text'];
// echo "<br>";
// echo $_SESSION['input2_radio_element'];
// echo "<br>";
// echo $_SESSION['input4_image'];
// echo "<br>";
// echo $_SESSION['input5_text'];
// echo "<br>";
// echo $_SESSION['input6_text'];
// echo "<br>";
// echo $_SESSION['input7_radioNested_element'];
// echo "<br>";
// echo $_SESSION['input7_nested_staticText'];
// echo "<br>";
// echo $_SESSION['input7_nested_text'];
// echo "<br>";
// echo $_SESSION['input7_nested_imageText1'];
// echo "<br>";
// echo $_SESSION['input7_nested_imageText2'];

// $inputArray = array($input1TextV, $input11TextV, $input2RadioElementV, $input4imageV, $input5TextV, $input6TextV, $input7RadioNestedElementV, $input7NestedStaticTextV, $input7NestedText, $input7NestedImageText1, $input7NestedImageText2 );

// $inputArray = $_SESSION['inputfromprompt'];
// $sesionLength=count($inputArray);
// for ($i=0; $i<$sesionLength ; $i++) { 
// 	echo $inputArray[$i];
// 	echo "<br>";
// }
$input1TextV = $_SESSION['input1_text'];
$input11TextV = $_SESSION['input11_text'];
$input2RadioElementV = $_SESSION['input2_radio_element'];
$input4imageV = $_SESSION['input4_image'];
$input5TextV = $_SESSION['input5_text'];
$input6TextV = $_SESSION['input6_text']; 
$input7RadioNestedElementV = $_SESSION['input7_radioNested_element'];
$input7NestedStaticTextV = $_SESSION['input7_nested_staticText'];
$input7NestedText = $_SESSION['input7_nested_text'];
$input7NestedImageText1= $_SESSION['input7_nested_imageText1'];
$input7NestedImageText2 = $_SESSION['input7_nested_imageText2'];

$inputArray = array($input1TextV, $input11TextV, $input2RadioElementV, $input4imageV, $input5TextV, $input6TextV, $input7RadioNestedElementV, $input7NestedStaticTextV, $input7NestedText, $input7NestedImageText1, $input7NestedImageText2 );
$_SESSION['inputfromprompt'] = $inputArray;
$sesionLength=count($_SESSION['inputfromprompt']);
for ($i=0; $i<$sesionLength ; $i++) { 
	echo "inputs are".$_SESSION['inputfromprompt'][$i]."current prompt".$_SESSION['currentPromptIndex']."";
	echo "<br>";

//Code to switch the environment variables for generating the next Prompts page
if(isset($_SESSION['promptSequence']) && ($_SESSION['currentPromptIndex']<($_SESSION['countPrompts']-1)))
{
	$_SESSION['currentPromptIndex']= $_SESSION['currentPromptIndex']+1;
	$_SESSION['currentPromptID']= $_SESSION['promptSequence'][$_SESSION['currentPromptIndex']];
	//call the cuvisPromp page
	 header('Location: 1.php');
}
}
// header('Location: cuvisprompt.php');



	// header('Location: blueprint.html');




?>