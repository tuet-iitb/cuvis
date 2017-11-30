<?php
session_start();
$input1TextV = $_GET['input1_text'];
$input11TextV = $_GET['input11_text'];
$input2RadioElementV = $_GET['input2_radio_element'];
$input4imageV = $_GET['input4_image'];
$input5TextV = $_GET['input5_text'];
$input6TextV = $_GET['input6_text'];
$input7RadioNestedElementV = $_GET['input7_radioNested_element'];
$input7NestedStaticTextV = $_GET['input7_nested_staticText'];
$input7NestedText = $_GET['input7_nested_text'];
$input7NestedImageText1= $_GET['input7_nested_imageText1'];
$input7NestedImageText2 = $_GET['input7_nested_imageText2'];

$_SESSION['input1_text'] = $input1TextV;
$_SESSION['input11_text'] = $input11TextV;
$_SESSION['input2_radio_element'] = $input2RadioElementV;
$_SESSION['input4_image'] = $input4imageV;
$_SESSION['input5_text'] = $input5TextV;
$_SESSION['input6_text'] = $input6TextV;
$_SESSION['input7_radioNested_element'] = $input7RadioNestedElementV;
$_SESSION['input7_nested_staticText'] = $input7NestedStaticTextV;
$_SESSION['input7_nested_text'] = $input7NestedText;
$_SESSION['input7_nested_imageText1'] = $input7NestedImageText1;
$_SESSION['input7_nested_imageText2'] = $input7NestedImageText2;

/*echo $_SESSION['input1_text'];
echo "<br>";
echo $_SESSION['input11_text'];
echo "<br>";
echo $_SESSION['input2_radio_element'];
echo "<br>";
echo $_SESSION['input4_image'];
echo "<br>";
echo $_SESSION['input5_text'];
echo "<br>";
echo $_SESSION['input6_text'];
echo "<br>";
echo $_SESSION['input7_radioNested_element'];
echo "<br>";
echo $_SESSION['input7_nested_staticText'];
echo "<br>";
echo $_SESSION['input7_nested_text'];
echo "<br>";
echo $_SESSION['input7_nested_imageText1'];
echo "<br>";
echo $_SESSION['input7_nested_imageText2'];*/




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="parray.php">
	
	<hiiii>
<input type="submit" name="Next">
</form>

</body>
</html>