<?php
	session_start();
	include("conf.php");
    $sql1 = $dbh->prepare("UPDATE chatters SET isOnline=0 WHERE name=?");
    $sql1->execute(array($_SESSION['stuName']));
	session_destroy();
?>
<script type="text/javascript">
window.location.replace("qwerty/index.php");
</script>