<?php  
session_start();
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
$sessionLength=count($_SESSION['inputfromprompt']);
for ($i=0; $i<$sessionLength ; $i++) { 
	echo $_SESSION['inputfromprompt'][$i];
}
// echo $inputArray[0]."<br>".$inputArray[1]."<br>".$inputArray[2]."<br>".$inputArray[3]."<br>".$inputArray[4]."<br>".$inputArray[5]."<br>".$inputArray[6]."<br>".$inputArray[7]."<br>".$inputArray[8]."<br>".$inputArray[9]."<br>".$inputArray[10]."";



?>