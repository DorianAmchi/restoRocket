//Requete AJAX de logIn.
// Le succes et l'echec de celle ci entraine une redirection traité dans un scripts séparé.
function logIn() {
    var user = {
        "username": $("#logUsername").val(),
        "password": $("#logPassword").val()
    };

    $.ajax({
        type: "POST",
        url: "http://resto-rocket.bwb/dao/user.php",
        data: {function2call: 'log_user', user: user},
        dataType: 'text',
        success: function (output) {
            document.location = output;
        }
    });
//    $.ajax({
//        type: "POST",
//        url: "http://192.168.1.54:12108/verify",
//        data: user,
//        statusCode: {
//            200: function (user) {
//                var url = window.location.href;
//                var bool = true;
//                var requete = "co";
//                redirect(url, bool, requete, user);
//            },
//            401: function () {
//                var url = window.location.href;
//                var bool = false;
//                var requete = "co";
//                redirect(url, bool, requete)
//            }
//        }
//    });
}

//Requete AJAX de logIn.
// Le succes et l'echec de celle ci entraine une redirection avec argument traité dans un scripts séparé.
function signIn() {
    var user = {
        "username": $("#signUsername").val(),
        "password": $("#signPassword").val(),
        "email": $("#signEmail").val()
    };

    $.ajax({
        type: "POST",
        url: "http://resto-rocket.bwb/dao/user.php",
        data: {function2call: 'create_user', user: user},
        dataType: 'text',
        success: function (output) {
            document.location = output;
        }
//        ,
//        401: function () {
//            var url = window.location.href;
//            var bool = false;
//            var requete = "co";
//            redirect(url, bool, requete)
//        }

    });
}

//    $.ajax({
//        type: "POST",
//        url: "http://192.168.1.54:12108/adduser",
//        data: user,
//        statusCode: {
//            200: function () {
//                var url = window.location.href;
//                var bool = true;
//                var requete = "in";
//                redirect(url, bool, requete)
//            },
//            401: function () {
//                var url = window.location.href;
//                var bool = false;
//                var requete = "in";
//                redirect(url, bool, requete);
//            }
//        }
//    });
//}

/*Fonction de redirection. En fonction de :
 *  -l'url, 
 *  -un booléen correspondant à l'échec ou a la réussite de la requete AJAX
 *  -l'action de la requete, connexion ou inscription
 *  -Le retour de la requete si il y en a.
 *La redirection inclu les arguments pour le traitement modal.
 */