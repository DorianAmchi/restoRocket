//Requete AJAX de logIn.
// Le succes et l'echec de celle ci entraine une redirection traité dans un scripts séparé.
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
                document.location = "http://resto-rocket.bwb/&co=true&user=" + user;
            },
            401: function () {
                document.location = "http://resto-rocket.bwb/&co=false";
            }
        }
    });
}

//Requete AJAX de logIn.
// Le succes et l'echec de celle ci entraine une redirection avec argument traité dans un scripts séparé.
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
            200: function () { 
                document.location = "http://resto-rocket.bwb/&in=true";
            },
            401: function () {
                document.location = "http://resto-rocket.bwb/?in=false";
            }
        }
    });
}