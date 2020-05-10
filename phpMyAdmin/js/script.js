$(document).ready(function () {
    $('#logoutDiv').hide();
    $("#loginBtn").click(function() {
        url = "";
        posting = $.post(url,{username: $('#username').val(), password: $('#password').val});
        posting

    })
});
