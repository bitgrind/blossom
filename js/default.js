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
  if (value === "site 1") {
    // $(".site1").show();
    window.open("demo1.html", "_blank");
  } else if (value === "site 2") {
    // $(".site2").show();
    window.open("demo2.html", "_blank");
  }
});

$("#site2").click(function() {
  $("#active-dropdown-text").text("Site 2");

});

$("#site1").click(function() {
  $("#active-dropdown-text").text("Site 1");

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
