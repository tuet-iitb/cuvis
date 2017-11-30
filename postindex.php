<?php
  session_start();
  include("config.php");
  $sql = $dbh->prepare("SELECT * FROM chatters WHERE name=? and pswd=?");
  $sql->execute(array($_POST['username'], $_POST['password']));
  if($r=$sql->fetch())
  {
    $_SESSION['loginSuccess']=1;
    $_SESSION['stuName']=$_POST['username'];
    $_SESSION['groupID']=$r['group_id'];
    $_SESSION['conexpgroup']=$r['conexpgroup'];
    $_SESSION['fullName']=$r['fullname'];
    $_SESSION['currentPageID']=0;//to be modified after loging the user activity to database
    //echo "Login Successful<br>Student ID: ".$_SESSION['stuName']."<br>Group ID: ".$_SESSION['groupID'];
    $sql1 = $dbh->prepare("UPDATE chatters SET isOnline=1 WHERE name=?");
    $sql1->execute(array($_SESSION['stuName']));
  }
  else
  {
    $_SESSION['loginSuccess']=0;
  }
?>
<script type="text/javascript">
 window.location.replace("index.php");
</script>