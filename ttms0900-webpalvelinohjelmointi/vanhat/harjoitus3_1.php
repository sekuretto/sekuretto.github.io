<html>
<head>
    <meta charset="UTF-8">
    <title>Harjoitukset 3: Tehtävä 1</title>
</head>
<body>

<h3 style=background-color:#fed;color:#000>Autolaskuri</h3>
<?php
// autolaskuri-v1.php
 
// Pääohjelma

$vw_lkm = isset($_COOKIE['vw_lkm']) ? $_COOKIE['vw_lkm'] : 0;    
$opel_lkm = isset($_COOKIE['opel_lkm']) ? $_COOKIE['opel_lkm'] : 0;    
$painike = '';
 
if (isset($_POST['painike'])) {
   $vw_lkm   = $_COOKIE['vw_lkm'];
   $opel_lkm = $_COOKIE['opel_lkm'];
   $painike  = $_POST['painike'];
}

laske_lkm($vw_lkm, $opel_lkm, $painike);
aseta_evasteet($vw_lkm, $opel_lkm);
tee_lomake($vw_lkm, $opel_lkm);
nayta_tulokset($vw_lkm, $opel_lkm);
 
// Alustetaan tai päivitetään autojen lukumääriä:
// Muodolliset parametrit ovat viittauksia, joten
// muutetut arvot välittyvät "takaisin" kutsuvaan
// ohjelmalohkooon
function laske_lkm(&$vw_lkm, &$opel_lkm, $nappi) {
   // Jotakin autonappia painettu, lisätään kertymää
   if ($nappi == "VW") {
      $vw_lkm = $vw_lkm + 1;
   }
   elseif ($nappi == "Opel") {
      $opel_lkm = $opel_lkm + 1;
   }
   // Painettiin Nollaa-painiketta tai pyydetään sivua ekaa kertaa
   else {
      $vw_lkm = 0;
      $opel_lkm = 0;
   }
}

function aseta_evasteet($vw_lkm, $opel_lkm) {
    setcookie("vw_lkm", "$vw_lkm", time()+86400);
    setcookie("opel_lkm", "$opel_lkm", time()+86400);
}
 
function nayta_tulokset($vw_lkm, $opel_lkm) {
   echo "<pre>\n";
   echo "Volkswagenit ... : $vw_lkm kpl.\n";
   echo "Opelit ......... : $opel_lkm kpl.\n";
   echo "</pre>\n";
}
 
// Tehdään lomake piilokenttineen
function tee_lomake($vw_lkm, $opel_lkm) {
?>
   <!--
     Oleellista on pitää yllä _samassa_ lomakkeessa
     kaikkien autojen kertymiä
   -->
   <form method="post" action="<?php echo $_SERVER{'PHP_SELF'}?>">
   <input type="hidden"
   value="<?php echo "$vw_lkm"?>" name="vw_lkm">
   <input type="hidden"
   value="<?php echo "$opel_lkm"?>" name="opel_lkm">
 
   <!--
    Huomaa useat samannimiset painikkeet: Arvona välittyy
    *vain* sen painikkeen arvo, jota painettiin!
   -->
 
   <input type="submit" value="VW" name="painike">
   <input type="submit" value="Opel" name="painike">
   <input type="submit" value="Nollaa" name="painike">
   </form>
<?php
}
 
?>
    
</body>
</html>