<?php
session_start();
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
	<!-- <link rel="stylesheet" href="css/index.css"> -->
	<!-- <link rel="stylesheet" href="css/heroic-features.css" > -->
</head>
<body>
	<?php include("topSection.php"); ?>
	<form  action="pagereg.php" method="get" data-toggle="validator" role="form">
		<div class="col-lg-12 body_div">
			<div class="col-lg-1"></div>
			<div class="col-lg-10 jumbotron container">
				<!-- Instructions Div start -->

				<div class="col-lg-12 para" >
					<!-- <h3><b>Customized Visualization Integration and Selection System (CuVIS)</b></h3> -->
					<!-- <h4><strong></strong></h4> -->
					<p>Welcome to the CuVIS tool. This tool will help you to generate a theory-informed, research-based Lesson Plan for your topic. This lesson plan will be mapped to your objective and customized to your requirements. You will proceed through a set of 'Activity Construction' prompts to generate the lesson plan.
					</p>	
				</div>
				<br>
				<br>
				<br>
				<!-- Instructions Div End  -->
				<!-- Steps start -->

				<div class="col-lg-12 div parahead">
					<ul class="list-group">
						<li class="list-group-item">Step 1: Select a topic whose teaching will be enhanced with visualization.</li>
						<li class="list-group-item">Step 2: Decide your learning objective for teaching with visualization.</li>
						<li class="list-group-item">Step 3: Select your visualization mapped to objective.</li>
						<li class="list-group-item">Step 4: Decide which active learning strategy to use for your activity with visualization.</li>
						<li class="list-group-item">Step 5: Design your activity with visualization that is Constructively aligned.</li>
						<li class="list-group-item">Step 6: Note where to pause visualization to start activity.</li>
						<li class="list-group-item">Step 7: Design the lesson plan based on your decisions in steps 1-6.</li>
					</ul>
				</div>

				<!-- Steps End -->
				<!-- Domain Start -->

				<div class="col-lg-12 div form-group parahead">
					<label><p4>Domain:</p4></label>
					<p>
						<select class="form-control para" id="domain" name="domain_name" required>
							<option  value="" >Please select your domain</option>
							<option id="cse" name="CSE" value="CSE" <?php echo isset($_SESSION['domain_name']) && $_SESSION['domain_name'] == "CSE" ? "selected" : "" ?>>Computer Science Engineering</option>
							<option id="ee" name="EE" value="EE" <?php echo isset($_SESSION['domain_name']) && $_SESSION['domain_name'] == "EE" ? "selected" : "" ?>>Electrical Engineering</option>
						</select>
					</p>
				</div>   

				<!-- Domain End -->
				<!--  Course and Topic  start-->	
				<div class="col-lg-12 form-group parahead div">
					<label for="inputlg" >Course Name</label>
					<input class="form-control input-lg para" id="course_name" name="course_name" type="text" placeholder="type your course name here" value="<?php if (isset($_SESSION['course_name'])) echo $_SESSION['course_name']; else echo ""?>" required>
					<br>
					<label for="inputlg">Topic Name</label>
					<input class="form-control input-lg para" id="topic_name" name="topic_name" type="text" placeholder="type your topic name here" value="<?php if (isset($_SESSION['topic_name'])) echo $_SESSION['topic_name']; else echo "" ?>" required>
				</div><br>

				<!--  Course and Topic End-->

				<!--  Instructional Setings start-->
				<br>
				<div class="col-lg-12 radio div parahead" >
					<b>Instructional Setting</b><br>
					<label href="#" data-toggle="tooltip" data-placement="top" title="Teacher introduces the theory, discusses its application and does some problem solving!"><input <?php if(isset($_SESSION['optradio1']) && $_SESSION['optradio1'] =="Lecture") echo 'checked="checked"';?> type="radio" name="optradio1" value="Lecture" id="radioLecture" onclick="myFunction1()" required>Lecture</label>
					<label href="#" data-toggle="tooltip" data-placement="right" title="Teacher focuses on problem solving in depth, working out different approaches to problem solving & giving feedback to students"><input  <?php if(isset($_SESSION['optradio1']) && $_SESSION['optradio1'] =="Tutorial" ) echo 'checked="checked"';?> type="radio" name="optradio1" value="Tutorial" id="radioTutorial"  onclick="myFunction2()" required>Tutorial</label>
				</div>

				<!--  Instructional Setings End-->
				<!-- Instructional Objectives with visualization for lecture radio button -->
				<br>
				<div class="col-lg-12 div radio para">
					<b>
						<span class="parahead" id="page1Radio1Label1"  style="display: none;" >Learning Objectives with visualization</span>
						<span class="parahead" id="page1Radio1Label2" style="display: none;" >Learning Objectives with visualization</span>
					</b>
						<span id="page1Radio1Label3" style="display: none;" ><i>Select the learning objective that best matches with your objective. To view example of each objective roll mouse over the text.</i>
						</span>
					<br>

					<span class="parahead" id="lecradio" style="display: none">

						<label class="obj1tooltip" data-placement="right" ><input <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj1") echo 'checked="checked"';?> type="radio" name="optradio2" value="Obj1" id="Obj1" required>Visualize to explain a concept with illustration.
						</label> <br>
						<label class="obj2tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj2") echo 'checked="checked"';?> type="radio" name="optradio2" id="Obj2" value="Obj2"  required>Visualize to explain the working of a process/ algorithm OR,Compare multiple processes.</label><br>
					</span>
					<span class="parahead" id="tutradio" style="display: none">	

						<label class="obj3tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj3") echo 'checked="checked"';?> type="radio" name="optradio2" value="Obj3" id="Obj3"  required>Write/Draw alternate representations (like graph to equation) from the given visualization or vice-versa.</label><br>
						
						<label class="obj4tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj4") echo 'checked="checked"';?> type="radio" name="optradio2" id="Obj4" value="Obj4" required>Use a given visualization to compute the solution to the given problem involving multiple processes.</label><br>
						<label class="obj5tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj5") echo 'checked="checked"';?> type="radio" name="optradio2" id="Obj5" value="Obj5"  required>Predict output of next step or a set of steps in a multi-step process.</label><br>
						<label class="obj6tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj6") echo 'checked="checked"';?> type="radio" name="optradio2" id="Obj6" value="Obj6"  required>Predict output of a phenomenon.</label><br>
						<label class="obj7tooltip" data-placement="right"><input  <?php if(isset($_SESSION['optradio2']) && $_SESSION['optradio2'] =="Obj7") echo 'checked="checked"';?> type="radio" name="optradio2" id="Obj7" value="Obj7"  required>Students devise an explanation for a given process or phenomena, through logical reasoning, from observations made from the visualization, before they have been taught the topic.</label>
						
					</span>
				</div>
				<div class="col-lg-12">
					<input type="submit" name="submit" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" value="Next"/>
				</div>
			</div>
			<div class="col-lg-1 container"></div>
		</div>
	</form>
</body>

<script>
	var l = document.getElementById('radioLecture');
	var l = document.getElementById('radioTutorial');
	var x = document.getElementById('tutradio');
	var y = document.getElementById('lecradio');
	var lt = document.getElementById('page1Radio1Label1');
	var t = document.getElementById('page1Radio1Label2');
	var ltnote = document.getElementById('page1Radio1Label3');
	if ( l = 1 ) 
	{

		function myFunction1() 
		{
			ltnote.style.display = 'block';
			lt.style.display = 'block'
			x.style.display = 'block';
			y.style.display = 'block';
			t.style.display = 'none';
			
		}
	}

	else ( l = 2 ) 
	{

		function myFunction2() 
		{
			ltnote.style.display = 'block';
			y.style.display = 'none';
			x.style.display = 'block';
			t.style.display = 'block';
			lt.style.display = 'none';

		}
	}
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip();   
	});

</script>
<!-- <script>
$(document).ready(function(){
	if ($('p select[name=domain_name]').val() == 'CSE') {$('.a').tooltip({title: "Hooray CSE wala!", animation: true}); }
	else if ($('p select[name=domain_name]').val() == 'EE') {
		$('.a').tooltip({title: "Hooray EE wala!", animation: true});
	}
    else
	
    $('.a').tooltip({title: "Hooray else wala!", animation: false}); 
});
</script> -->
<script>
	$(document).ready(function(){	
		$('#domain').on('change', function() {
			if ( this.value == 'CSE')
			{
				$('.obj1tooltip').tooltip({title: "Explain the theory behind asymmetric key cryptography with illustration", animation: true});
				$('.obj2tooltip').tooltip({title: "Explain the execution of BFS algorithm for a given graph OR What is the difference between 2-stroke and 4-stroke engine ?", animation: true});
				$('.obj3tooltip').tooltip({title: "Dry run the code and draw the change in memory variable values", animation: true});
				$('.obj4tooltip').tooltip({title: "Evaluate the time complexity of Prim’s Algorithm", animation: true});
				$('.obj5tooltip').tooltip({title: "Predict the output of the given program for this set of input variable values", animation: true});
				$('.obj6tooltip').tooltip({title: "Predict the output of the given program for this set of input variable values", animation: true});
				$('.obj7tooltip').tooltip({title: "Observe the visualization to describe Prim’s algorithm", animation: true});

			}
			if ( this.value == 'EE')
			{
				$('.obj1tooltip').tooltip({title: "Explain the working principle of JFET with illustration", animation: true});
				$('.obj2tooltip').tooltip({title: "Explain how do the safety systems work when aircraft engine catches fire. OR What is the difference between 2-stroke and 4-stroke engine ?", animation: true});
				$('.obj3tooltip').tooltip({title: "Given mathematical function, draw the vector field & vice-versa", animation: true});
				$('.obj4tooltip').tooltip({title: "Given the input signal & output signal equations, write the transformation equations of the intermediate steps.", animation: true});
				$('.obj5tooltip').tooltip({title: "Predict the direction of rotation of field vector in electromagnetic wave polarization", animation: true});
				$('.obj6tooltip').tooltip({title: "Predict what will happen to the given waveform if it is time scaled by 2 units", animation: true});
				$('.obj7tooltip').tooltip({title: "Derive the plot of ID vs. VGS for junction field effect transistors (JFET) from your observations of the visualization", animation: true}); 
			}
		});
	});
</script>

</html>
<?php 
   /* echo  "<script> var z = document.getElementsByName('course_name'); var i; for (i = 0; i < z.length; i++)if(z[i].value) {z[i].value = \"".$_SESSION['course_name']."\";}</script>";
   echo  "<script> var z = document.getElementsByName('topic_name'); var i; for (i = 0; i < z.length; i++) {z[i].value = \"".$_SESSION['topic_name']."\";}</script>";*/
 ?>


