<?php

include("top.html");

?> <h2>Vis alle studenter</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a style="color:black;">Trykk for å vise alle studenter:</a><br>
           <input type="submit" value="Vis studenter" id="fortsett" name="fortsett" alt="vis studenter">
    
        
    </form>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/student.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", rtrim($innhold)));
    
}

    
foreach($deler as $navnDel){
    echo("<br> Brukernavn: $navnDel[0] <br> Fornavn: $navnDel[1] <br> Etternavn: $navnDel[2] <br> Klassekode: $navnDel[3] <br>");
}}

include("bot.html");
    
?>