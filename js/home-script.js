$(function(){

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
    // var name =
    // var email =
    // var username =
    // var password =
    // var passwordRepeat =
    event.preventDefault();
    location.href= "build.html";
  });
  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    location.href= "admin.html";
  });
});
