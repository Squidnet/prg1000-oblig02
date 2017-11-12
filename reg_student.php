<?php

include("top.html"); ?>


    <h2>Registering av student</h2>
    
    <form method="post" action="" id="innlev1" name="innlev1">
        
           <a style="color:black;">Brukernavn:</a><input type="text" id="brukernavn" name="brukernavn" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <a style="color:black;">Fornavn:</a><input type="text" id="fornavn" name="fornavn" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <a style="color:black;">Etternavn:</a><input type="text" id="etternavn" name="etternavn" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <a style="color:black;">Klassekode:</a><input onChange="ajax_kode()" onKeyUp="ajax_kode()" type="text" id="klassekode" name="klassekode" required onFocus="aktiv(this)" onBlur="ikke_aktiv(this)" onMouseover="hover(this)" onMouseOut="hover_stop()"><br>
           <input type="submit" value="Fortsett" id="fortsett" name="fortsett" alt="fortsett">
           <input type="reset" value="Nullstill" id="nullstill" name="nullstill" alt="nullstill" onClick="hover_stop()">
        
    </form>

    <div id="melding"></div>
    <div id="ajax"></div>

<script src="ajax.js"></script>
<script src="student_validering.js"></script>
    
<?php

if (isset($_POST["fortsett"])){

$filnavn="../../raw/student.txt";

$brukernavn=$_POST["brukernavn"];
$fornavn=$_POST["fornavn"];
$etternavn=$_POST["etternavn"];
$klassekode=$_POST["klassekode"];

if (!$brukernavn or !$fornavn or !$etternavn or !$klassekode){
    echo("Alle feltene må fylles ut!");}

else{   $mode = "a";
        $line = "\n" . $brukernavn . ";" . $fornavn . ";" . $etternavn . ";" . $klassekode;
        $file = fopen($filnavn, $mode);
        fwrite($file, $line);
        fclose($file);
        echo("$fornavn $etternavn ble lagret i student.txt!");}
}

include("bot.html");
        
?>