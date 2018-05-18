//récupération des arguments.
var url = window.location.href;
var iUrl = url.length - 1;
var urlGet = new URL(url);
var page = urlGet.searchParams.get("page");
var ins = urlGet.searchParams.get("in");
var co = urlGet.searchParams.get("co");

//Si l'un des arguments est présent dans l'url.
if (ins !== null || co !== null) {
    //On regarde sur quelle page est l'utilisateurs pour le rédirigé vers la meme page.
    var is_Home;
    page === null ? is_Home = true : is_Home = false;
    //Clean de l'url.
    for (iUrl; 0 < iUrl; iUrl--) {
        if (url[iUrl] === "/") {
            break;
        }
    }
    url = url.substring(0, iUrl);
    //On réaffecte l'argument page pour une bonne redirection.
    is_Home ? url : url = url + "?page=" + page;
    document.location = url;
}