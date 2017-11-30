<?php
session_start();
include("conf.php");
/*$promptid=$_GET['Prompt_id'];
$domain=$_GET['Domain'];*/
/*$_SESSION['currentPromptID']= $promptid;
$_SESSION['currentPromptIndex']= $promptid;*/
$promptid=$_SESSION['currentPromptID'];
$domain=$_SESSION['domain'];
echo $promptid."**********".$domain."<br>";

$sql = $dbh->prepare('SELECT * FROM cuvis_prompttable WHERE prompt_id=? AND domain=?');
$sql->execute(array($promptid, $domain));
if ($result = $sql->fetch())
{
	// for($i=1;$i<2;$i++)
	// { 
	// 	echo "" . $result[$i].   "<br>";
	// }

	$prompID=$result['prompt_id'];
	$guidelines=$result['guidelines'];
	$domain = $result['domain'];
	$example = $result['example'];
	$input1Text = $result['input1_text'];
	$input1TextCaption = $result['input1_text_caption'];
	$input11Text =  $result['input11_text'];
	$input11TextCaption = $result['input11_text_caption'];
	$input2Radio = $result['input2_radio'];
	$input2RadioCaption =$result['input2_radio_caption'];
	$input2RadioOptions = $result['input2_radio_options'];
	$input2RadioOptionCount = $result['input2_radio_optionCount'];
	$input4Image = $result['input4_image'];
	$input4ImageCaption = $result['input4_image_caption'];
	$input5Text = $result['input5_text'];
	$input5TexCaption = $result['input5_text_caption'];
	$input6Text = $result['input6_text'];
	$input6TextCaption = $result['input6_text_caption'];

	$input7RadioNested = $result['input7_radioNested'];
	$input7RadioNestedCaption = $result['input7_radioNested_caption'];
	$input7RadioNestedOptionCount =$result['input7_radioNested_optionCount'];
	$input7RadioOptions = $result['input7_radioNested_options'];

	$input7NestedStaticText = $result['input7_nested_staticText'];
	$input7NestedStaticTextCaption = $result['input7_nested_staticText_caption'];
	$input7NestedStaticTextParentCondtitionNumber = $result['input7_nested_staticText_parentConditionNumber'];

	$input7NestedText = $result['input7_nested_text'];
	$input7NextedTextCaption = $result['input7_nested_text_caption'];
	$input8ParentConditionNo = $result['input7_nested_text_parentConditionNumber'];

	$input7NestedImageText = $result['input7_nested_imageText'];
	$input7ParentConditionNo = $result['input7_nested_imageText_parentConditionNumber'];
	$input7NestedImageTextCaption = $result['input7_nested_imageText_caption'];
	

	
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
	<link rel="stylesheet" href="css/heroic-features.css" >
</head>
<body>
	<form class="margin" action="nextPrompt.php">
		<!-- Guidelines -->
		<!-- <div class="col-lg-1"></div> -->
		<div class="col-lg-12 div " id="guidelines">
			<h4><strong>Guidelines</strong></h4> 
			<span id="guidelines_element" >Database not reachable!</span>

		</div>
		<!-- <div class="col-lg-1"></div> -->
		<!-- <div class="col-lg-12"></div>  -->

		<!--Example  -->
		<!-- <div class="col-lg-1"></div> -->
		<div class="col-lg-12 div" id="example">
			<h4><strong>Example</strong></h4>
			<span id="example_element">If topic = Travelling Salesman Problem
				Students able to construct a tour but unsure whether the chosen tour is the minimum cost tour.</span>
			</div>
			<!-- <div class="col-lg-1"></div> -->
			<!-- <div class="col-lg-12"></div>  -->
			<!--Input Text 1  -->
			<!-- <div class="col-lg-1"> </div> --> 
			<div class="col-lg-12 div" id="input1_text">
				<h4><strong>Input1 text</strong></h4>
				<span id="input1_text_caption">Database not found for input 1 text</span>
				<input class="form-control" id="input1_text_element" type="text">
			</div>
<!-- 			<div class="col-lg-1"></div>
			<div class="col-lg-12"></div> 
		-->			<!-- input Text 1.1 -->	
		<!-- <div class="col-lg-1"> </div> --> 
		<div class="col-lg-12 radio div" id="input11_text">
			<h4><strong>Input 1.1 text</strong></h4>
			<span id="input11_text_caption">Database not fount for caption inputText1.1</span>
			<input class="form-control" id="input11_text_element" type="text">
		</div>
		<!-- 	<div class="col-lg-1"> </div> <div class="col-lg-12"> </div> --> <!-- Input2 Radio -->
		<!-- <div class="col-lg-1"> </div> -->
		<div class="col-lg-12 radio div" id="input2_radio">
			<h4><strong>Input2 Radio</strong></h4>
			<span id="input2_radio_caption"><strong>Select your domain: Databese not found</strong></span><br>
			<label><input type="radio" name="input2_radio_element" >Option 1</label><br>
			<label><input type="radio" name="input2_radio_element" >Option 2</label><br>
			<label><input type="radio" name="input2_radio_element" >Option 3</label><br>
			<label><input type="radio" name="input2_radio_element" >Option 4</label><br>
			<label><input type="radio" name="input2_radio_element" >Option 5</label><br>
		</div>
		<!-- <div class="col-lg-1"> </div> <div class="col-lg-12"> </div> --> 
		<!-- Input 3 radio -->
					<!-- <div class="col-lg-1">
					</div>
					<div class="col-lg-10 radio div" id="input3_radio">
					<h4><strong>Input3 Radio</strong></h4>
						<span id="input3_radio_caption"><strong>Select your instructional setting:</strong></span><br>
						<label><input type="radio" name="option1" id="input3_radio_option1">Option 1</label><br>
						<label><input type="radio" name="option2" id="input3_radio_option2">Option 2</label><br>
						<label><input type="radio" name="option3" id="input3_radio_option3">Option 3</label><br>
						<label><input type="radio" name="option4" id="input3_radio_option4">Option 4</label><br>
						<label><input type="radio" name="option5" id="input3_radio_option5">Option 5</label><br>
					</div>
					<div class="col-lg-1">
					</div>
					<div class="col-lg-12">
					</div>  -->
					<!-- Input 4 image -->	
					<!-- <div class="col-lg-1"></div> -->
					<div class="col-lg-12 div" id="input4_image">
						<h4><strong>Input 4 Image</strong></h4>
						<span id="input4_image_caption"><strong>Image upload</strong></span><br>
						<span><input type="file" name="pic" accept="image/*" id="input4_image_element"></span>
					</div>
					<!-- <div class="col-lg-1"> </div> <div class="col-lg-12"> </div> -->
					<!-- Input 5 text -->
					<!-- <div class="col-lg-1"></div> -->
					<div class="col-lg-12  div" id="input5_text">
						<h4><strong>Input5 Text</strong></h4>
						<span id="input5_text_caption">C] Enter your 'Pair' phase question : database not found for input5_text (Database not found)</span><br>
						<input class="form-control" type="text" id="input5_text_element">
					</div>
					<!-- 		<div class="col-lg-1"> </div> <div class="col-lg-12"> </div> -->
					<!-- Input 6 text -->
					<!-- <div class="col-lg-1"> </div> --> 
					<div class="col-lg-12 div" id="input6_text">
						<h4><strong>Input6 Text</strong></h4>
						<span id="input6_text_caption">D] Enter your 'Share' phase question (if any, other than sharing solution with the class) Database not found for input6_text</span><br>
						<input class="form-control" id="input6_text_element" type="text">
					</div>
					<!-- 					<div class="col-lg-1"> </div> <div class="col-lg-12"> </div> --> 
					<!-- input 7 radio -->
					<!-- <div class="col-lg-1"> </div> -->
					<div class="col-lg-12 radio div" id="input7_radioNested">
						<h4><strong>Input7 Radio Nested</strong></h4>
						<span id="input7_radioNested_caption"><strong>Specify visualization feature to be used: Database not found for input7 radio nested</strong></span><br>
						<span id="input7_radioNestedOptions">
							<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element1">Option 1</label><br>
							<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element2">Option 2</label><br>
							<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element3">Option 3</label><br>
							<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element4">Option 4</label><br>
							<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element5">Option 5</label><br>
						</span>
						<!-- Nested Image -->
						<div class="col-lg-12 radio div" id="input7_nested_staticText">
							<span id="input7_nested_staticText_caption"><strong>Input 7 static text here form above parent condition 1</strong></span><br>
						</div>
						<div class="col-lg-12 radio div" id="input7_nested_text">
							<h4><strong>Input7 text</strong></h4>
							<span id="input7_nested_text_caption">Database not found for input 1 text</span>
							<input class="form-control" id="input7_nested_text_element" type="text">
						</div>
						<div class="col-lg-12 div"  id="input7_nested_imageText">
							<span id="input7_nested_imageText_caption"><strong>Write/Upload image of the real-life application(Dtabase not found nested image text caption)</strong></span><br>
							<input class="form-control" id="input7_nested_imageText_element" type="text">
							<span id="input7_nested_image_caption"><strong>Image upload</strong></span><br>
							<span><input type="file" name="pic" accept="image/*" id="input7_nested_image_element"></span> <br>
						</div>
						
						<!-- </div> <div class="col-lg-1"> </div> <div class="col-lg-12"> </div> --> 
					<!-- <div class="col-lg-1">
				</div> -->
					<!-- <div class="col-lg-12">
				</div>  -->
				<!-- input 7 image -->	
					<!-- <div class="col-lg-1">
				</div> -->
					<!-- <div class="col-lg-10 div"  id="input7_nested_image">
						<span id="input7_nested_text_caption"><strong>Write/Upload image of the real-life application</strong></span><br>
						<input class="form-control" id="inputdefault" type="text">
						<span id="input7_nested_image_caption"><strong>Image upload</strong></span><br>
						<span><input type="file" name="pic" accept="image/*" id="input7_box"></span> <br>
					-->
					<!-- </div>
					<div class="col-lg-1">
					</div>
					<div class="col-lg-12">
					</div>  -->
					<!-- Input 8 Text -->	
					<!-- <div class="col-lg-1">
				</div> -->
					<!-- <div class="col-lg-10 div" id="input8_nested_text">
					<h4><strong>Input8 Nested Text</strong></h4>
					<span id="input8_nested_text_caption"><strong>Enter the quetion you will ask</strong></span><br>
					<input class="form-control" id="inputdefault" type="text">
					</div>
					<div class="col-lg-1">
					</div>
					<div class="col-lg-12">
					</div>  -->



					<!-- <div class="col-lg-1"> </div> -->
					<div class="col-lg-12 radio div" id="">
						<input type="submit" name="next" value="Next" />
					</div>
					<!-- <div class="col-lg-1"> </div> <div class="col-lg-12"> </div> --> 
					<!-- <input type="submit" name="next"/> -->
				</form>
			</body>

			<?php
			if($input1Text==0)
			{
				?>
				<script>
					document.getElementById("input1_text").style.display='none';
				</script>
				<?php
			}
			?>
			<?php
			if($input11Text==0)
			{
				?>
				<script>
					document.getElementById("input11_text").style.display='none';
				</script>
				<?php
			}
			?>
			<?php
			if($input2Radio==0)
			{
				?>
				<script>
					document.getElementById("input2_radio").style.display='none';
				</script>
				<?php
			}
			?>
<!-- <?php
if($input3Radio==0)
{
	?>
	<script>
		document.getElementById("input3_radio").style.display='none';
	</script>
	<?php
}


?> -->

<?php
if($input4Image==0)
{
	?>
	<script>
		document.getElementById("input4_image").style.display='none';
	</script>
	<?php
}
?>
<?php
if($input5Text==0)
{
	?>
	<script>
		document.getElementById("input5_text").style.display='none';
	</script>
	<?php
}


?>

<?php
if($input6Text==0)
{
	?>
	<script>
		document.getElementById("input6_text").style.display='none';
	</script>
	<?php
}
?>

<?php

if($input7RadioNested==0)
{
	?>
	<script>
		document.getElementById("input7_radioNested").style.display='none';
	</script>
	<?php
}
else
{
	//generate the radio input
	$tempStr="";
	for ($i=0; $i < $input7RadioNestedOptionCount ; $i++)
	{
		$tempStr=$tempStr."<label><input type=\"radio\" name=\"input7_radioNested_element\" id=\"input7_radioNested_element".($i+1)."\">Option 1</label><br>";
	}

	echo "<script type=\"text/javascript\">document.getElementById(\'input7_radioNestedOptions\').innerHTML=\".$tempStr.\"</script>";
}


?>
<?php
if($input7NestedStaticText==0)
{
	?>
	<script>
		document.getElementById("input7_nested_staticText").style.display='none';
	</script>
	<?php
}


?>

<?php
if($input7NestedText==0)
{
	?>
	<script>
		document.getElementById("input7_nested_text").style.display='none';
	</script>
	<?php
}


?>

<?php
if($input7NestedImageText==0)
{
	?>
	<script>
		document.getElementById("input7_nested_imageText").style.display='none';
	</script>
	<?php
}


?>
<!-- to display Guidelines -->
<?php
echo "<script>document.getElementById(\"guidelines_element\").innerHTML = \"".$guidelines."\";</script>";
?>

<!-- to display example-->
<?php
echo "<script>document.getElementById(\"example_element\").innerHTML = \"".$example."\";</script>";
?>

<!-- to display input text 1-->
<?php
echo "<script>document.getElementById(\"input1_text_caption\").innerHTML = \"".$input1TextCaption."\";</script>";
?>

<!-- to display input text 1.1-->
<?php
echo "<script>document.getElementById(\"input11_text_caption\").innerHTML = \"".$input11TextCaption."\";</script>";
?>


<!-- to display input2_radio_caption-->
<?php
echo "<script>document.getElementById(\"input2_radio_caption\").innerHTML = \"".$input2RadioCaption."\";</script>";
?>

<!-- to display input3_radio_caption-->
<!-- <?php
/*echo "<script>document.getElementById(\"input3_radio_caption\").innerHTML = \"".$input3RadioCaption."\";</script>";*/
?>
-->
<!-- to display input4_image_caption-->
<?php
echo "<script>document.getElementById(\"input4_image_caption\").innerHTML = \"".$input4ImageCaption."\";</script>";
?>
<!-- to display input5_text-->
<?php
echo "<script>document.getElementById(\"input5_text_caption\").innerHTML = \"".$input5TexCaption."\";</script>";
?>

<!-- to display input6_text-->
<?php
echo "<script>document.getElementById(\"input6_text_caption\").innerHTML = \"".$input6TextCaption."\";</script>";
?>

<!-- to display input7 bested radio-->
<?php
echo "<script>document.getElementById(\"input7_radioNested_caption\").innerHTML = \"".$input7RadioNestedCaption."\";</script>";
?>

<!-- to display input7  nexted text caption-->



<!-- to display input8_nested_text_caption-->
<?php
echo "<script>document.getElementById(\"input7_nested_staticText_caption\").innerHTML = \"".$input7NestedStaticTextCaption."\";</script>";
?>

<?php
echo "<script>document.getElementById(\"input7_nested_text_caption\").innerHTML = \"".$input7NextedTextCaption."\";</script>";
?>

<?php
echo "<script>document.getElementById(\"input7_nested_imageText_caption\").innerHTML = \"".$input7NestedImageTextCaption."\";</script>";
?>

</html>

