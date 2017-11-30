<?php
session_start();
include("conf.php");


// $promptid=$_GET['Prompt_id'];
// $domain=$_GET['Domain'];
// $_SESSION['currentPromptID']= $promptid;
// $_SESSION['currentPromptIndex']= $promptid;
$promptid=$_SESSION['currentPromptID'];
$domain=$_SESSION['domain_name'];
// echo $promptid."**********".$domain."<br>";

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
	$input7RadioNestedOptions = $result['input7_radioNested_options'];

	$input7NestedStaticText = $result['input7_nested_staticText'];
	$input7NestedStaticTextCaption = $result['input7_nested_staticText_caption'];
	$input7NestedStaticTextParentCondtitionNumber = $result['input7_nested_staticText_parentConditionNumber'];
	$input8Image = $result['input8_image'];
	$input8ImageCaption = $result['input8_image_caption'];
	echo "<script>var ip7NSTPCN=".$input7NestedStaticTextParentCondtitionNumber.";</script>";


	$input7NestedText = $result['input7_nested_text'];
	$input7NestedTextCaption = $result['input7_nested_text_caption'];
	$input7NestedTextParentConditionNumber = $result['input7_nested_text_parentConditionNumber'];
	echo "<script>var ip7NTPCN=".$input7NestedTextParentConditionNumber.";</script>";


	$input7NestedImageText = $result['input7_nested_imageText'];
	$input7NestedImageTextParentConditionNumber = $result['input7_nested_imageText_parentConditionNumber'];
	$input7NestedImageTextCaption = $result['input7_nested_imageText_caption'];
	echo "<script>var ip7NITPCN=".$input7NestedImageTextParentConditionNumber.";</script>";

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cuvis</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontsize.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="assets/default.css">
	<!-- <link rel="stylesheet" href="css/heroic-features.css" > -->
</head>
<body data-spy="scroll">
	<?php include("topSection.php"); ?> 	
	<div class="col-lg-1 div "></div>
	<div class="col-lg-10 div ">
		<form class="margin" action="nextPrompt.php" id="form3">
			<!-- Guidelines -->
			<section>
				<div class="col-lg-12 para div " id="guidelines">
					<h4><strong></strong></h4> 
					<span class="para" id="guidelines_element" >Database not reachable!</span>
					<?php
				//code for  image3 
					if ($_SESSION['domain_name'] === 'CSE' && $_SESSION['currentPromptID'] ==='P5') {
							# code...
							// $image4 = "image4_cse.jpg"
							// echo '<img src="cimages/'.$image4.'"  width="400" height="400" />';

					}
						//code for image4
					if ($_SESSION['domain_name'] === 'EE' && $_SESSION['currentPromptID'] ==='P5' ) {
							# code...
							// $image4 = "image4_ee.jpg"
							// echo '<img src="cimages/'.$image4.'"  width="400" height="400" />';

					}

					?>
				</div>
				<!--Example  -->
				<div class="col-lg-12 para div" id="example">
					<h4><strong>Example</strong></h4>
					<?php 
				//code for  image3 
					if ($_SESSION['domain_name'] === 'CSE' && ($_SESSION['currentPromptID'] ==='P29' || $_SESSION['currentPromptID'] ==='P29a' )) {
							# code...
						echo '<img src="cimages/'.$example.'"  width="400" height="400" />';

					}
						//code for image4
					if ($_SESSION['domain_name'] === 'EE' && ($_SESSION['currentPromptID'] ==='P29' || $_SESSION['currentPromptID'] ==='P29a' )) {
							# code...
						echo '<img src="cimages/'.$example.'"  width="400" height="400" />';

					}

					?>
					
					<span id="example_element">If topic = Travelling Salesman Problem
					Students able to construct a tour but unsure whether the chosen tour is the minimum cost tour.</span>
					<br>

				</div>

				<div class="col-lg-12 para div" id="input1_text">
					<!-- <h4><strong>Input1 text</strong></h4> -->
					<span id="input1_text_caption">Database not found for input 1 text</span>
					<textarea class="form-control" rows="4" name="input1_text" id="input1_text_element" type="text" required="true"></textarea>
				</div>
				<!-- input Text 1.1 -->	
				<div class="col-lg-12 para radio div" id="input11_text">
					<!-- 	<h4><strong>Input 1.1 text</strong></h4> -->
					<span id="input11_text_caption">Database not fount for caption inputText1.1</span>
					<textarea class="form-control" rows="4" name="input11_text" id="input11_text_element" type="text" required="true"></textarea> 
				</div>
				<div class="col-lg-12 para radio div" id="input2_radio">
					<!-- <h4><strong>Input2 Radio</strong></h4> -->
					<br>
					<span id="input2_radio_caption"><strong>Select your domain: Databese not found</strong></span><br>
					<span id="input2_radioOptions" name="">
						<label><input type="radio" name="input2_radio_element" id="input2_radio_element1" >Option 1</label><br>
						<label><input type="radio" name="input2_radio_element" id="input2_radio_element2" >Option 2</label><br>
					</span>	
				</div>
				<!-- Input 4 image -->	
				<div class="col-lg-12 para div" id="input4_image">
					<!-- <h4><strong>Input 4 Image</strong></h4> -->
					<span id="input4_image_caption"><strong>Image upload</strong></span> <br>
					<span><input type="file" name="input4_image" accept="image/*" id="input4_image_element" required="true"></span>
				</div>

				<div class="col-lg-12 para div" id="input8_image">
					<!-- <h4><strong>Input 4 Image</strong></h4> -->
					<span id="input8_image_caption"><strong>Image upload</strong></span> <br>
					<span><input type="file" name="input8_image" accept="image/*" id="input8_image_element" ></span>
				</div>
				<!-- Input 5 text -->
				<div class="col-lg-12 para div" id="input5_text">
					<!-- <h4><strong>Input5 Text</strong></h4> -->
					<span id="input5_text_caption">C] Enter your 'Pair' phase question : database not found for input5_text (Database not found)</span><br>
					<textarea class="form-control" rows="4" name="input5_text" type="text" id="input5_text_element" required="true"></textarea>	
				</div>
				<!-- Input 6 text -->
				<div class="col-lg-12 para div" id="input6_text">
					<!-- <h4><strong>Input6 Text</strong></h4> -->
					<span id="input6_text_caption">D] Enter your 'Share' phase question (if any, other than sharing solution with the class) Database not found for input6_text</span><br>
					<textarea class="form-control" rows="4" name="input6_text" id="input6_text_element" type="text" required="true"></textarea>
				</div>
				<!-- input 7 radio -->
				<div class="col-lg-12 radio para div" id="input7_radioNested">
					<!-- <h4><strong>Input7 Radio Nested</strong></h4> -->
					<span id="input7_radioNested_caption"><strong>Specify visualization feature to be used: Database not found for input7 radio nested</strong></span><br>
					<span id="input7_radioNestedOptions">
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element1">Option 1</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element2">Option 2</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element3">Option 3</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element4">Option 4</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element5">Option 5</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element6">Option 6</label><br>
						<label><input type="radio" name="input7_radioNested_element" id="input7_radioNested_element7">Option 7</label><br>
						<label><input type="radio" name="input7_radioNested_element8" id="input7_radioNested_element8">Option 8</label><br>
					</span>
					<!-- <script type="text/javascript">document.getElementById('input7_radioNestedOptions').innerHTML="jhgjhghjjgjh";</script> -->
					<!-- Nested Image -->
					<br>
					<div class="col-lg-12 para  div" id="input7_nested_staticText" style="display: none;">
						<p><span id="input7_nested_staticText_caption" name="input7_nested_staticText" ><strong>Input 7 static text here form above parent condition 1</strong></span><br></p>
					</div>
					<br>
					<div class="col-lg-12 para div" id="input7_nested_text" style="display: none">
						<!-- <h4><strong>Input7 text</strong></h4> -->
						<span id="input7_nested_text_caption">Database not found for input 1 text</span>
						<textarea class="form-control" rows="3" name="input7_nested_text" id="input7_nested_text_element" type="text"></textarea>
					</div>
					<div class="col-lg-12 para div"  id="input7_nested_imageText" style="display: none;">
						<span id="input7_nested_imageText_caption"><strong>Write/Upload image of the real-life application(Dtabase not found nested image text caption)</strong></span><br>
						<textarea class="form-control" rows="3" name="input7_nested_imageText1" id="input7_nested_imageText_element" type="text"></textarea>
						<span id="input7_nested_image_caption"><strong>Image upload</strong></span><br>
						<span><input type="file"  name="input7_nested_imageText2"accept="image/*" id="input7_nested_image_element" ></span> <br>
					</div>
				</div>	
				<br>	
				<div class="col-lg-12 radio div" >
					<input type="button" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" onclick="submitForm('previousPrompt.php')" value="Previous" />
					<input type="submit" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" name="next" value="Next" />

				</div>
				
				<!-- <input type="submit" name="next"/> -->
			</form>
			<form action="previousPrompt.php">
				
			</form>
		</div>
		<div class="col-lg-1 div "></div>
	</body>


	<script>
			//to create session variable for radio2iput in 11th 
			

			/*var o8Id = document.getElementById('input7_radioNested_element8');
			var input7_text = document.getElementById('input7_nested_text');*/
			
			function myFunction8()
			{
				

				// document.getElementById('input7_nested_imageText').style.display="none";
				// document.getElementById('input7_nested_text').style.display="none";
				// document.getElementById('input7_nested_staticText').style.display="none";

				//For input7 nested static text

				var ip2radio = document.getElementsByName("input2_radio_element");
				for(var i = 0; i < ip2radio.length; i++) {
					if(ip2radio[i].checked == true) {
						selectedIp2radio = ip2radio[i].value;
					}
				}
				/* if(selectedIp7radio==ip7NTPCN)
				{
					
				document.getElementById('input7_nested_text').style.display="block";
				
				}
				//For input7 nested Static text

				if(selectedIp7radio==ip7NSTPCN)
				{

				document.getElementById('input7_nested_staticText').style.display="block";
				}


				//For input7 nested image text
				if(selectedIp7radio==ip7NITPCN)
				{
				document.getElementById('input7_nested_imageText').style.display="block";
				}
				*/
			}

			function myFunction7()
			{
				

				document.getElementById('input7_nested_imageText').style.display="none";
				document.getElementById('input7_nested_text').style.display="none";
				document.getElementById('input7_nested_staticText').style.display="none";

				//For input7 nested static text
				var ip7radio = document.getElementsByName("input7_radioNested_element");
				for(var i = 0; i < ip7radio.length; i++) {
					if(ip7radio[i].checked == true) {
						selectedIp7radio = ip7radio[i].value;
					}
				}
				
				 //For input7 nested text

				 if(selectedIp7radio==ip7NTPCN)
				 {
				 	
				 	document.getElementById('input7_nested_text').style.display="block";
				 	
				 }
				//For input7 nested Static text

				if(selectedIp7radio==ip7NSTPCN)
				{

					document.getElementById('input7_nested_staticText').style.display="block";
				}


				//For input7 nested image text
				if(selectedIp7radio==ip7NITPCN)
				{
					document.getElementById('input7_nested_imageText').style.display="block";
				}

			}
		</script>
		<?php
		if($input1Text==0)
		{
			?>
			<script>
				document.getElementById("input1_text").style.display='none';
				document.getElementById("input1_text_element").required = false;
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
				document.getElementById("input11_text_element").required = false;
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
		else
		{
			$Parr2 = explode("##",$input2RadioOptions);
			
			
	//generate the radio input
			$tempStr="";
			/*echo $input2RadioOptionCount;*/
			for ($i=1; $i < ($input2RadioOptionCount+1) ; $i++)
			{
				$tempStr=$tempStr."<label><input type=\\\"radio\\\" value= ".($i)." onclick=\\\"myFunction8()\\\" name=\\\"input2_radio_element\\\" id=\\\"input2_radio_element".($i)."\\\" required = \\\"true\\\">$Parr2[$i]</label><br>";

				
			}
			echo "<script type=\"text/javascript\">document.getElementById('input2_radioOptions').innerHTML=\"".$tempStr."\";</script>";
		}

		?>
		<?php
		if($input8Image==0)
		{
			?>
			<script>
				document.getElementById("input8_image").style.display='none';
				document.getElementById("input8_image_element").required = false;
			</script>
			<?php
		}
		?>
		<?php
		if($input4Image==0)
		{
			?>
			<script>
				document.getElementById("input4_image").style.display='none';
				document.getElementById("input4_image_element").required = false;
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
				document.getElementById("input5_text_element").required = false;
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
				document.getElementById("input6_text_element").required = false;
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
			$Parr = explode("##",$input7RadioNestedOptions);
			
			
// echo "the content of test.php is:<hr>".$test;
	//generate the radio input
			$tempStr="";
			for ($i=1; $i < ($input7RadioNestedOptionCount+1) ; $i++)
			{
				$tempStr=$tempStr."<label><input type=\\\"radio\\\" value= ".($i)." onclick=\\\"myFunction7()\\\" name=\\\"input7_radioNested_element\\\"  required=\\\"true\\\" id=\\\"input7_radioNested_element".($i)." \\\">$Parr[$i]</label><br>";

				
			}
			echo "<script type=\"text/javascript\">document.getElementById('input7_radioNestedOptions').innerHTML=\"".$tempStr."\";</script>";
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
				document.getElementById("input7_nested_text_element").required = false;

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
				document.getElementById("input7_nested_imageText_element").required = false;
				document.getElementById("input7_nested_image_element").required = false;
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
<?php
echo "<script>document.getElementById(\"input8_image_caption\").innerHTML = \"".$input8ImageCaption."\";</script>";
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
echo "<script>document.getElementById(\"input7_nested_text_caption\").innerHTML = \"".$input7NestedTextCaption."\";</script>";
?>

<?php
echo "<script>document.getElementById(\"input7_nested_imageText_caption\").innerHTML = \"".$input7NestedImageTextCaption."\";</script>";
?>

</script>
<script type="text/javascript">
	function submitForm(action) {
		var form = document.getElementById('form3');
		form.action = action;
		form.submit();
	}
</script>

</html>
<?php 
// $array1 = $_SESSION;


// $i=0;
// $array2 = array_keys($array1);

// for ($i=0; $i < sizeof($array2); $i++) { 
// 	echo $array2[$i].": ".$array1[$array2[$i]]."<br>";
// }
?>

<center>
	<?php 

	$array1 = $_SESSION;

	$i=0;
	$array2 = array_keys($array1);
// echo $_SESSION['currentPromptID']."******<br>";
	$pidl = strlen($_SESSION['currentPromptID']);
	for ($i=0; $i < sizeof($array2); $i++)
	{ 
 // echo $array2[$i]."<br>";
		$x = substr($array2[$i], $pidl);
		$y = substr($array2[$i], 0,$pidl);
		if ($y===$_SESSION['currentPromptID'])
		{
			echo  "<script> var x = document.getElementsByName(\"".$x."\"); var i; for (i = 0; i < x.length; i++) {if (x[i].type != \"radio\"){x[i].value = \"".$_SESSION[$array2[$i]]."\";}}</script>";
		// echo $y."***".$x."=".$_SESSION[$array2[$i]]."<br>";
		}
	}
// echo "<br> **".$_SESSION['P4input1_text'];
	?>
</center>
