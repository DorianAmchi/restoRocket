
$(document).ready(function () {
    $.ajax({
        type: "POST",
        url: "http://resto-rocket.bwb/dao/restaurants.php",
        data: {function2call: 'get_restaurants'},
        dataType: 'json',
        success: function (output) {
            info_resto(output);
        }
    });
});

function detailsResto(id) {
    $.ajax({
        type: "POST",
        url: "http://resto-rocket.bwb/dao/restaurants.php",
        data: {function2call: 'get_restaurant', id:id},
        dataType: 'json',
        success: function (output) {
            info_resto(output);
        }
    });
}

function addRestaurant() {
    alert("fruit rouge");
}



function info_resto(restaurants) {
    var nom = [];
    var id = [];
    for (var restaurant of restaurants) {
        for (var i = 0; i < restaurant.length; i++) {
            var detail = restaurant[i];
            for (var key in detail) {
                if (key === "nom") {
                    nom.push(detail[key]);
                } else if (key === "id") {
                    id.push(detail[key]);
                }
            }
        }
    }
    affichageResto(nom, id);
    console.log(nom);
    console.log(id);
}

function affichageResto(nom, id) {
    for (var i = 0; i < nom.length; i++) {
        $("#restaurants").append(
                $("<div>").addClass('col-sm-4').append(
                $("<div>").addClass('card mb-4 box-shadow').append(
                $("<div>").addClass('restaurant').append(
                $("<p>").addClass('card-text nomRestaurant').text(nom[i])).append(
                $("<div>").attr('id', 'detailResto' + id[i])).append(
                $("<div>").addClass('boutons').append(
                $("<button>").attr('type', 'button')
                .attr('id', 'addCard' + id[i])
                .addClass('btn btn-sm btn-outline-secondary')
                .click(function () {
                    alert('bijour');
                })
                .text("Add Carte")).append(
                $("<button>").attr('type', 'button')
                .addClass('btn btn-sm btn-outline-secondary')
                .click(function () {
                    detailsResto(id[i]);
                })
                .text("Details")
                )))));
    }
    $("#restaurants").append(
            $("<div>").addClass('col-sm-4').append(
            $("<div>").addClass('card mb-4 box-shadow').append(
            $("<div>").addClass('restaurant').append(
            $("<button>").attr('type', 'button')
            .addClass('btn btn-sm btn-outline-secondary')
            .click(function () {
                addRestaurant();
            })
            .text("Add Restaurant")))));
}