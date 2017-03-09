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

$("#previewNav").click(function() {
  var value = $("#active-dropdown-text").text();
  value = value.toLowerCase();
  console.log(value);
  if (value === "demo 1") {
    // $(".site1").show();
    window.open("demo1.html", "_blank");
  } else if (value === "demo 2") {
    // $(".site2").show();
    window.open("demo2.html", "_blank");
  }
});

$("#site2").click(function() {
  $("#active-dropdown-text").text("Demo 1");

});

$("#site1").click(function() {
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