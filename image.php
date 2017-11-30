<?php
$image = "image3_cse.jpg";
echo '<img src="cimages/'.$image.'"  width="400" height="400" />';
?>
<script type="text/javascript">
  function submitForm(action) {
    var form = document.getElementById('form1');
    form.action = action;
    form.submit();
  }
</script>

...

<form id="form1">
  <!-- ... -->
  <input type="button" onclick="submitForm('page1.php')" value="submit 1" />
  <input type="button" onclick="submitForm('page2.php')" value="submit 2" />
</form>