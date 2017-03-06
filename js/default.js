/**
* The default.js file is for general purpose javascript
* default.js is NOT for anything more dynamic or potentially conflicting
* Anything more dynamic or potentially conflicting will be in a seperate js file
* You will then link default.js and example.js into your html
*/

//////////////////////////
/*** Build.js Section ***/
//////////////////////////

$('#client-questions').submit(function() {
  alert("Form has been submitted!");
});

$('#previewBtn').submit(function() {
  alert("Preview was clicked!");
});
