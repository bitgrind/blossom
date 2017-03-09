

//KEY: dL3WMPgv7bQS_XRo3GyuCRuT9fjYfSLCr2F
//SECRET: XRo6Ttb6QdEcrG4xtGJszB
$(function(){
  $("#button").click(function(){
    var domainName = $("#name").val();
    $.getJSON("https://api.ote-godaddy.com/v1/domains/available?domain=" + domainName + "&checkType=FAST&forTransfer=false",
    function(dataObj){
      var available = dataObj.available;
      (available ? $("#result h1").text(dataObj.domain + " is available!"):$("#result h1").text(dataObj.domain + " is not available"));
    });
  });
});
    // API call
