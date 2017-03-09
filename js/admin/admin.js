//** Admin JS Functions **//

function hideAll() {
  var arrayOfIds = ["site1", "site2", "account", "domains", "edit"];
  
  arrayOfIds.forEach(function(name) {
    var className = ("." + name);
    $(className).hide();
  });
}

function showAccountPanels() {
  $(".account, .domains, .userInputs").show();
}




// Start of js for having 1 submit button for 4 different panels.. not worth.

//function setColorChanges() {
//  
//  var idArray = ["header-color", "paragraph-color", "background-color", "firebrick-red", "collosal-blue", "tango-orange"];
//  
//  var array = [];
//  
//  idArray.forEach(function(pId) {
//    var idName = ("#" + pId);
//    var value = $(idName).val();
//    array.push(value);
//  });
//  
//  return array;
//}
//
//function setFontStyle() {
//  
//  var classArray = ["serif-font", "sans-serif-font", "cursive-font"];
//  
//  var array = [];
//  
//  classArray.forEach(function(pClass) {
//    var className = ("." + pClass);
//    var value = $()
//    array.push(value);
//  });
//  
//  return array;
//}