$(function(){

  $("#js-typed").typed({
      // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
      stringsElement: $('#typed-strings'),
      typeSpeed: 150,
      backDelay: 500,
      loop: false,
      contentType: 'html', // or text
      // defaults to false for infinite loop
      loopCount: false,
      callback: function(){ foo(); },
      resetCallback: function() { newTyped(); }
  });

  $(".reset").click(function(){
      $("#typed").typed('reset');
  });
  //REGISTRATION FORM
  $("#register").submit(function(){
    event.preventDefault();
    location.href= "build.html";
  });
  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    location.href= "admin.html";
  });
});
