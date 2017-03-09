



$(function(){
  $("#change").click(function(){
    var val = $("#styles").val();
    if (val === "st1"){
      window.load("preview.php")
    }else if (val ==="st2"){
      window.load("demo2b.php")
    }else if(val ==="st3"){
      window.load("demo2.php")
    }
  });
});//jQuery
