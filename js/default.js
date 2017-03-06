/**
* The default.js file is for general purpose javascript
* default.js is NOT for anything more dynamic or potentially conflicting
* Anything more dynamic or potentially conflicting will be in a seperate js file
* You will then link default.js and example.js into your html
*/

//////////////////////////
/*** Build.js Section ***/
//////////////////////////

$('.client-question-form').submit(function(event) {
  event.preventDefault();
  // code when the submit occurs goes here..

});

$('#previewBtn').click(function() {
  alert("Preview was clicked!");
  // code when the preview is clicked goes here..

});
