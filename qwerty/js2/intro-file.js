$(function start(){
  var introguide = introJs();
  var startbtn   = $('#start-btn');
  
  introguide.setOptions({
    steps: [
    {
      element: '.video-activity',
      intro: 'Watch the video to understand the topic',
      position: 'right'
    },
    {
      element: '#notessection',
      intro: 'Use the notepad below to write some notes, queries, ideas',
      position: 'left'
    },
    {
      element: '#questionsection',
      intro: 'Write atleast 3 questions here',
      position: 'left'
    }
    ]
  });
  
  startbtn.on('click', function(e){
      e.preventDefault();
      introguide.start();
    });


});