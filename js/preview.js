
$(function(){
  $("#change").click(function(){
    var val = $("#styles").val();
    if (val === "st1"){
      window.open("preview.php?contentId=", "_self")
    }else if (val ==="st2"){
      window.open("demo2b.php?contentId=","_self")
    }else if(val ==="st3"){
      window.open("demo2.php?contentId=","_self")
    }
  });
});//jQuery
