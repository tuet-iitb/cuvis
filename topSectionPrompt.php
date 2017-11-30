<script type="text/javascript">
        function printpage()
        {
        var originalContents = document.body.innerHTML;
        var printReport= document.getElementById('printableDiv').innerHTML;
        document.body.innerHTML = printReport;
        window.print();
        document.body.innerHTML = originalContents;
        }
      </script>


<div id="topsectionbar" class="top-section" style="position: fixed; width: 100%; z-index: 1; background-color: #0984E9;height: 15%;">
	<div class="col-lg-12">
		<br><br>
	</div>
	<div class="col-lg-2">
		<div style="text-align: center;color: #fff;">
			<h5>Hello <?php echo $_SESSION['fullName'];?>!</h5>
		</div>
	</div>
	<div class="col-lg-8">
		<div style="text-align: center;color: #fff;">
			<h4>CuVIS: Customized Visualization Integration System</h4>
		</div>
	</div>
	<div class="col-lg-2">
		
		<div class="col-lg-6">
			      <!-- <input type="button" onclick="printpage()">Print</input> -->
			<button class="btn register-btn" style="background-color:#fff; color:#0984E9;" onclick="printpage()"><b>Print</b></button>
		</div>
		<div class="col-lg-6">
			<a href="sessionend.php" class="btn register-btn" style="background-color:#fff; color:#0984E9;"><b>Logout</b></a>
		</div>
	</div>
</div>
<div class="col-lg-12" style="padding-top:5%;">
		<br><br>
</div>


