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
<body data-spy="scroll">	
	<div class="col-lg-1 div "></div>
	<div class="col-lg-10 div ">
		<form class="margin" action="getvalues.php">
			<!-- Guidelines -->
			<section>
			<div class="col-lg-12 div " id="guidelines">
				<h4><strong>Guidelines</strong></h4> 
				<span id="guidelines_element" >Database not reachable!</span>
			</div>
			<!--Example  -->
			<div class="col-lg-12 div" id="example">
				<h4><strong>Example</strong></h4>
				<span id="example_element">If topic = Travelling Salesman Problem
					Students able to construct a tour but unsure whether the chosen tour is the minimum cost tour.</span>
			</div>
			<div class="col-lg-12 div" id="input1_text">
					<h4><strong>Input1 text</strong></h4>
					<span id="input1_text_caption">Database not found for input 1 text</span>
					<input class="form-control" name="input1_text" id="input1_text_element" type="text">
			</div>
				<!-- input Text 1.1 -->	
			<div class="col-lg-12 radio div" id="input11_text">
				<h4><strong>Input 1.1 text</strong></h4>
				<span id="input11_text_caption">Database not fount for caption inputText1.1</span>
				<input class="form-control" name="input11_text" id="input11_text_element" type="text">
			</div>
			<div class="col-lg-12 radio div" id="input2_radio">
				<h4><strong>Input2 Radio</strong></h4>
				<span id="input2_radio_caption"><strong>Select your domain: Databese not found</strong></span><br>
				<span id="input2_radioOptions">
				<label><input type="radio" name="input2_radio_element" value="opt1" id="input2_radio_element1">Option 1</label><br>
				<label><input type="radio" name="input2_radio_element" value="opt2" id="input2_radio_element2">Option 2</label><br>
				</span>	
			</div>
			<!-- Input 4 image -->	
			<div class="col-lg-12 div" id="input4_image">
				<h4><strong>Input 4 Image</strong></h4>
				<span id="input4_image_caption"><strong>Image upload</strong></span><br>
				<span><input type="file" name="input4_image" accept="image/*" id="input4_image_element"></span>
			</div>
			<!-- Input 5 text -->
			<div class="col-lg-12  div" id="input5_text">
				<h4><strong>Input5 Text</strong></h4>
				<span id="input5_text_caption">C] Enter your 'Pair' phase question : database not found for input5_text (Database not found)</span><br>
				<input class="form-control" name="input5_text" type="text" id="input5_text_element">
			</div>
			<!-- Input 6 text -->
			<div class="col-lg-12 div" id="input6_text">
				<h4><strong>Input6 Text</strong></h4>
				<span id="input6_text_caption">D] Enter your 'Share' phase question (if any, other than sharing solution with the class) Database not found for input6_text</span><br>
				<input class="form-control" name="input6_text" id="input6_text_element" type="text">
			</div>
			<!-- input 7 radio -->
			<div class="col-lg-12 radio div" id="input7_radioNested">
					<h4><strong>Input7 Radio Nested</strong></h4>
					<span id="input7_radioNested_caption"><strong>Specify visualization feature to be used: Database not found for input7 radio nested</strong></span><br>
					<span id="input7_radioNestedOptions">
						<label><input type="radio" name="input7_radioNested_element" value="1" id="input7_radioNested_element1">Option 1</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="2"id="input7_radioNested_element2">Option 2</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="3" id="input7_radioNested_element3">Option 3</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="4" id="input7_radioNested_element4">Option 4</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="5" id="input7_radioNested_element5">Option 5</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="6" id="input7_radioNested_element6">Option 6</label><br>
						<label><input type="radio" name="input7_radioNested_element" value="7" id="input7_radioNested_element7">Option 7</label><br>
						<label><input type="radio" name="input7_radioNested_element8" value="8" id="input7_radioNested_element">Option 8</label><br>
					</span>
					<!-- <script type="text/javascript">document.getElementById('input7_radioNestedOptions').innerHTML="jhgjhghjjgjh";</script> -->
					<!-- Nested Image -->
					<div class="col-lg-12  div" id="input7_nested_staticText" ">
						<span id="input7_nested_staticText_caption" name="input7_nested_staticText" ><strong>Input 7 static text here form above parent condition 1</strong></span><br>
					</div>
					<div class="col-lg-12  div" id="input7_nested_text" >
						<h4><strong>Input7 text</strong></h4>
						<span id="input7_nested_text_caption">Database not found for input 1 text</span>
						<input class="form-control" name="input7_nested_text" id="input7_nested_text_element" type="text">
					</div>
					<div class="col-lg-12 div"  id="input7_nested_imageText">
						<span id="input7_nested_imageText_caption"><strong>Write/Upload image of the real-life application(Dtabase not found nested image text caption)</strong></span><br>
						<input class="form-control" name="input7_nested_imageText1" id="input7_nested_imageText_element" type="text">
						<span id="input7_nested_image_caption"><strong>Image upload</strong></span><br>
						<span><input type="file"  name="input7_nested_imageText2"accept="image/*" id="input7_nested_image_element"></span> <br>
					</div>
			</div>	
					<br>	
					<div class="col-lg-12 radio div" >
						<input type="submit" name="next" value="Next" />
					</div>
					<div class="col-lg-12 radio div" >
						<input type="submit" name="Previous" value="Previous" onclick="PreviousPrompts.php" />
					</div>
					<!-- <input type="submit" name="next"/> -->
				</form>
			</div>
			<div class="col-lg-1 div "></div>
		</body>


	

</html>

