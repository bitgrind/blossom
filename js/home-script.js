$(function(){

  $("#js-typed").typed({
      // strings: ["Typed.js is a <strong>jQuery</strong> plugin.", "It <em>types</em> out sentences.", "And then deletes them.", "Try it out!"],
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
    location.href= "build.html";
  });
  //LOGIN FORM
  $("#formLogIn").submit(function(){
    event.preventDefault();
    location.href= "admin.html";
  });
});
