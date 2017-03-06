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
  
  window.location.href='admin.html';

});


//////////////////////////
/*** Admin.js Section ***/
//////////////////////////

$("#accountNav").click(function() {
  $(".content").hide();
  $(".account").show();
});

$("#previewNav").click(function() {
  $(".content").show();
  $(".account").hide();
});

$("#site2").click(function() {
  $("#site2")
  $("#menu1").html()
});
