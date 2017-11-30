<?php
session_start();
// $inputUrl = $_GET['input_url'];
// $_SESSION['input_url'] = $inputUrl;
include("postregpage1.php");
  if(isset($_GET['input_url']))
    $_SESSION['input_url']=$_GET['input_url'];
  
 // echo $_SESSION['input_url'];
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
  <form action="cuvisflow.php" method="get" id="form2">
    <div class="col-lg-1"></div>
      <div class="col-lg-10 container jumbotron">
        <!-- Instructions Div  page 2 start -->
      <!-- Instructions Div  page 3 startddfi -->
      <div class="col-lg-12 para div">
        <!-- <h4><strong><h4>Choose a visualization that has the following features:</h4></strong></h4> -->
        <p class="para">
          From this section onwards, you will be taken through a set of interactive steps to create your ‘Lesson Plan’. A ‘Lesson Plan’ gives you the full implementation plan in steps. For each step, it guides you to plan out the time for each step, what instructor will do, what student will do, what visualization features to use, if any.
        </p>
        <h5 class="para"><b>Note:</b></h5>
        <ul class="parahead">
          <li>The ‘Lesson Plan’ follows a pedagogical pattern of play-pause-do an activity – resume visualization.</li>
          <li>Your responses to a set of ‘Activity Construction’ prompts will be stored. You can change your response whenever you want to.</li>
          <li>Based on your responses to these prompts, CuVIS will generate a ‘Lesson Plan’ tailored to your requirements. You can download and edit the ‘Lesson Plan’ as you wish.</li>
        </ul>
        <br>
      </div>

      <!-- Instructions Div End  -->
      <!-- Steps start -->
      <div class="col-lg-12 para parahead div">
        <label>Choose your preferred activity duration : </label>
        <label class="radio-inline">
          <input type="radio" name="optradioTime" id="T1" value="T1" onclick="myFunction4()"  <?php if(isset($_SESSION['optradioTime']) && $_SESSION['optradioTime'] =="T1") echo 'checked="checked"';?> required>5 - 10 Minutes
        </label>
        <label class="radio-inline">
          <input type="radio" name="optradioTime" id="T2" value="T2" onclick="myFunction5()" <?php if(isset($_SESSION['optradioTime']) && $_SESSION['optradioTime'] =="T2") echo 'checked="checked"';?> required>15 -20 Minutes
        </label>
      </div>

      <!-- Steps End -->
      <!-- Objective Start -->
      <div class="col-lg-12 para div" id="t1" style="display: none">
        Strategy Suggested for your Objective<span><b>Peer Instruction</b></span> 
          <ol>
            <li>Click on this link to know more about Peer Instruction<a href="https://resinetworkshop-iitb.wistia.com/medias/pia8psnf6q" target="_blank">https://resinetworkshop-iitb.wistia.com/medias/pia8psnf6q</a></li>
            <li>Click on 'Next' to proceed through a set of 5 Activity Construction Prompts to create your learning design</li>
          </ol>
        </div> 
<!-- code to decide which instruction strategy description should be diplayed -->
      <?php
        echo "<script type=\"text/javascript\">var objectiveID = \"".$_SESSION['optradio2']."\";</script>";
       
      ?>
      <script type="text/javascript">
        function clickedT1()
        {
          //PI
          if(objectiveID=="Obj1"  || objectiveID=="Obj5" || objectiveID=="Obj6" || objectiveID=="Obj7"|| objectiveID=="Obj3" )
          {
            // alert(objectiveID+" JSR!"+" PI");
            printPI();
          }
          //TPS
          if(objectiveID=="Obj2" )
          {
            // alert(objectiveID+" JSR!"+" TPS");
            printTPS();
          }
           if(objectiveID=="Obj4" )
          {
            // alert(objectiveID+" JSR!"+" TPS");
            print_quickTPS();
          }

        }
        function clickedT2()
        {
           //TPS
          if(objectiveID=="Obj1" || objectiveID=="Obj2"   || objectiveID=="Obj7"|| objectiveID=="Obj4" || objectiveID=="Obj3" )
          {
            // alert(objectiveID+" JMS!"+" TPS");
            printTPS();
          }
           //POE
          if( objectiveID=="Obj5" || objectiveID=="Obj6")
          {
            // alert(objectiveID+" JMS!"+" POE");
            printPOE();
          }
        }
        function printPI()
        {
          document.getElementById('strategyMsg').innerHTML="<p>Strategy Suggested for your Objective: <span><b>Peer Instruction</b></span>"
          +"<ol class = \"parahead\">"
            +"<li>Click on this link to know more about Peer Instruction:<br>https://resinetworkshop-iitb.wistia.com/medias/pia8psnf6q</li>"
            +"<li>Click on 'Next' to proceed through a set of 7 Activity Construction Prompts to create your lesson design.</li>"
             +"<li>The Activity Construction Prompts will guide you to constructively align your lesson design to your Learning Objective.</li>"
          +"</ol></p>";
        }
        function printTPS()
        {
          document.getElementById('strategyMsg').innerHTML="<p>Strategy Suggested for your Objective: <span><b>Think-Pair-Share</b></span>"
          +"<ol class = \"parahead\">"
            +"<li>Click on this link to know more about Think-Pair-Share:<br> http://serc.carleton.edu/introgeo/interactive/tpshare.html</li>"
            +"<li>Click on 'Next' to proceed through a set of 7 Activity Construction Prompts to create your lesson design.</li>"
            +"<li>The Activity Construction Prompts will guide you to constructively align your lesson design to your Learning Objective.</li>"
          +"</ol></p>";
        }
        function print_quickTPS()
        {
          document.getElementById('strategyMsg').innerHTML="<p>Strategy Suggested for your Objective: <span><b>Quick Think-Pair-Share</b></span>"
          +"<ol class = \"parahead\">"
            +"<li>Click on this link to know more about Think-Pair-Share:<br> http://serc.carleton.edu/introgeo/interactive/tpshare.html</li>"
            +"<li>Click on 'Next' to proceed through a set of 7 Activity Construction Prompts to create your lesson design.</li>"
            +"<li>The Activity Construction Prompts will guide you to constructively align your lesson design to your Learning Objective.</li>"

          +"</ol></p>";
        }
        function printPOE()
        {
          document.getElementById('strategyMsg').innerHTML="<p>Strategy Suggested for your Objective: <span><b>Predict Observe Explain</b></span>"
          +"<ol class = \"parahead\">"
          +"<li>Click on this link to know more about Predict Observe Explain:<br> http://arb.nzcer.org.nz/strategies/poe.php</li>"
          +"<li>Click on 'Next' to proceed through a set of 7 Activity Construction Prompts to create your lesson design.</li>"
          +"<li>The Activity Construction Prompts will guide you to constructively align your lesson design to your Learning Objective.</li>"
          +"</ol></p>";
        }
      </script>
      
<!-- -->
      <div class="col-lg-12 para div" id="strategyMsg" style="display: none">
        Strategy Suggested for your Objective: <span><b>Predict Observe Explain</b></span> 
          <ol>
            <li>Click on this link to know more about Predict Observe Explain <a href="http://arb.nzcer.org.nz/strategies/poe.php" target="_blank">http://arb.nzcer.org.nz/strategies/poe.php</a></li>
            <li>Click on 'Next' to proceed through a set of 7 Activity Construction Prompts to create your learning design</li>
          </ol>
        </div>   
`


        <div class="col-lg-12 div">
        <input type="button" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" onclick="submitForm('page2.php')" value="Previous" />
          <input type="submit" name="Next" class="btn register-btn" style="background-color:#fff; color:#fff; background-color:#0984E9;" value="Next" />

        </div>

      </div>
      <div class="col-lg-1"></div>
    </form>
    
    
    
  </body>
  <script>


    var t1 = document.getElementById('T1');
    var t2 = document.getElementById('T2');

    var o = document.getElementById('strategyMsg');
    if ( t1 = 1 ) 
    {

      function myFunction4() 
      {
        o.style.display = 'block'
        clickedT1();


      }
    }

    else ( t2 = 2 ) 
    {

      function myFunction5() 
      {
       o.style.display = 'block'
       clickedT2();

     }
   }
 </script>
 </script>
<script type="text/javascript">
  function submitForm(action) {
    var form = document.getElementById('form2');
    form.action = action;
    form.submit();
  }
</script>
</html>
