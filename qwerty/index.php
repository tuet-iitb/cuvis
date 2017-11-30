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
<title>Cuvis</title>
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
                    <h6 style="font-size:1.3em;  color: #fff; text-align:center;">CuVIS: Customized Visualization Integration System</h6>
                    <h6 style="font-size:1em; color: #fff; text-align:center;">A product by IDP in Educational Technology, IIT Bombay</h6>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <br>
                    </div
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="col-lg-6 col-md-6 col-sm-6"></div>
                  <div class="col-lg-6 col-md-6 col-sm-6"><a href="registration.php" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Register</b></a></div>
                  </div>
                </div>
            </div>
  </div><br/><br/><br/><br/><br/><br/>
  <div class="container-fluid">
<div class="col-lg-4 col-lg-offset-4 col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-4 thinking-register" style="background-color: rgba(9,132,233,0.3); color: #000;">
        <?php
      if(!isset($_SESSION['loginSuccess']) or $_SESSION['loginSuccess']==0)
      {
        if(!isset($_SESSION['loginSuccess']))
        {


           echo "<p> Please login <br><span style=\"font-size: 0.7em;\">(Register if not already registered!)</span></p>";
        }
        else
        {
        session_destroy();
        echo "<p style=\"color: red;\"> Please login <br><span style=\"font-size: 0.7em;\">(Invalid Username or Password)</span></p>";
        }
    ?>
        <form role="form" id="loginform" action="postindex.php" method="POST" class="register-form form-horizontal">
          <div class="form-group">
            <div class="col-sm-12"><label>UserName</label><input name="username" placeholder="Username" value="" required="required" class="form-control" id="email"></div>
          </div>
          <div class="form-group">
            <div class="col-sm-12"><label>Password</label><input type="password" required="required" minlength="5" name="password" placeholder="Your password" class="form-control" id="password"></div>
          </div>
          <div class="form-group">
           <div class="col-sm-12"><label>Session Name</label><input name="sessionName" placeholder="Session Name" value="" required="required" class="form-control" id="session_name"></div>
          </div>

          <div class="form-group">
            <div class="col-sm-2">
              <button type="submit" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Login</b></button>
            </div>
            <div class="col-sm-1"></div>
            <div class="col-sm-3">
              <!-- <a href="registration.php" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Register</b></a> -->
            </div>
          </div>
        </form>
        <?php
}
else
{
   echo "<center><br><p style=\"font-size: 1em; color:#fff;\">You are logged in as: ".$_SESSION['stuName']."</p><br>";
   ?>
   <script type="text/javascript">
 window.location.replace("../page1.php");
</script>
   <div class="col-sm-12">
   <a href="page-intro.php" role="button" class="register-btn" style="background: #519218; font-size: 1.1em;">Enter the workshop</a><br><br><br>
   </div>
   <div class="col-sm-12">
   <a href="logout.php" role="button" class="register-btn" style="font-size: 1em;">Logout</a><br/><br/></center>
   </div>
</div>
<br />
<?php //echo "******************".$_SESSION['conexpgroup'];
}
?>
    </div>
  </div><br/><br/><br/><br/><br/><br/><br/>
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