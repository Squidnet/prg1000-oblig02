/* javascript validering */

var fortsett = document.getElementById("fortsett");
var melding = document.getElementById("melding");
var klassekode = document.getElementById("klassekode");

fortsett.onclick = function(event){
    if (!klassekode.value){
        event.preventDefault();
        melding.innerHTML="<h5 style='color:red;'>Feltet må fylles ut!</h5>";
    }
}
