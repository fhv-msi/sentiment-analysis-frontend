$(function() {
    $('#loginBtn').on('click', function (e) {
        e.preventDefault(); // disable the default form submit even

        $.ajax({
            url: "https://" + $('script[src*=auth]').attr('data-backend') +"/login",
            type: "POST",
            data: {
                email: $('#email').val()
            },
            success: function (response) {
                write('token', response);
                window.location.replace("analysis.php");
            },
            error: function (response) {
                alert('error during login, please try again');
            },
        });
    });
});

$(function() {
    $('#logoutBtn').on('click', function (e) {
        e.preventDefault(); // disable the default form submit even

        $.ajax({
            url: "https://" + $('script[src*=auth]').attr('data-backend') +"/logout",
            type: "POST",
            data: {
                token: read('token')
            },
            success: function (response) {
                clear();
                window.location.replace("index.html");
            },
            error: function (response) {
                alert('error during login, please try again');
            },
        });
    });
});