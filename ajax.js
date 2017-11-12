var klassekode = document.getElementById("klassekode");
var ajax_melding = document.getElementById("ajax");

function ajax_kode (){
    
var ajax = new XMLHttpRequest();

ajax.open("POST", "ajax.php?inp="+klassekode.value, true);

ajax.onreadystatechange = function(){
    if (this.readyState == 4 && this.status == 200){
        ajax_melding.innerHTML=this.responseText;
    }
}

ajax.send();
}