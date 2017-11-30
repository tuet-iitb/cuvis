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
      <link rel="stylesheet" href="css/fontsize.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--  <link rel="stylesheet" href="css/heroic-features.css"> -->
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
      <?php include("topSectionPrompt.php"); ?>
      <div  id="printableDiv" media="print">
        <div class="col-lg-1 container "></div>
        <div class="container col-lg-10 ">
          <div class="col-lg-12 div">
            <p class="pclassx colorg" style="font-weight: bold;" >
              <span>Learning Design for </span>
              <span style="color: green!important"  id="topicName"><?php echo $topicName;  ?></span><br>
              <span>Domain = </span>
              <span style="color: green!important" id="domainName"><?php domainNameF (); ?></span>
              <span>Course Name = </span>
              <span style="color: green!important" id="courseName"><?php echo $courseName;  ?></span><br>
              <span>Topic Name = </span>
              <span style="color: green!important" id="topicName"><?php echo $topicName;  ?></span><br>
              <span>Objective = </span>
              <span style="color: green!important" id="objective">
                <?php 
                objectivesF ();
                ?>      
              </span><br>
              <span>Visualization URL =</span>
              <span style="color: green!important" id="url"> <?php echo $inputUrl;  ?></span><br>
              <span>Setting =</span>
              <span style="color: green!important" id="instructionalSetting"><?php echo $instrctionalSetting; ?></span>
              <span>Time Duration =</span>
              <span style="color: green!important" id="time"><?php timeF(); ?></span> 
              <span> Strategy Suggested =</span>
              <span style="color: green!important" id="stategySuggested"><?php  strategyF ();  ?></span>
            </p>
          </div>



          <div class="table-responsive colorg col-lg-12">
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
                  <td></td>
                  <td>
                    Show the ‘Peer Instruction’ question stem (not the options)
                    <span style="color: #EC911E!important"><b><?php echo $_SESSION['P7input1_text']; ?></b></span>
                  </td>
                  <td>Listens & Observes  

                  </td>
                  <td>
                  </td>
                </tr>   
                <tr>
                  <td>2</td>
                  <td rowspan="2">2</td>
                  <td>Play the visualization for the multiple conditions:<br><span style="color: #EC911E;"><b><?php echo $_SESSION['P9input1_text']; ?></b></span><br>Pause after each condition set. Replay as many times as required.
                  </td>
                  <td>Listens & Observes</td>
                  <td>
                    <ul>
                      <li> Play button </li>
                      <li><span style="color: #EC911E;"><b><?php p9input7_radioNested_elementF (); ?></b></span></li>
                    </ul>
                    <br>

                  </td>
                </tr>
                <tr>
                 <td>3</td>

                 <td>Pause the visualization at these points.<br>
                  <span style="color: #EC911E;"><b><?php echo $_SESSION['P29ainput4_image']; ?></b></span><br>
                  <span style="color: #EC911E;"><b><?php echo $_SESSION['P29ainput8_image']; ?></b></span><br>
                </td>
                <td>Observes on-screen phenomenon
                </td>
                <td>
                 <ul>
                  <li> Pause button</li>
                </ul>
              </td>

            </tr>
            <tr>
              <td>4</td>
              <td rowspan="3">3-5</td>
              <td>
                <ol type="a">
                  <li>Show PI question with answer options:<br>
                   <span style="color: #EC911E;"><b><?php echo $_SESSION['P7input1_text']; ?></b></span><br><span style="color: #EC911E;"><b><?php echo $_SESSION['P7input11_text']; ?></b></span></li>
                 
                 <!--  <li></li> -->
                </ol>
              </td>
              <td><b>Individual Activity</b><br> ‘Thinks’ about the hypothesis for 2 – 3 mins.
              </td>
            </td>
            <td>Pause button</td>
          </tr>
          <tr>
            <td>5</td>
            
            <td>
              <ol type="a">
                <li>Ask students to think & commit to an answer.</li>
                <li>Ask guiding questions to focus student observations<br>
                  <span style="color: #EC911E;"><strong><?php echo $_SESSION['P14input1_text']; ?></strong></span></li>
                <li>Call out each option & ask students to raise their hand if it matches with their answer</li>
                
              </ol>
              </td>
              <td>Raises hand when instructor calls out their answer
              </td>
              <td></td>
            </tr>
            <tr>
              <td>6</td>

              <td>Ask students to think individually & write down their answer with reasoning
                </td> 
                <td>
                  Writes down the answer with reasoning
                </td> 
                <td></td>
              </tr>

              <tr>

                <td>7</td>
                <td rowspan="5">5- 7</td>
                <td>
                  <ol type="a">
                <li>Ask students to form groups of 2-3 with partners who have different answers.</li>
                <li>Ask each group to discuss their reasoning & arrive at a common answer</li>
                <li>Ask questions to guide student reasoning as teacher goes round the class<br> <span style="color: #EC911E;"><strong><?php echo $_SESSION['P24input1_text']; ?></strong></span></li>
                
              </ol>
                </td>
                <td><b>Group Activity</b><br>
                  <ul>
                    <li>Teams up & discusses their answers with reasoning with group members</li>
                    <li>Group members can change their answers</li>
                    <li>Each group arrives at a common answer</li>
                  </ul>
                </td> 
                <td> 
                </td> </tr>



                <tr>
                  <td>8</td>

                  <td>
                    <ul>
                      <li>Ask each student to again indicate their chosen answer option by show of hands as before.</li>
                    </ul>
                    <ol type="a">
                      <li>Run the visualization with the given input value.</li>
                      <li>Explain the answer with reasoning.</li>
                    </ol>
                  </td> 
                  <td><b>Individual Activity</b><br>
                    Votes again by show of hands
                    <ul> 
                      <li>Notes the difference, if any, with their solution</li>
                      <li>Receives instructor feedback on their errors</li>
                    </ul>
                  </td> 
                  <td>
                     <ul>
                     
                      <li><span style="color: #EC911E;"><b><?php p9input7_radioNested_elementF (); ?></b></span></li>
                    </ul>
                  </td> 
                </tr>
                <tr>
                  <td>9</td>
                  <td >Ask students to think individually & write down their answer with reasoning</td>
                  <td>
                   Writes down the answer with reasoning
                    </td>
                    <td>
                   </td>
                  
                 </tr>
                
                 <tr>
                  <td>10</td>

                  <td>Do this step only if the activity question itself was based in real-life context.
                    <br>
                    End the session by connecting the topic to Real-life :<br>
                    <span style="color: #EC911E;"><b><?php p28a_input7_radioNested_elementF (); ?></b></span><br>

                    </td> 
                    <td>Tries to respond to the guiding questions asked
                    </td> 
                    <td></td> 
                  </tr>
                  
             

             </tbody>

           </table>

         </div>
       </ol>
     </td>
   </tr>
 </ul>
</td>
</tr>
</ul>
</td>
</tr>
</tbody>
</table>
</div>


</body>

</html>
