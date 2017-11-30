
<?php 
session_start();
 $input7RadioNestedOptionCount = "1";

for ($i=1; $i < ($input7RadioNestedOptionCount+1) ; $i++)



if(isset($_SESSION['P5input7_radioNested_element']) && $_SESSION['P5input7_radioNested_element'] == $i) 
	echo 'checked="checked"';
echo $_SESSION['P5input7_radioNested_element'];

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form>
  <input type="radio" name="gender" value="1" checked> Male<br>
  <input type="radio" name="gender" value="2"> Female<br>
  <input type="radio" name="gender" value="3"> Other  
</form> 

</body>
</html>

