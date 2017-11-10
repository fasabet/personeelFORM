<?php
$idfiler = fopen("idn.txt", "r");
$idnum= fread($idfiler,filesize("idn.txt"));
$idfilen=$idnum+1;
//echo $idfilen;
fclose($idfiler);
$idfilw=fopen("idn.txt", "w");
fprintf($idfilw, $idfilen);
fclose($idfilw); 
?>
