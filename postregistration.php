<?php
  include("config.php");
  $sql = $dbh->prepare("INSERT INTO chatters(name, pswd, rollnumber, fullname) VALUES (?,?,?,?)");
  $sql->execute(array($_GET['username'], $_GET['password'], $_GET['roll'], $_GET['fullname']));
  ?>
<script type="text/javascript">
window.location.replace("index.php");
</script>