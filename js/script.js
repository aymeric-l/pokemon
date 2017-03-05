var gauche = -665;
var haut = -790;
var keys = {};
var deplacement = true;


window.addEventListener("keydown", function dep (event) {

////// BAS ///////
  if (event.keyCode == 83) {
    if(deplacement == true){
    haut = haut-80;
    console.log('yy');
    $("#img").animate({top: (+haut+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
    deplacement = true;
    },300);
}
}

////// HAUT ///////
if (event.keyCode == 90) {
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1305 && haut == -710){}
        else if(gauche == -1385 && haut == -710){}//////
        else if(gauche == -1465 && haut == -710){}//
        else if(gauche == -1545 && haut == -710){}// GRAND BATIMENT ROUGE
        else if(gauche == -1705 && haut == -710){}// 
        else if(gauche == -1785 && haut == -710){}//////
        else if(gauche == -1865 && haut == -710){}// CARRE DROIT BATIMENT ROUGE
        else if(gauche == -1945 && haut == -630){}/////
        else{
    haut = haut+80;
    $("#img").animate({top: (+haut+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}

////// GAUCHE ///////
if (event.keyCode == 81) {
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1945 && haut == -630){}
        else{
    gauche = gauche+80;
    $("#img").animate({left: (+gauche+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}

////// DROITE //////
if (event.keyCode == 68) {
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1225 && haut == -630){}
        else if(gauche == -1945 && haut == -630){}
        else{
    gauche = gauche-80;
    $("#img").animate({left: (+gauche+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}
});