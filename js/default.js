/**
* The default.js file is for general purpose javascript
* default.js is NOT for anything more dynamic or potentially conflicting
* Anything more dynamic or potentially conflicting will be in a seperate js file
* You will then link default.js and example.js into your html
*/


//////////////////////////
/*** Admin.js Section ***/
//////////////////////////

$("#accountNav").click(function() {
  hideAll();
  showAccountPanels();
});

$("#demo1").click(function() {
  $("#active-dropdown-text").text("Demo 1");
});

$("#demo2").click(function() {
  $("#active-dropdown-text").text("Demo 2");
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

/*** dashboard panels **
$("#headerSave").click(function(e) {
  e.preventDefault();
  $(".header-alert").show();
});

$("#paragraphSave").click(function(e) {
  e.preventDefault();
  $(".paragraph-alert").show();
});

$("#backgroundSave").click(function(e) {
  e.preventDefault();
  $(".background-alert").show();
});

$("#themeSave").click(function(e) {
  e.preventDefault();
  $(".theme-alert").show();
});

*/
