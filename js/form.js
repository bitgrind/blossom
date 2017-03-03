$(function() {
    //Login Input
    $("#login").submit(function() {
        event.preventDefault();
        var username = $("#form-username").val();
        var password = $("#form-password").val();
        console.log(username, password);
    }); //login form
    $("#register").submit(function() {
        event.preventDefault();
        var name = $("#form-name").val();
        var email = $("#form-email").val();
        var username = $("#form-username").val();
        var password = $("#form-password").val();
        var password2 = $("#form-password2").val();
        console.log(name, email, username, password, password2);
    }); //login form
}); //jQuery
