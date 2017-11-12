<?php

$sook = $_REQUEST["inp"];

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
            }
?>