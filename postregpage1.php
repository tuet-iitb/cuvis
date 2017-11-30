<?php
  include("conf.php");
  $domain_name = $_SESSION['domain_name'];
  $course_name = $_SESSION['course_name'];
  $topic_name = $_SESSION['topic_name'];
  $lecture_tutorial = $_SESSION['optradio1'];
  $objective = $_SESSION['optradio2'];
  $sql ="INSERT INTO blueprints(domain_name, course_name, topic_name, lecture_tutorial, objective) VALUES ('$domain_name',  '$course_name', '$topic_name', '$lecture_tutorial', '$objective')";
  $dbh->exec($sql);
  $dbh = null;
  ?>
