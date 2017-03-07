$(function(){

  //REGISTRATION FORM
  $("#register").submit(function(){
    event.preventDefault();
    location.href="build.html";
  });
  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    location.href="admin.html";
  });
});
