
<!DOCTYPE html>
<html>
<head>
	<title>Thinking Skill Workshop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/style-2.css">
	<link rel="stylesheet" href="./css/introjs.css">
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<style type="text/css">
	.modal-header{
		display: none;
	}
	</style>
	
</head>
<body>
	<section class="middlepart">
	<div class="top-section">
            <div class="container-fluid" style="padding-left: 8px;">
            <div id="instruction" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <!-- <h4 class="modal-title"></h4> -->
				      </div>
				      <div class="modal-body instruction-body">
				        <div class="row">
				        	<div class="col-xs-3">
				        	<img src="images/Instruction-sir.png" width="150px" height="auto" style="display: block; margin: auto;">
				        </div>
				        <div class="col-xs-9">
				        	<div class="col-xs-2">
				        		<img src="images/bulb.png" style="padding-top: 3em;" width="50px">
				        	</div>
				        	<div class="col-xs-10">
				        		<p id="instructorTitle" style="padding-left: 0;">    <strong>Your Task :</strong><br/>
						        Watch the video to understand the topic.<br/><br/>
						        <strong>Important:</strong> <br/>
						        The moment you feel any question, click on the questioning box, type and submit the question. 
						        When you finish watching, you can submit additional questions.</p>
					        </div>
				        </div>
				        </div>
				        <button type="button" class="close" data-dismiss="modal" style="color:#000;"><input type="button" value="     ok     "></input></button>
				      </div>
				    </div>

				  </div>
				</div>
			</div>
		</div>
	</section>
		<script src="./js2/jquery-1.12.0.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="./js2/bootstrap.min.js"></script>
				    <?php
				    	// if($isLoadedFirstTime==1){
				    ?>
		<script type="text/javascript">
				    // $(document).ready(function(){
				    //     $("#instruction").modal('show');
				    // });
				</script>
				<?php
					// }
					?>
</body>
</html>