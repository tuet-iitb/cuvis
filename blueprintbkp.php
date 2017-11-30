    <?php
    session_start();

    $domainName = $_SESSION['domain_name'];
    $topicName = $_SESSION['topic_name'];
    $courseName = $_SESSION['course_name'];
    $instrctionalSetting = $_SESSION['optradio1'];
    $time= $_SESSION['optradioTime'];
    $objectives = $_SESSION['optradio2'];
    $inputUrl = $_SESSION['input_url'];

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/heroic-features.css">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <link rel="stylesheet" href="css/callout.css">
      <link rel="stylesheet" href="css/table.css">
      <title>Blueprints</title>



    </head>

    <body>

      <div class="col-lg-1 container "></div>
      <div class="container col-lg-10 ">
        <div class="col-lg-12">
          <p class="pclassx" style="font-weight: bold;" >
            <span>Learning Design for </span>
            <span style="color: green" id="topicName"><?php echo $topicName;  ?>(Topic Name)</span><br>
            <span>Domain = </span>
            <span style="color: green" id="domainName"><?php if ($domainName === "CSE") {echo "Computer Science and Engineering"; } elseif ($domainName === "EE") {echo "Electrical Engineering"; } else {echo "Wrong Domain"; } ?>(CSE/EE)</span>
            <span>Course Name = </span>
            <span style="color: green" id="courseName"><?php echo $courseName;  ?>(Course name)</span><br>
            <span>Topic Name = </span>
            <span style="color: green" id="topicName"><?php echo $topicName;  ?>(Topic Name name)</span><br>
            <span>Objective = </span>
            <span style="color: green" id="objective">Selected Objective from the user(obj1, obj2....)</span><br>
            <span>Visualization URL =</span>
            <span style="color: green" id="url">www.google.com</span><br>
            <span>Setting =</span>
            <span style="color: green" id="instructionalSetting"><?php echo $instrctionalSetting; ?>(L & T)</span>
            <span>Time Duration =</span>
            <span style="color: green" id="time"> <?php if ($time === "T1") {echo "5 - 10 Minutes"; } elseif ($time === "T2") {echo "15 - 20 Minutes"; } else {echo "You have not provided any time "; } ?> (Time)</span> 
            <span> Strategy Suggested =</span>
            <span style="color: green" id="stategySuggested">Peer Instruction or Think pair Share</span>
          </p>
        </div>

        
        
        <div class="table-responsive  col-lg-12">
          <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover jumbotron">
            <!--   <caption class="text-center"><a href="" target="_blank"></a>:</caption> -->
            <thead style="font-weight: bold;">
              <tr>
                <th>Step No.</th>      
                <th>Time (mins.)</th>
                <th>What Instructor Does</th>
                <th>What Student Does</th>
                <th>Visualization affordance used, if any</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>2</td>
                <td>Play the visualization for the multiple conditions selected:<br>Enter the multiple condition sets to show relationship between various system variables(P9_input1_text)<?php echo $_SESSION['P4input1_text']; ?></td>
                <td>Listens & Observes  
                  <div class="bs-callout bs-callout-success">         
                    <h4>Pedagogical pointer:</h4>
                    Maping to your objective
                  </div>
                </td>
                <td>1 Play button <br>2 Simultaneous<br>
                  representation <br>Enter the visualization
                  features> (Prompt 3 Ans.2 P9 input7_radio_nested)<br>
                  <div class="bs-callout bs-callout-success">
                    <h4>Pedagogical pointer:</h4>
                    Pausing to do an activity with visualization
                  </div>
                </td>
              </tr>   
              <tr>
                <td>2</td>
                <td>2-3</td>
                <td>Pause the visualization at this point.<br>< Insert screenshot of the point where visualization
                  is to be paused to ask the activity question>
                  (Prompt 5 P29 input4_image)
                </td>
                <td>Listens & Observes 
                 <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Pausing to do an activity with visualization
                </div>
              </td>
              <td>1. Pause button</td>
            </tr>
            <tr>
             <td>3</td>
             <td>2-3</td>
             <td>Show the activity question :<br>
              nsert PI question with options> (Prompt 4 -P12 input1_text)<br>
              <div class="bs-callout bs-callout-success">
                <h4>Pedagogical pointer:</h4>
                Activity question mapped to objective
              </div></td>
              <td>Individual Activity
                ‘Thinks’ about the answer
                for 2 – 3 mins.
              </td>
              <td> Pause button
              </td>

            </tr>
            <tr>
              <td>4</td>
              <td>2-3</td>
              <td>a) Ask students to think & commit to an answer.<br>
                b) Call out each option & ask students to raise their<br>
                hand if it matches with their answer</td>
                <td>Raises hand when instructor
                  calls out their answer<br>
                  <div class="bs-callout bs-callout-success">
                    <h4>Pedagogical pointer:</h4>
                    Strategy Implementation steps
                  </div></td>
                </td>
                <td></td>
              </tr>
              <tr>
                <td>5</td>
                <td>2-3</td>
                <td>Ask students to think individually & write down
                  their answer with reasoning</td>
                  <td>Writes down the answer with reasoning<br>
                    <div class="bs-callout bs-callout-success">
                      <h4>Pedagogical pointer:</h4>
                      Strategy Implementation steps
                    </div>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>5-7</td>
                  <td>a) Ask students to form groups of 2-3 with partners who have different answers.<br>  b) Ask each group to discuss their reasoning & arrive at a common answer</td> <td>Group Activity<br> Teams up & discusses their answers with reasoning with group members<br>  Group members can change their answers<br>  Each group arrives at a common answer <br>  
                  <div class="bs-callout bs-callout-success">
                    <h4>Pedagogical pointer:</h4>
                    Group activity with visualization:
                  </div>
                </td> 
                <td></td>
              </tr>

              <tr>
                <td>7</td>
                <td>5-7</td>
                <td>Ask each student to again indicate their chosen answer option by show of hands as before</td> 
                <td>Individual Activity<br> Votes again by show of hands</td> 
                <td></td>
              </tr>
              <tr>
                <td>8</td>
                <td>5-7</td>
                <td>a) Run the visualization with the given input value.<br> b) Explain the answer with reasoning. </td> 
                <td> Notes the difference, if any, with their solution<br>  Receives instructor feedback on their errors</td> 
                <td> Enter the visualization features> (Prompt 4 P12 input7_radio nested) <br>
                 <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Pedagogical utility of this 
                </div>
              </td> </tr>
            </tr>
            <tr>
              <td>9</td>
              <td>5-7</td>
              <td>End the session by connecting the topic to Real-life, P5 input radio button nested<br>
                nsert Real-life connection> (Prompt 2  P5 input7_radio_nested)</td> 
                <td>Students relate the topic to real-life<br>
                 <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Connecting to real-life
                </div>
              </td> 
              <td> Enter the visualization features> (Prompt 4) </td> 
            </tr>


          </tbody>

        </table>

      </div>
      


    </body>

    </html>
