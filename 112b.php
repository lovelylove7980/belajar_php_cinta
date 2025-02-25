<?php

// jika senin-selasa-rabu maka mengenakan seragam osis
// jika kamis, mengenakan seragam batik merah putih
// jika jumat, mengenakan seragam olahraga
// jika sabtu, mengenakan seragam pramuka 

$hari = "selasa";

if(
    $hari == "senin" || 
    $hari == "selasa" ||
    $hari == "rabu"
) {
    echo "$hari mengenakan seragam osis";
} else if ($hari == "kamis") {
    echo "$hari mengenakan seragam batik merah putih";
} else if ($hari == "jumat") {
    echo "$hari mengenakan seragam olahraga";
} else if ($hari == "sabtu") {
    echo "$hari mengenakan seragam pramuka";
} else {
    echo "$hari libur boss..";
}


$jam > date ("10:00") //lebih dari jam 10 :00                                        
$jam < date ("10:00") //kurang dari jam 10 :00 
// >= <= ini yg bnr 
?>
