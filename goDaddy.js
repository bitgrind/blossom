

//KEY: dL3WMPgv7bQS_XRo3GyuCRuT9fjYfSLCr2F
//SECRET: XRo6Ttb6QdEcrG4xtGJszB

    // API call
    $.getJSON('https://api.ote-godaddy.com/v1/domains/available?domain=alex.com&checkType=FAST&forTransfer=false',
    function(dataObj){
          $('#result').text(dataObj.data);
    });
