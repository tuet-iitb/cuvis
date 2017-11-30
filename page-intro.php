<?php
$pageID=0;
session_start();
include ("ssnControlPart1.php");
/*if(!isset($_SESSION['loginSuccess']))
  {
    session_start();
  }
else
{
  session_start();
}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thinking Skill Workshop</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style-2.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<style>
  .middlepart{
  background: url(images/selection-4.jpg);
  /*background: url(../images/thinking-skills-2.jpg);*/
  width: 100%;
  height: auto;
  background-size: cover;
}
</style>
<body>
<section class="middlepart">
  <div class="top-section">
<div class="container-fluid" style="padding-left: 8px;">
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="row">
                      <div style="/*background: #953163; padding-top: 0.9em; padding-bottom: 1em;*/ padding-left: 0px; padding-right: 0px;" class="col-lg-1 col-md-1 col-sm-1">
                        <a href="index.php"><img style="display: block; margin: auto;" src="images/logo-og.png" width="30px" height="auto"></a>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 brain">
                        <img style="display: none; margin: auto;" src="images/skill-levels/skill-level-11.png" width="80px" height="auto">
                      </div>
                      <!-- <div class="col-lg-8 col-md-8 col-sm-8">
                        <p>IKnowIT</p>
                      </div> -->
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <h6 style="font-size:1.5em;  color: #fff; text-align:center;">Thinking Skills Workshop</h6>
                    <h6 style="font-size:1em; color: #fff; text-align:center;">Module: Developing Knowledge Integration & Question Posing Skills</h6>
                    <h6 style="font-size:1em; color: #fff; text-align:center;">A product by IDP in Educational Technology, IIT Bombay</h6>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                    
                </div>
            </div>
  </div><br/><br/>
  <div class="container-fluid">
  <div class="col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2 instruction-body-1">
      <div class="row">
      <br/>
        <div class="col-xs-3">
          <img src="images/Instruction-sir.png" width="auto" height="auto" style="display: block; margin: auto;" class="img-responsive">
        </div>
          <div class="col-xs-9">
            <?php 
              $strfname = $_SESSION['fullName'];
              $strfi = strpos($strfname," ");
              $strfname = substr($strfname, 0, $strfi);
              echo "<p id=\"instructorTitle\" style=\"padding-left: 0;\"><strong>Hello ".$strfname."</strong><br/>
             My name is Gyanu.<br/><br/>";
            ?>
              I am your companion in this workshop. Follow my instructions for a fruitful session. <br/>Click the next button to start the workshop.</p><br/>
            <a href="pageslide-1.php" role="button" class="register-btn" style="font-size: 1em;">Next</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php" role="button" class="register-btn" style="font-size: 1em;">Logout</a>
            </div>

          </div><br/>
        </div>
      <div class="col-xs-3">
        
      </div>
    </div><br/><br/><br/><br/><br/><br/><br/>
</section>
<footer style="position: fixed; width:100%; bottom: 0; background: #000;">
  <p>©2015   IDP in Educational Technology, Indian Institute of Technology Bombay, India</p>
</footer>
<!-- jQuery library -->
<script src="./js/jquery-1.12.0.js"></script>

<!-- Latest compiled JavaScript -->
<script src="./js/bootstrap.min.js"></script>
</body>
<SCRIPT TYPE="text/javascript">
    //if ($("nextActivity"))
</SCRIPT>
</html>