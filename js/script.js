var gauche = -790;
var haut = -770;
var keys = {};

$(window).on("keyup keydown", function (e) {
    e = e || event;
    keys[e.keyCode] = e.type === 'keydown';

    if (keys[90]) {
        haut = haut+80;
	$("#img").animate({top: (+haut+('px'))}, "fast");
    }
    if (keys[83]) {
        haut = haut-80;
	$("#img").animate({top: (+haut+('px'))}, "fast");
    }
    if (keys[81]) {
        gauche = gauche+80;
	$("#img").animate({left: (+gauche+('px'))}, "fast");
    }
    if (keys[68]) {
        gauche = gauche-80;
	$("#img").animate({left: (+gauche+('px'))}, "fast");
    }
});