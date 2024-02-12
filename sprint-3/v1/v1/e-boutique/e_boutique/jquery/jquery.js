//animation lorsque tu appuies sur Menu

$(document).ready(function(){

    $("#menuButton").click(function(){
        $(".menu-content").slideToggle('slow', function() {
        });
    });

});

//animation droit a gauche
function deroulerLeTexteFooter() {
    var texte = document.getElementById("footerText");
    texte.innerHTML =
        texte.innerHTML.substring(1, texte.innerHTML.length) + texte.innerHTML[0];
}

setInterval(deroulerLeTexteFooter, 100);