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
  hideAll();
  showAccountPanels();
});

$("#previewNav").click(function() {
  hideAll();
  var value = $("#active-dropdown-text").text();
  value = value.toLowerCase();
  console.log(value);
  if (value === "site 1") {
    $(".site1").show();
  } else if (value === "site 2") {
    $(".site2").show();
  }
});

$("#site2").click(function() {
  $("#active-dropdown-text").text("Site 2");
  hideAll();
  $(".site2").show();
});

$("#site1").click(function() {
  $("#active-dropdown-text").text("Site 1");
  hideAll();
  $(".site1").show();
});

$("#changePasswordBtn").click(function() {
  alert("Password has been changed");
  alert("Or has it?");
});

$("#changeEmailBtn").click(function() {
  alert("Email has been changed");
  alert("For real though..");
});

$("#editNav").click(function() {
  hideAll();
  $(".edit").show();
});

/*** Edit forms ***/
$("#headerEditForm").submit(function(event) {
  event.preventDefault();
  alert("submit successful");
  
  
});

$("#paragraphEditForm").submit(function(event) {
  event.preventDefault();
  alert("submit successful");
});

$("#backgroundEditForm").submit(function(event) {
  event.preventDefault();
  alert("submit successful");
});

$("#unknownEditForm").submit(function(event) {
  event.preventDefault();
  alert("submit successful");
});





