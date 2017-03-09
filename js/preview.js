



$(function(){
  $("#change").click(function(){
    var val = $("#styles").val();
    if (val === "st1"){
      window.open("preview.php")
    }else if (val ==="st2"){
      console.log("tits")
      window.open("demo2b.php")
    }else if(val ==="st3"){
      window.open("demo2.php")
    }
  });
});//jQuery
