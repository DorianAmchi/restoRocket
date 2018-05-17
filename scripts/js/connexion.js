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
                var url = window.location.href;
                var lastElementIndex = url.length - 1;
                var lastElement = url[lastElementIndex];
                //On vérifie la page actuelle pour bien placé les arguments.
                lastElement === "/" ? document.location = url + "?co=true&user=" + user : document.location = url + "&co=true&user=" + user;
            },
            401: function () {
                var url = window.location.href;
                var lastElementIndex = url.length - 1;
                var lastElement = url[lastElementIndex];
                lastElement === "/" ? document.location = url + "?co=false" : document.location = url + "&co=false";
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
                var url = window.location.href;
                var lastElementIndex = url.length - 1;
                var lastElement = url[lastElementIndex];
                lastElement === "/" ? document.location = url + "?in=true" : document.location = url + "&in=true";
            },
            401: function () {
                var url = window.location.href;
                var lastElementIndex = url.length - 1;
                var lastElement = url[lastElementIndex];
                lastElement === "/" ? document.location = url + "?in=false" : document.location = url + "&in=false";
            }
        }
    });
}