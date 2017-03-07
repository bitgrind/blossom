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
  $("#register").submit(function(){
    event.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    var passwordRepeat = $("#password2").val();
    if((email && password && passwordRepeat) !== ""){
      location.href= "build.html";
    }else{
      alert("Please fill in all the inputs");
    }
  });//REGISTER

  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    var email = $("#email").val();
    var password = $("#password").val();
    if((email && password) !== ""){
      location.href= "admin.html";
    }else{
      alert("Please fill in all the inputs");
    }
  });
});
