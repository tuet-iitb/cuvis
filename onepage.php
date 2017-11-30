<!DOCTYPE html>
<html>
<head>
	<title>CuVIS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/D7AB1C4C-B359-CB40-8661-2361124DABE4/main.js" charset="UTF-8"></script><link rel="stylesheet" crossorigin="anonymous" href="http://gc.kis.v2.scr.kaspersky-labs.com/4EBAD4211632-1668-04BC-953B-C4C1BA7D/abn/main.css"/><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="topsectionbar" class="top-section" style="position: fixed; width: 100%; z-index: 1; background-color: #0984E9;height: 15%;">
		<div class="col-lg-12">
			<br><br>
		</div>
		<div class="col-lg-2">
			<div style="text-align: center;color: #fff;">
				<h5>Hello Shitanshu Mishra!</h5>
			</div>
		</div>
		<div class="col-lg-8">
			<div style="text-align: center;color: #fff;">
				<h4>CuVIS: Customized Visualization Integration System</h4>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="col-lg-6">
			</div>
			<div class="col-lg-6">
				<a href="sessionend.php" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Logout</b></a>
			</div>
		</div>
	</div>
	<div class="col-lg-12" style="padding-top:5%;">
		<br><br>
	</div>
	<!-- Page1.php file data -->
	<section>
		<form  action="page2.php" method="get" data-toggle="validator" role="form">
			<div class="col-lg-12 body_div">
				<div class="col-lg-1"></div>
				<div class="col-lg-10 jumbotron container">
					<!-- Instructions Div start -->

					<div class="col-lg-12">
						<!-- <h3><b>Customized Visualization Integration and Selection System (CuVIS)</b></h3> -->
						<!-- <h4><strong></strong></h4> -->
						Welcome to the CuVIS tool. This tool will help you to generate a theory-informed, research-based Lesson Plan for your topic. This lesson plan will be mapped to your objective and customized to your requirements. You will proceed through a set of 'Activity Construction' prompts to generate the lesson plan.
					</div>
					<!-- Instructions Div End  -->
					<!-- Steps start -->

					<div class="col-lg-12 div">
						<ul class="list-group">
							<li class="list-group-item">Step 1: Enter your data below to specify the topic and instructional context.</li>
							<li class="list-group-item">Step 2: Select your learning objective from the given set.</li>
							<li class="list-group-item">Step 3: Cross-check if your selected visualization has all the features recommended by CuVIS.</li>
							<li class="list-group-item">Step 4: Respond to a set of 'Activity Construction' prompts. (ACP)</li>
							<li class="list-group-item">Step 5: Your Lesson Plan for the chosen topic is ready for saving/download.</li>
						</ul>
					</div>

					<!-- Steps End -->
					<!-- Domain Start -->

					<div class="col-lg-12 div form-group">
						<label><p4>Domain:</p4></label>
						<select class="form-control" id="domain" name="domain_name" required>
							<option id="" >Please select your domain</option>
							<option id="cse" name="CSE" value="CSE" >Computer Science Engineering</option>
							<option id="ee" name="EE" value="EE">Electrical Engineering</option>
						</select>
					</div>   

					<!-- Domain End -->
					<!--  Course and Topic  start-->	
					<div class="col-lg-12 form-group div">
						<label for="inputlg" >Course Name</label>
						<input class="form-control input-lg" id="course_name" name="course_name" type="text" placeholder="type your course name here" required>
						<br>
						<label for="inputlg">Topic Name</label>
						<input class="form-control input-lg" id="topic_name" name="topic_name" type="text" placeholder="type your topic name here" required>
					</div><br>

					<!--  Course and Topic End-->

					<!--  Instructional Setings start-->
					<br>
					<div class="col-lg-12 radio div" >
						<label><b>Instructional Setting</b></label><br>
						<label><input type="radio" name="optradio1" value="Lecture" id="radioLecture" onclick="myFunction1()" required>Lecture</label> <br>
						<label><input type="radio" name="optradio1" value="Tutorial" id="radioTutorial"  onclick="myFunction2()" required>Tutorial</label>
					</div>

					<!--  Instructional Setings End-->


					<!-- Instructional Objectives with visualization for lecture radio button -->

					<div class="col-lg-12 radio ">
						<b>
							<span id="page1Radio1Label1"  style="display: none;" >Instructional Objectives with visualization</span>
							<span id="page1Radio1Label2" style="display: none;" >Tutorial</span>
						</b>
						<br>

						<span id="lecradio" style="display: none">

							<label data-toggle="tooltip"  title="E.g. Be able to explain the concept of integration using trapezoid OR, Explain the working principle of  JFET with illustration" ><input type="radio" name="optradio2" value="Obj1" id="Obj1" required>Visualize to explain a concept with illustration.
							</label> <br>
							<label data-toggle="tooltip" title="E.g. Explain how do the safety systems work when aircraft engine catches fire? OR What is the difference between 2-stroke and 4-stroke engine? "><input type="radio" name="optradio2" id="Obj2" value="Obj2"  required>Visualize to explain the working of a process/ algorithm OR,Compare multiple processes.</label><br>
						</span>
						<span id="tutradio" style="display: none">	

							<label data-toggle="tooltip" title="E.g. Given mathematical function, draw the vector field & vice-versa"><input type="radio" name="optradio2" value="Obj3" id="Obj3"  required>Write/Draw alternate representations (like graph to equation) from the given visualization or vice-versa.</label><br>
							<label data-toggle="tooltip" title="Given the input signal & output signal equations, write the transformation equations of the intermediate steps." ><input type="radio" name="optradio2" id="Obj4" value="Obj4" required>Use a given visualization to compute the solution to the given problem involving multiple processes.</label><br>
							<label data-toggle="tooltip" title="Predict the output of the given program for this set of input variable values"><input type="radio" name="optradio2" id="Obj5" value="Obj5"  required>Predict output of next step or a set of steps in a multi-step process.</label><br>
							<label data-toggle="tooltip" title="Predict the type of electromagnetic wave polarization"><input type="radio" name="optradio2" id="Obj6" value="Obj6"  required>Predict output of a phenomenon.</label><br>
							<label data-toggle="tooltip" title="Derive the plot of ID vs. VGS for junction field effect transistors (JFET) from the visualization"><input type="radio" name="optradio2" id="Obj7" value="Obj7"  required>Students devise an explanation for a given process or phenomena, through logical reasoning, from observations made from the visualization, before they have been taught the topic.</label>
							<label><b>Note: </b>Select the instructional objective that best matches with your objective. To view example of each objective roll mouse over the text.</label>
						</span>
					</div>
					<div class="col-lg-12">
						<input type="submit" name="submit" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" value="Next"/>
					</div>
				</div>
				<div class="col-lg-1 container"></div>
			</div>
		</form>		
	</section>
	
</body>
</html>