function logIn() {
    var user = {
        "username": $("#logUsername").val(),
        "password": $("#logPassword").val()
    }

    $.ajax({
        type: "POST",
        url: "http://192.168.1.54:12108/verify",
        data: user,
        statusCode: {
            200: function (user) {
            },
            401: function () {
                alert('Erreur dans la saisie de vos identifiants.');
            }
        }
    });
}

function signIn() {
    var user = {
        "username": $("#signUsername").val(),
        "password": $("#signPassword").val()
    }

    $.ajax({
        type: "POST",
        url: "http://192.168.1.54:12108/adduser",
        data: user,
        statusCode: {
            200: function (user) {
                
            },
            401: function () {
                alert('Erreur dans la saisie de vos identifiants.');
            }
        }
    });
}