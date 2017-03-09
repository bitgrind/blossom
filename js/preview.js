



$(function(){
  $("#change").click(function(){
    var val = $("#styles").val();
    if (val === "st1"){
      window.open("preview.php", "_self")
    }else if (val ==="st2", "_self"){
      window.open("demo2b.php")
    }else if(val ==="st3","_self"){
      window.open("demo2.php")
    }
  });
});//jQuery
