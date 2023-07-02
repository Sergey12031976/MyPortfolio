$(document).scroll(function () {if ($(document).width() < 1024) return false;
    if ($(document).scrollTop() > $('.full-page').height() / 2.2)
        $("#head").addClass ("fixed");
    else $("#head").removeClass ("fixed");
});

$("#show-menu").on("click", function() {
    $("#hidden-menu").animate({"left": 0}, 500);
});

$("#hidden-menu .close").on("click", function() {
    $("#hidden-menu").animate({"left": "-300px"}, 200);
});