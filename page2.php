<?php
session_start();
  // $domainName = $_GET['domain_name'];
  // $courseName = $_GET['course_name'];
  // $topicName = $_GET['topic_name'];  
  // $instrctionalSetting = $_GET['optradio1'];
  // $objectives = $_GET['optradio2'];

 
  // $_SESSION['topic_name'] = $topicName;
  // $_SESSION['course_name'] = $courseName;
  // $_SESSION['domain_name'] = $domainName;
  // $_SESSION['optradio1'] = $instrctionalSetting;
  // $_SESSION['optradio2'] = $objectives;
 



  // echo $_SESSION['topic_name'];
  // echo "<br>";
  // echo $_SESSION['course_name'];
  // echo "<br>";
  // echo $_SESSION['domain_name'];
  // echo "<br>";
  // echo $_SESSION['optradio1'];
  // echo "<br>";
  // echo $_SESSION['optradio2'];

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
  
</head>
<body>

  <?php include("topSection.php"); ?> 
  <form action="page3.php" method="get" id="form1">
    <div class="col-lg-1"></div>
      <div class="col-lg-10">  <!-- container jumbotron -->
        <!-- Instructions Div  page 2 start -->
        <div class="col-lg-12 div">
         <!--  <h4><strong><h4>Choose a visualization that has the following features:</h4></strong></h4>
          <ul>
            <li>Covers the difficult to understand/visualize part of the chosen topic.</li>
            <li>Shows change in the system with motion/time (in video /animation) Or, Allows (in simulation) user to change values of system variables & see the effect on the system.</li>
            <li>Allows you to pause whenever you want.</li>
            <li>Contains text labels/color codes/text explanation with visuals to activate prior knowledge.</li>
            <li>Shows step wise demonstration of a process.</li>
          </ul> -->

          <!--Logic for the paraghraph of Visualization checklist -->
          <?php
        echo "<script type=\"text/javascript\">var objectiveID = \"".$_SESSION['optradio2']."\";</script>";
       
           if($_SESSION['optradio2']=="Obj1" ||  $_SESSION['optradio2']=="Obj7" )
          {
            // alert(objectiveID+" JSR!"+" PI");
            echo "<p class=\"parahead\"><b>Guidelines:</b><br>Objective of this step is to ensure that the visualization choosen supports your learning objective.<br><br><b>Ensure the visualization you have chosen has the following features:</b><br>
a] Covers the difficult to understand/visualize part of the chosen topic<br> 
b] Shows change in the system with motion/time (in video /animation) Or, Allows (in simulation) user to change values of system variables & see the effect on the system<br>
c] Allows you to pause whenever you want<br></p>
";          }
            if($_SESSION['optradio2']=="Obj2" ||  $_SESSION['optradio2']=="Obj4" )
          {
            // alert(objectiveID+" JSR!"+" PI");
            echo "<p class=\"parahead\"><b>Guidelines:</b><br>Objective of this step is to ensure that the visualization choosen supports your learning objective.<br><br><b>Ensure the visualization you have chosen has the following features:</b><br>
a] Covers the difficult to understand/visualize part of the chosen topic <br>
b] Allows you to pause whenever you want<br>
d] Shows demonstration of process in steps<br>
e]Shows the steps in proper sequence<br></p>
";          }
                     if($_SESSION['optradio2']=="Obj5" ||  $_SESSION['optradio2']=="Obj6" )
          {
            // alert(objectiveID+" JSR!"+" PI");
            echo "<p class=\"parahead\"><b>Guidelines:</b><br>Objective of this step is to ensure that the visualization choosen supports your learning objective.<br><br><b>Ensure the visualization you have chosen has the following features:</b><br>
a]Shows (in video/animation) or allows(in simulation) you to change variable values & see the effect on the system/phenomenon in stepwise mode<br>
b]Demonstrates both directionality and strength of the causal relationship<br>
c]  Allows you to pause whenever you want<br></p>";          }
                     if($_SESSION['optradio2']=="Obj3" )
          {
            // alert(objectiveID+" JSR!"+" PI");
            echo "<p class=\"parahead\"><b>Guidelines:</b><br>Objective of this step is to ensure that the visualization choosen supports your learning objective.<br><br><b>Ensure the visualization you have chosen has the following features:</b><br>
a] Shows both representations together on-screen<br> 
b] Allows user to make or show (in a video/animation) changes in 1 representation<br>
c] Dynamically shows/reflects changes made in 1 representation on the other <br>
d] If multiple changes made, shows the effect of these changes in stepwise mode<br>
e] Has pause button</p>";          }
           

           ?>  

       
      
         


        </div>
        <!-- Instructions Div End  -->
        <!-- Steps start -->
        <div class="col-lg-12 parahead div">
          <p><strong>Confirm that your selected visualization has the above features.</strong></p>
          <label>Confirm</label>
          <label class="form-check-label">
            <input class="form-check-input form" id="confirmselectedvisualization" type="checkbox" value="1" required>
            OK
          </label>
        </div>
        
        <!-- Steps End -->
        <!-- Enter Url Start -->

        <div class="col-lg-12 form div parahead" id="url2page" style="display: none;">
         <!-- <label for="inputlg">Enter URL</label> -->
         <label>Enter the URL of the visualization you selected</label> 
         <input class="form-control para input-lg " id="url_vaa" name="input_url" type="text" placeholder="http://oscar.iitb.ac.in/onsiteDocumentsDirectory/BraytonCycleModifications/BraytonCycleModifications/shell.html" value="<?php if (isset($_SESSION['input_url'])) echo $_SESSION['input_url']; else echo ""?>" required>
         <br>
       </div>
        

       <!-- Enter URL End -->
       <!--  Course and Topic  start-->
       
       <div class="col-lg-12 div">
        <br>
        <input type="button" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" onclick="submitForm('page1.php')" value="Previous" />
        <input type="submit" name="Next" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" value="Next" />
        
      </div>

    </div>
    <div class="col-lg-1"></div>

</form>

</body>
<script>

$(document).ready(function () {
    $('#confirmselectedvisualization').change(function () {
        if (this.checked) 
          $('#url2page').show();
          /* $('#url2page').fadeIn('slow');*/
        else 
            $('#url2page').hide();
    });
});

</script>
<script type="text/javascript">
  function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
  }
</script>




<?php 
    // echo  "<script> var x = document.getElementsByName('input_url'); var i; for (i = 0; i < x.length; i++) {if (x[i].type != \"radio\"){x[i].value = \"".$_SESSION['input_url']."\";}}</script>";
 ?>

</html>