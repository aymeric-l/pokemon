var gauche = 500;
var haut = 800;
var keys = {};

$(window).on("keyup keydown", function (e) {
    e = e || event;
    keys[e.keyCode] = e.type === 'keydown';

    if (keys[90]) {
        haut = haut+100;
	$("#img").animate({top: (+haut+('px'))}, "fast");
    }
    if (keys[83]) {
        haut = haut-100;
	$("#img").animate({top: (+haut+('px'))}, "fast");
    }
    if (keys[81]) {
        gauche = gauche+100;
	$("#img").animate({left: (+gauche+('px'))}, "fast");
    }
    if (keys[68]) {
        gauche = gauche-100;
	$("#img").animate({left: (+gauche+('px'))}, "fast");
    }
});