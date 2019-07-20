<?php
$kalimat = "programmit";
echo substr($kalimat,0,3),($kalimat,3,7),($kalimat,7,9); // pro,gram,it
echo "<br>";
echo substr($kalimat,0,7),($kalimat,7,9); // program,it
?>

<?php
$kalimat = "programmerit"; // 12 angka
echo substr($kalimat,0,3),($kalimat,3,7),($kalimat,7,12); // pro,gram,merit
echo "<br>";
echo substr($kalimat,0,7),($kalimat,7,12); // program,merit
echo "<br>";
echo substr($kalimat,0,9),($kalimat,10,12); // progammer,it
?>