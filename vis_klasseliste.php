<?php

include("top.html");

?>    <h2>Vis klasseliste</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
    <a style="color:black;">Klassekode:</a><input type="text" id="klassekode" name="klassekode" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>    
    <input type="submit" value="Søk" id="fortsett" name="fortsett" alt="fortsett">
    <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill" onClick="hover_stop()">
        
    </form>

    <div id="melding"></div>

<script src="liste_validering.js"></script>

<?php
    
if (isset($_POST["fortsett"])){

$sook = $_POST["klassekode"];
    
if (!$sook)
echo("Du må skrive inn klassekode!");
    
else {

$filnavn="../../raw/klasse.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", $innhold));}
    
    $match = false;
    
    foreach($deler as $navnDel){
        if (strtoupper($navnDel[0]) == strtoupper($sook)){
            $match = true;}}
    
    //søk stemmer med klasser
    if($match){
        
        $filnavn="../../raw/student.txt";

        $mode = "r";
        $file = fopen($filnavn,$mode);
    
        $deler = array();
    
        while(!feof($file)){
            $innhold = fgets($file);
            array_push($deler,explode(";", rtrim($innhold)));}

    
            foreach($deler as $navnDel){
                if (strtoupper($navnDel[3]) == strtoupper($sook)){
                    echo("<br> Brukernavn: $navnDel[0] <br> Fornavn: $navnDel[1] <br> Etternavn: $navnDel[2] <br> Klassekode: $navnDel[3]<br>");
                }
               else {
                   
               } 
                
            }    
        
        
    }
    
    else {
        echo("Dette er ikke en gyldig klassekode!");
    }
    
    
    
}
    
}

include("bot.html");

    
?>