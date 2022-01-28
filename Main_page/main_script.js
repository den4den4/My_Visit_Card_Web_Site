function ShowMenu() {
    var x = document.getElementById("menu")
    if (x.style.visibility === "hidden" || x.style.visibility == '') {
        x.style.visibility = "visible";
        x.style.height = "auto";
    }
    else {
        x.style.visibility = "hidden";
        x.style.height = "0";
    }
}
 

$(document).ready(function() {

$('.counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 8000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});



