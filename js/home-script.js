$(function(){
  //TYPED JS
  $("#js-typed").typed({
      stringsElement: $('#typed-strings'),
      typeSpeed: 200,
      backDelay: 500,
      loop: true,
      contentType: 'html', // or text
      // defaults to false for infinite loop
      loopCount: true,
  });

  //REGISTRATION FORM
  $("#register").on("keypress",function(){
    var email = $("#emailSignUp").val();
    var password = $("#passwordSignUp").val();
    var passwordRepeat = $("input#password2").val();

    //FORM VALIDATION
    if( ((email && password && passwordRepeat) !== "") && (password === passwordRepeat)){
      location.href= "build.html";
    }else if ((password !== passwordRepeat)){
      //alert("Password does not match!");
    }else{
      //alert("Please fill in all the inputs");
    }
  });//REGISTER

  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();

    //FORM VALIDATION
    if((email && password) !== ""){
      location.href= "admin.html";
    }else{
      alert("Please fill in all the inputs");
    }
  });
});
