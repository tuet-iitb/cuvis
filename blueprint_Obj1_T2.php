    <?php
    session_start();
    include 'blueprintValues.php'; 
    // $domainName = $_SESSION['domain_name'];
    // $topicName = $_SESSION['topic_name'];
    // $courseName = $_SESSION['course_name'];
    // $instrctionalSetting = $_SESSION['optradio1'];
    // $time= $_SESSION['optradioTime'];
    // $objectives = $_SESSION['optradio2'];

    // $inputUrl = $_SESSION['input_url'];

    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!-- <link rel="stylesheet" href="css/heroic-features.css"> -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <link rel="stylesheet" href="css/fontsize.css">
      <link rel="stylesheet" href="css/callout.css">
      <link rel="stylesheet" href="css/table.css">
      <title>Blueprints</title>



    </head>

    <body>
      <?php include("topSectionPrompt.php"); ?>
      <div  id="printableDiv">
        <div class="col-lg-1 container "></div>
        <div class="container col-lg-10 ">
          <div class="col-lg-12">
            <p class="pclassx" style="font-weight: bold;" >
              <span>Learning Design for </span>
              <span style="color: green" id="topicName"><?php echo $topicName;  ?></span><br>
              <span>Domain = </span>
              <span style="color: green" id="domainName"><?php domainNameF (); ?></span>
              <span>Course Name = </span>
              <span style="color: green" id="courseName"><?php echo $courseName;  ?></span><br>
              <span>Topic Name = </span>
              <span style="color: green" id="topicName"><?php echo $topicName;  ?></span><br>
              <span>Objective = </span>
              <span style="color: green" id="objective">
                <?php 
                objectivesF ();
                ?>      
              </span><br>
              <span>Visualization URL =</span>
              <span style="color: green" id="url"> <?php echo $inputUrl;  ?></span><br>
              <span>Setting =</span>
              <span style="color: green" id="instructionalSetting"><?php echo $instrctionalSetting; ?></span>
              <span>Time Duration =</span>
              <span style="color: green" id="time"><?php timeF(); ?></span> 
              <span> Strategy Suggested =</span>
              <span style="color: green" id="stategySuggested"><?php  strategyF ();  ?> </span>
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
                  <td>Play the visualization for the multiple conditions selected:<br>Enter the multiple condition sets to show relationship between various system variables
                   <br> <span style="color: #EC911E;"><b><?php echo $_SESSION['P9input1_text']; ?></b></span>
                   <div class="bs-callout bs-callout-success">         
                    <h4>Pedagogical pointer:</h4>
                    Mapping to your objective
                  </div>
                </td>
                <td>Listens & Observes </td>
                <td>
                  <ul>
                    <li> Play button </li>
                    <li>Simultaneous representation</li>
                    <li><span style="color: #EC911E;"><b><?php p9input7_radioNested_elementF(); ?></b></span></li>
                  </ul>
                  <br>
                  <div class="bs-callout bs-callout-success">
                    <h4>Pedagogical pointer:</h4>
                    Pausing to do an activity with visualization
                  </div>
                </td>
              </tr>   
              <tr>
                <td>2</td>
                <td rowspan="4">3-5</td>
                <td>Pause the visualization at this point.<br>
                  <span style="color: #EC911E;"><b><?php echo $_SESSION['P29input4_image']; ?></b></span>
                  <div class="bs-callout bs-callout-success"><h4>Pedagogical pointer:</h4>
                    Pausing to do an activity with visualization
                  </div>
                </td>
                <td>Listens & Watches</td>
                <td>
                  <ul>
                    <li> Pause button</li>
                  </ul>
                </td>
              </tr>
              <tr>
               <td>3</td>
               
               <td>Pose the activity question :<br>
                <span style="color: #EC911E;"><b><?php echo $_SESSION['P13input1_text']; ?></b></span><br>
              </td>
              <td>Read the activity question
                <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Activity question mapped to objective
                </div>
              </td>
              <td>
                <ul>
                  <li> Pause button</li>
                </ul>
              </td>

            </tr>
            <tr>
             <td>4</td>
             
             <td>Show Think phase question: Individual activity<br>
              <span style="color: #EC911E;"><b><?php echo $_SESSION['P25input11_text']; ?></b></span><br>
            </td>
            <td>Individual Activity
              ‘Thinks’ about the answer
              for 2 – 3 mins.
            </td>
            <td> 
              <ul>
                
              </ul>
            </td>

          </tr>
          <tr>
            <td></td>
            
            <td>Ask students to think individually & write down their answer with reasoning</td>

            <td>Writes down the answer with reasoning<br>
              <div class="bs-callout bs-callout-success">
                <h4>Pedagogical pointer:</h4>
              Strategy Implementation steps</div>
            </td>
            
            <td></td>
          </tr>
          <tr>
            <td>5</td>
            <td>5-10</td>
            <td>
              <ul>
                <li>Ask students to form groups of 2-3</li>
                <li>Ask students to discuss their answers of ‘Think’ phase question</li>
                <li>Pair Phase: Group activity</li>
                <li>
                  <ul>
                    <li>Discuss your answer + reasoning if you do not agree with your friend’s answers</li> 
                    <li>You can also change your answer.</li>
                    <li>Together agree on a final answer</li>
                    <li><span style="color: #EC911E;"><b><?php echo $_SESSION['P25input5_text']; ?></b></span></li>
                    <li>Come up with a solution together</li>
                  </ul>
                </li>
              </ul>
            </td>
            <td><b>Group Activity</b><br>
              <ul>
                <li>Teams up & discusses their ‘Think’ phase answers with group members</li>
                <li>Discusses & writes down solution to ‘Pair’ phase question as a group</li>
              </ul>
              <div class="bs-callout bs-callout-success">
                <h4>Pedagogical pointer:</h4>
                Group activity with visualization:
              </div>
            </td>
            <td></td>
          </tr>
          <tr>
            <td>6</td>
            <td rowspan="4">12-15</td>
            <td>
              <ul>
                <li>Ask random student groups to share their solutions with the class. Highlight important points of each answer.</li>
              </ul>
            </td> 
            <td><b>Group Activity</b><br>
              <ul>
                <li>Presents their group solution to the class.</li>
              </ul>
            </td> 
            <td></td>
          </tr>

          <tr>
            <td>7</td>
            
            <td>
              <ul>
                <li>After 5-10 mins., show the ‘Share’ phase question</li>
                <li>Share phase : Class Activity</li>
                <ol>
                  <li><span style="color: #EC911E;"><?php p5input7_radioNested_elementF(); ?></li>
                    <li>Compare your answer with the solution being shown</li>
                    <li><u>Underline the errors</u> you find in your solution</li>                          
                  </ol>
                </ul>

              </td> 
              <td><b>Group Activity</b><br>
                <ul>
                  <li>Compares their solution with what is shown on-screen</li>
                </ul> 
                <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Promotes selfdiagnosis of error
                </div>
              </td>
              <td></td>
            </tr>
            <tr>
              <td>8</td>
              
              <td>
                <ol type="a">
                  <li> Run the visualization with the given input value.</li>
                </ol> 
              </td> 
              <td>
                <ul>
                  <li>Notes the difference, if any, with their solution </li>
                  <li> Receives instructor feedback on their errors</li>
                </ul>
              </td> 
              <td>
                <span style="color: #EC911E;"><b><?php p25input7_radioNested_elementF (); ?></b></span><br>
                <div class="bs-callout bs-callout-success">
                  <h4>Pedagogical pointer:</h4>
                  Pedagogical utility of this visualization feature
                </div>
              </td> 
            </tr>
            
            <tr id="col9">
              <td>9</td>
              
              <td>End the session by connecting the topic to Real-life:
                <span style="color: #EC911E;"><b><?php p5input7_radioNested_elementF (); ?></b></span><br>
              </td> 
              <td>Students relate the topic to real-life<br>
               <div class="bs-callout bs-callout-success">
                <h4>Pedagogical pointer:</h4>
                Connecting to real-life
              </div>
            </td> 
            <td></td> 
          </tr>


        </tbody>

      </table>

    </div>


  </div>
</body>

</html>
