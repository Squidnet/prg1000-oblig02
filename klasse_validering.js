/* javascript validering */

var fortsett = document.getElementById("fortsett");
var melding = document.getElementById("melding");
var klassekode = document.getElementById("klassekode");
var klassename = document.getElementById("klassename");

fortsett.onclick = function(event){
    if (!klassekode.value || !klassenavn.value){
        event.preventDefault();
        melding.innerHTML="<h5 style='color:red;'>Begge feltene må fylles ut!</h5>";
    }
}
