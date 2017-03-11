var gauche = -825;
var haut = -870;
var MaisonTop = 430;
var MaisonLeft = 666;
var maisonBleuTop = 985;
var maisonBleuLeft = 68;
var keys = {};
var deplacement = true;
var topBase = 300;
var persoDeuxY = 300;

var taille = $(window).width();
var tailleL = taille-1280;
var centre = 600+(tailleL/2);

var YbddY = bddY-haut;
persoDeuxY = persoDeuxY-YbddY;

var XbddX = bddX-gauche;
//$("#joueurDeux").animate({left: (+(centre+topBase)+('px'))}, 1);
$("#joueurDeux").animate({top: (+(persoDeuxY)+('px'))}, 1);
$("#joueurDeux").animate({left: (+(centre+XbddX)+('px'))}, 1);


$("#personnage").animate({left: (+centre+('px'))}, 1);

window.addEventListener("keydown", function dep (event) {

////// BAS ///////
  if (event.keyCode == 83) {
    if($(window).width() != taille){
        taille = $(window).width();
        tailleL = ($(window).width())-1280;
        centre = centre = 600+(tailleL/2);
        $("#personnage").animate({left: (+centre+('px'))}
        , 10);}
    if(deplacement == true){
        if(gauche ==  -1305 && haut == -550){}
        // else if(gauche ==  -2345 && haut == -870){}
        // else if(gauche ==  -2265 && haut == -870){}
        // else if(gauche ==  -2185 && haut == -870){}
        // else if(gauche ==  -2105 && haut == -870){} 
        // else if(gauche ==  -2025 && haut == -870){}
        // else if(gauche ==  -1945 && haut == -870){}
        // else if(gauche ==  -1865 && haut == -1030){}
        // else if(gauche ==  -1785 && haut == -1030){}
        // else if(gauche ==  -1705 && haut == -1030){}
        // else if(gauche ==  -1625 && haut == -1030){}
        // else if(gauche ==  -1545 && haut == -1030){}
        // else if(gauche ==  -1465 && haut == -1030){}
        // else if(gauche ==  -1385 && haut == -1030){}
        // else if(gauche ==  -1305 && haut == -1110){}
        // else if(gauche ==  -1225 && haut == -1110){}
        // else if(gauche ==  -1145 && haut == -1030){}
        // else if(gauche ==  -1065 && haut == -950){}
        // else if(gauche ==  -985 && haut == -950){}
        // else if(gauche ==  -905 && haut == -950){}
        // else if(gauche ==  -825 && haut == -950){}
        // else if(gauche ==  -665 && haut == -1350){}
        // else if(gauche ==  -345 && haut == -1510){}
        // else if(gauche ==  -425 && haut == -1510){}
        // else if(gauche ==  -505 && haut == -1510){}
        // else if(gauche ==  -585 && haut == -1510){}

        else{
    haut = haut-80;
    MaisonTop = MaisonTop-80;
    maisonBleuTop = maisonBleuTop-80;
    YbddY = bddY-haut;
    persoDeuxY = 300-YbddY;

    $("#img").animate({top: (+haut+('px'))}, 300);
    //$("#img").css({'margin-top': haut},300);
    $("#maison").animate({top: (+MaisonTop+('px'))}, 300);
    $("#maisonBleu").animate({top: (+maisonBleuTop+('px'))}, 300);
    $("#joueurDeux").animate({top: (+(persoDeuxY)+('px'))}, 300);
    console.log(bddY);
    deplacement = false;

    setTimeout(function(){
    deplacement = true;
    },300);
}
}
}

////// HAUT ///////
if (event.keyCode == 90) {
    if($(window).width() != taille){
        taille = $(window).width();
        tailleL = ($(window).width())-1280;
        centre = centre = 600+(tailleL/2);
        $("#personnage").animate({left: (+centre+('px'))}
        , 10);}
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1305 && haut == -710){}
        // else if(gauche == -1385 && haut == -710){}//////
        // else if(gauche == -1465 && haut == -710){}//
        // else if(gauche == -1545 && haut == -710){}// GRAND BATIMENT ROUGE
        // else if(gauche == -1705 && haut == -710){}// 
        // else if(gauche == -1785 && haut == -710){}//////
        // else if(gauche == -1865 && haut == -710){}// CARRE DROIT BATIMENT ROUGE
        // else if(gauche == -1945 && haut == -630){}/////
        // else if(gauche ==  -1305 && haut == -390){}
        // else if(gauche ==  -1225 && haut == -390){}
        // else if(gauche ==  -1145 && haut == -390){}
        // else if(gauche ==  -1065 && haut == -390){}
        // else if(gauche ==  -2025 && haut == -710){}
        // else if(gauche ==  -2105 && haut == -710){}
        // else if(gauche ==  -2185 && haut == -710){}
        // else if(gauche ==  -2265 && haut == -710){}
        // else if(gauche ==  -2345 && haut == -710){}
        // else if(gauche ==  -825 && haut == -1270){}
        // else if(gauche ==  -905 && haut == -1270){}
        // else if(gauche ==  -985 && haut == -1270){}
        // else if(gauche ==  -1065 && haut == -1270){}
        // else if(gauche ==  -1145 && haut == -1830){}
        // else if(gauche ==  -1225 && haut == -1830){}
        // else if(gauche ==  -1305 && haut == -1830){}
        // else if(gauche ==  -1385 && haut == -1750){}
        // else if(gauche ==  -665 && haut == -1510){}
        // else if(gauche ==  -585 && haut == -1830){}
        // else if(gauche ==  -505 && haut == -1830){}
        // else if(gauche ==  -425 && haut == -1830){}
        // else if(gauche ==  -345 && haut == -1830){}
        else{
    haut = haut+80;
    MaisonTop = MaisonTop+80;
    maisonBleuTop = maisonBleuTop+80;
    persoDeuxY = persoDeuxY+80;

    YbddY = bddY-haut;
    persoDeuxY = 300-YbddY;

    $("#img").animate({top: (+haut+('px'))}, 300);
    $("#maison").animate({top: (+MaisonTop+('px'))}, 300);
    $("#maisonBleu").animate({top: (+maisonBleuTop+('px'))}, 300);
    $("#joueurDeux").animate({top: (+(persoDeuxY)+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}

////// GAUCHE ///////
if (event.keyCode == 81) {
    if($(window).width() != taille){
        taille = $(window).width();
        tailleL = ($(window).width())-1280;
        centre = centre = 600+(tailleL/2);
        $("#personnage").animate({left: (+centre+('px'))}
        , 10);}
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1945 && haut == -630){}
        // else if(gauche ==  -1065 && haut == -390){}
        // else if(gauche ==  -1225 && haut == -1110){}
        // else if(gauche ==  -1145 && haut == -1030){}
        // else if(gauche ==  -1385 && haut == -1750){}
        // else if(gauche ==  -745 && haut == -1430){}
        // else if(gauche ==  -665 && haut == -1590){}
        // else if(gauche ==  -665 && haut == -1670){}
        // else if(gauche ==  -665 && haut == -1750){}
        else{
    gauche = gauche+80;
    MaisonLeft = MaisonLeft+80;
    maisonBleuLeft = maisonBleuLeft+80;
    XbddX = XbddX+80;

    $("#img").animate({left: (+gauche+('px'))}, 300);
    $("#maison").animate({left: (+MaisonLeft+('px'))}, 300);
    $("#maisonBleu").animate({left: (+maisonBleuLeft+('px'))}, 300);
    $("#joueurDeux").animate({left: (+(centre+XbddX)+('px'))}, 300);
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}

////// DROITE //////
if (event.keyCode == 68) {
    if($(window).width() != taille){
        taille = $(window).width();
        tailleL = ($(window).width())-1280;
        centre = centre = 600+(tailleL/2);
        $("#personnage").animate({left: (+centre+('px'))}
        , 10);}
    if(deplacement == true){
        /// COLLISION ///
        if(gauche == -1225 && haut == -630){}
        // else if(gauche == -1945 && haut == -630){}
        // else if(gauche ==  -1305 && haut == -550){}
        // else if(gauche ==  -1305 && haut == -470){}
        // else if(gauche ==  -1305 && haut == -390){}
        // else if(gauche ==  -2345 && haut == -710){}
        // else if(gauche ==  -2345 && haut == -790){}
        // else if(gauche ==  -2345 && haut == -870){}
        // else if(gauche ==  -1865 && haut == -950){}
        // else if(gauche ==  -1865 && haut == -1030){}
        // else if(gauche ==  -1305 && haut == -1110){}
        // else if(gauche ==  -745 && haut == -1030){}
        // else if(gauche ==  -745 && haut == -1110){}
        // else if(gauche ==  -745 && haut == -1190){}
        // else if(gauche ==  -1065 && haut == -1270){}
        // else if(gauche ==  -1065 && haut == -1350){}
        // else if(gauche ==  -1065 && haut == -1430){}
        // else if(gauche ==  -1065 && haut == -1510){}
        // else if(gauche ==  -1065 && haut == -1590){}
        // else if(gauche ==  -1065 && haut == -1670){}
        // else if(gauche ==  -1065 && haut == -1750){}
        // else if(gauche ==  -1385 && haut == -1750){}
        // else if(gauche ==  -585 && haut == -1430){}
        // else if(gauche ==  -265 && haut == -1750){}
        // else if(gauche ==  -265 && haut == -1670){}
        // else if(gauche ==  -265 && haut == -1590){}
        else{
    gauche = gauche-80;
    MaisonLeft = MaisonLeft-80;
    maisonBleuLeft = maisonBleuLeft-80;
    XbddX = XbddX-80;

    $("#img").animate({left: (+gauche+('px'))}, 300);
    $("#maison").animate({left: (+MaisonLeft+('px'))}, 300);
    $("#maisonBleu").animate({left: (+maisonBleuLeft+('px'))}, 300);
    $("#joueurDeux").animate({left: (+(centre+XbddX)+('px'))}, 300);
    
    deplacement = false;

    setTimeout(function(){
       deplacement = true;
    },300);
}
}
}
});

