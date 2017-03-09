



$(function(){
  $("#change").submit(function(){
    event.preventDefault();
    var e = document.getElementById("footerStyle");
    var val = e.options[e.selectedIndex].value;
    if (val === "st1"){
      window.open("preview.php")
    }else if (val ==="st2"){
      window.open("demo2b.php")
    }else if(val ==="st3"){
      window.open("demo2.php")
    }
  });
});//jQuery
