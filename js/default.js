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
  $(".site1").hide();
  $(".account").show();
});

$("#previewNav").click(function() {
  $(".content").show();
  $(".account").hide();
});

$("#site2").click(function() {
  $("#active-dropdown-text").text("Site 2");
});

$("#site1").click(function() {
  $("#active-dropdown-text").text("Site 1");
  $(".content").show();
});

function hideAll() {
  var arrayOfIds = ["site1", "site2", "account"];
  
  arrayOfIds.forEach(function() {
    
  });
}





