<?php

include("top.html"); ?>


    <h2>Vis alle klassser</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a style="color:black;">Trykk for å vise alle klasser:</a><br>
           <input type="submit" value="Vis klasser" id="fortsett" name="fortsett" alt="vis klasse">
    
        
    </form>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/klasse.txt";

$mode = "r";
$file = fopen($filnavn,$mode);
    
$deler = array();
    
while(!feof($file)){
    $innhold = fgets($file);
    array_push($deler,explode(";", rtrim($innhold)));
    
}

    
foreach($deler as $navnDel){
    echo("<br> Klassekode: $navnDel[0] <br> Klassenavn: $navnDel[1] <br>");
}}

include("bot.html");
    
?>