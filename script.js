/* javascript dokument */

function aktiv(element){
    element.style.backgroundColor="red";
}

function ikke_aktiv(element){
    element.style.backgroundColor="white";
}

function hover(element){
    document.getElementById("melding").style.color="blue";
    
    if(element==document.getElementById("klassekode")){
        document.getElementById("melding").innerHTML="<h5>Klassekoden kan kun bestå av 3 tegn.</h5>";
    }
    
    if(element==document.getElementById("klassenavn")){
        document.getElementById("melding").innerHTML="<h5>Vennligst fyll inn klassenavn.</h5>";
    }
    
    if(element==document.getElementById("brukernavn")){
        document.getElementById("melding").innerHTML="<h5>Vennligst fyll inn ønsket brukernavn.</h5>";
    }
    
    if(element==document.getElementById("fornavn")){
        document.getElementById("melding").innerHTML="<h5>Vennligst fyll inn fornavn.</h5>";
    }
    
    if(element==document.getElementById("etternavn")){
        document.getElementById("melding").innerHTML="<h5>Vennligst fyll inn etternavn.</h5>";
    }
    
}

function hover_stop(){
    document.getElementById("melding").innerHTML="";
}


/* js validering */

