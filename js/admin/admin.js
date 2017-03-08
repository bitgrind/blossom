//** Admin JS Functions **//

function hideAll() {
  var arrayOfIds = ["site1", "site2", "account", "domains", "edit"];
  
  arrayOfIds.forEach(function(name) {
    var className = ("." + name);
    $(className).hide();
  });
}

function showAccountPanels() {
  $(".account, .domains").show();
}
