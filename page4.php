
<?php 
session_start();
 $input7RadioNestedOptionCount = "1";

for ($i=1; $i < ($input7RadioNestedOptionCount+1) ; $i++)



if(isset($_SESSION['P5input7_radioNested_element']) && $_SESSION['P5input7_radioNested_element'] == $i) 
	echo 'checked="checked"';
echo $_SESSION['P5input7_radioNested_element'];

 ?>