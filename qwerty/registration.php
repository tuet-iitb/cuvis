<?php
$pageID=0;
session_start();
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
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="./css/style-2.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
</head>
<style>
  .middlepart{
  background: url(images/selection-2.jpeg);
  /*background: url(../images/thinking-skills-2.jpg);*/
  width: 100%;
  height: 100vh;
  background-size: cover;
}
</style>
<body>
<section class="middlepart">
  <div class="top-section" style="height:15%; background-color: #0984E9;">
<div class="container-fluid" style="padding-left: 8px;">
  <div class="col-lg-12"><br></div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                    <div class="row">
                      <div style="/*background: #953163; padding-top: 0.9em; padding-bottom: 1em;*/ padding-left: 0px; padding-right: 0px;" class="col-lg-1 col-md-1 col-sm-1">
                        <!-- <a href="index.php"><img style="display: block; margin: auto;" src="images/logo-og.png" width="28px" height="auto"></a> -->
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
                    <h6 style="font-size:1.3em;  color: #fff; text-align:center;">Customized Visualization Integration System (CuVIS)</h6>
                    <h6 style="font-size:1em; color: #fff; text-align:center;">A product by IDP in Educational Technology, IIT Bombay</h6>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <br>
                    </div
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6"></div>
                  <div class="col-lg-6 col-md-6 col-sm-6"><!-- <a href="registration.php" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Register</b></a> --></div>
                  </div>
                </div>
            </div>
  </div><br/><br/><br/><br/><br/><br/>
<div class="container-fluid">
    <div class="col-xs-4 col-xs-offset-4 thinking-register" style="background-color: rgba(9,132,233,0.3); color: #000;">
        <p>Register</p>
        <form role="form" id="registrationform" action="postregistration.php" method="GET" class="register-form form-horizontal">
          <div class="form-group">
            <div class="col-xs-12"><label><!-- Full&nbsp;Name --></label><input type="name" required="required" name="fullname" placeholder="Your full name" class="form-control" id="name"></div>
          </div>
          <div class="form-group">
            <div class="col-xs-12"><label><!-- UserName (Your Email Id) --></label><input type="email" name="username" placeholder="UserName (Your Email Id)" value="" required="required" class="form-control" id="email"></div>
          </div>
          <div class="form-group">
            <div class="col-xs-12"><!-- <label>Password</label> --><input type="password" required="required" minlength="5" name="password" placeholder="Your password" class="form-control" id="password"><br></div>
          </div>
          <div class="form-group">
            <div class="col-xs-12">
              <button type="submit" style="border: none; background-color:#fff; color:#0984E9;" class="register-btn"><b>Finalize Registration</b></button>
              <div><br>.</div>
            </div>
          </div>
        </form>
    </div>
  </div><br/><br/><br/><br/><br/>  </div><br/><br/><br/><br/><br/><br/><br/>
</section>
<footer style="position: fixed; width:100%; bottom: 0; background-color: #0984E9;">
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