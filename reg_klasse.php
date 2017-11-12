<?php

include("top.html"); ?>

<h2>Registering av klasser</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a style="color:black;">Klassekode:</a><input type="text" id="klassekode" name="klassekode" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <a style="color:black;">Klassenavn:</a><input type="text" id="klassenavn" name="klassenavn" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <input type="submit" value="Fortsett" id="fortsett" name="fortsett" alt="fortsett">
           <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill" onClick="hover_stop()">
        
    </form>

    <div id="melding"></div>

<script src="klasse_validering.js"></script>

<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/klasse.txt";

$klassekode=$_POST["klassekode"];
$klassenavn=$_POST["klassenavn"];

if (!$klassekode or !$klassenavn){
    echo("Begge feltene må fylles ut!");}

else{   $mode = "a";
        $line = "\n" . $klassekode . ";" . $klassenavn;
        $file = fopen($filnavn, $mode);
        fwrite($file, $line);
        fclose($file);
        echo("$klassenavn ble lagret i klasse.txt!");}
}

include("bot.html");
        
?>