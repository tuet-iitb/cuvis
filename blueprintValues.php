<?php

$domainName = $_SESSION['domain_name'];
$topicName = $_SESSION['topic_name'];
$courseName = $_SESSION['course_name'];
$instrctionalSetting = $_SESSION['optradio1'];
$time= $_SESSION['optradioTime'];
$objectives = $_SESSION['optradio2'];
$inputUrl = $_SESSION['input_url'];
 

// $input1TextV = $_SESSION['input1_text'];
// $input11TextV = $_SESSION['input11_text'];
// $input2RadioElementV = $_SESSION['input2_radio_element'];
// $input4imageV = $_SESSION['input4_image'];
// $input5TextV = $_SESSION['input5_text'];
// $input6TextV = $_SESSION['input6_text']; 
// $input7RadioNestedElementV = $_SESSION['input7_radioNested_element'];
// $input7NestedStaticTextV = $_SESSION['input7_nested_staticText'];
// $input7NestedText = $_SESSION['input7_nested_text'];
// $input7NestedImageText1= $_SESSION['input7_nested_imageText1'];
// $input7NestedImageText2 = $_SESSION['input7_nested_imageText2'];



function strategyF() {
	if ($_SESSION['Strategy'] === "PI") {
		echo "Peer Instruction";
	}
	elseif ($_SESSION['Strategy'] ==="TPS") {
		echo "Think-Pair-Share";
	}
	elseif ($_SESSION['Strategy'] === "POE") {
		echo "Predict Observe Explain";
	}
}
//for the three radio button value prompt 05
function p5input7_radioNested_elementF () {
	if ($_SESSION['P5input7_radioNested_element'] === "1") {
		
		echo "<script type=\"text/javascript\">document.getElementById('col9').style.display = \"none\"; </script>";
	}
	
	else if ($_SESSION['P5input7_radioNested_element'] === "2") {
		echo $_SESSION['P5input7_nested_text'];
	}
	else if ($_SESSION['P5input7_radioNested_element'] === "3") {
		echo $_SESSION['P5input7_nested_imageText1'];
		echo "<br>";
		echo $_SESSION['P5input7_nested_imageText2'];
	}
	else
	{
		echo "Please select radio button problem";
	}

	
}
//for the three radio button value prompt 28
function p28a_input7_radioNested_elementF () {
	if ($_SESSION['P28input7_radioNested_element'] === "1") {
		
		echo "<script type=\"text/javascript\">document.getElementById('col9').style.display = \"none\"; </script>";
	}
	
	else if ($_SESSION['P28input7_radioNested_element'] === "2") {
		echo $_SESSION['P28input7_nested_text'];
	}
	else if ($_SESSION['P28input7_radioNested_element'] === "3") {
		echo $_SESSION['P28input7_nested_imageText1'];
		echo "<br>";
		echo $_SESSION['P28input7_nested_imageText2'];
	}
	else
	{
		echo "Please select radio button problem";
	}

	
}




function p12input7_radioNested_elementF () {
	switch ($_SESSION['P12input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P12input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p17input7_radioNested_elementF () {
	switch ($_SESSION['P17input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P17input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p18input7_radioNested_elementF () {
	switch ($_SESSION['P18input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P18input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p19input7_radioNested_elementF () {
	switch ($_SESSION['P19input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P19input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

Function p20input7_radioNested_elementF () {
	switch ($_SESSION['P20input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P20input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

// function p16input7_radioNested_elementF () {
// 	switch ($_SESSION['P16input7_radioNested_element']) {
// 		case '1':
// 		echo "Play button";
// 		break;
// 		case '2':
// 		echo "Pause button";
// 		break;
// 		case '3':
// 		echo "Slider bars";
// 		break;
// 		case '4':
// 		echo "Radio Buttons";
// 		break;
// 		case '5':
// 		echo "Input Box";
// 		break;
// 		case '6':
// 		echo "Checkboxes";
// 		break;
// 		case '7':
// 		echo "Onscreen Labels/Text explanations";
// 		break;
// 		case '8':
// 		echo $_SESSION['P16input7_nested_text'];
// 		break;
// 		default:
// 		echo "Eror 404 not found any slection";
// 		break;
// 	}  
// }
function p16input7_radioNested_elementF () {
	switch ($_SESSION['P16input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P16input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

function p21input7_radioNested_elementF () {
	switch ($_SESSION['P21input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P21input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p22input7_radioNested_elementF () {
	switch ($_SESSION['P22input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P22input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

/*fuction*/
function p25input7_radioNested_elementF () {
	switch ($_SESSION['P25input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P9ainput7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
/**/
function p9ainput7_radioNested_elementF () {
	switch ($_SESSION['P9ainput7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P9ainput7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

function p9binput7_radioNested_elementF () {
	switch ($_SESSION['P9binput7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P9binput7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}


function p14input7_radioNested_elementF () {
	switch ($_SESSION['P14input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P14input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p15input7_radioNested_elementF () {
	switch ($_SESSION['P15input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P15input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}
function p28input7_radioNested_elementF () {
	switch ($_SESSION['P28input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P28input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

function p10input7_radioNested_elementF () {
	switch ($_SESSION['P10input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P10input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  

}

function p9input7_radioNested_elementF (){
	switch ($_SESSION['P9input7_radioNested_element']) {
		case '1':
		echo "Play button";
		break;
		case '2':
		echo "Pause button";
		break;
		case '3':
		echo "Slider bars";
		break;
		case '4':
		echo "Radio Buttons";
		break;
		case '5':
		echo "Input Box";
		break;
		case '6':
		echo "Checkboxes";
		break;
		case '7':
		echo "Onscreen Labels/Text explanations";
		break;
		case '8':
		echo $_SESSION['P9input7_nested_text'];
		break;
		default:
		echo "Eror 404 not found any slection";
		break;
	}  
}

function domainNameF (){
	if ($_SESSION['domain_name'] === "CSE") 
		{echo "Computer Science and Engineering"; } 
	elseif ($_SESSION['domain_name'] === "EE") 
		{echo "Electrical Engineering"; } 
	else 
		{echo "Wrong Domain";}  
}

function objectivesF (){
	switch ($_SESSION['optradio2']) {
		case 'Obj1':
		echo "Visualize to explain a concept with illustration.";
		break;
		case 'Obj2':
		echo "Visualize to explain the working of a process/ algorithm OR,Compare multiple processes.";
		break;
		case 'Obj3':
		echo "Write/Draw alternate representations (like graph to equation) from the given visualization or vice-versa.";
		break;
		case 'Obj4':
		echo "Use a given visualization to compute the solution to the given problem involving multiple processes.";
		break;
		case 'Obj5':
		echo "Predict output of next step or a set of steps in a multi-step process.";
		break;
		case 'Obj6':
		echo "Predict output of a phenomenon.";
		break;
		case 'Obj7':
		echo "Students devise an explanation for a given process or phenomena, through logical reasoning, from observations made from the visualization, before they have been taught the topic.";
		break;

		default:
		echo "Please selected the Objective";
		break;
	}
}

function timeF () {
	if ($_SESSION['optradioTime'] === "T1") 
		{echo "5 - 10 Minutes"; } 
	elseif ($_SESSION['optradioTime'] === "T2") 
		{echo "15 - 20 Minutes"; } 
	else 
		{echo "You have not provided any time "; } 
}



?>