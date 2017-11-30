<?php 
 session_start();

   if(isset($_GET['domain_name']))
    $_SESSION['domain_name']=$_GET['domain_name'];
    if(isset($_GET['course_name']))
    $_SESSION['course_name']=$_GET['course_name'];
    if(isset($_GET['topic_name']))
    $_SESSION['topic_name']=$_GET['topic_name'];
    if(isset($_GET['optradio1']))
    $_SESSION['optradio1']=$_GET['optradio1'];
    if(isset($_GET['optradio2']))
    $_SESSION['optradio2']=$_GET['optradio2'];
 header('Location: page2.php');
 ?>