<?php
    $tBln= $_POST["tBln"];
    switch ($tBln) {
        case 1:
            $strBln= "Bulan Januari";
            break;
        case 2:
            $strBln= "Bulan Februari";
            break;
        case 3:
            $strBln= "Bulan Maret";
            break;
        case 4:
            $strBln= "Bulan April";
            break;
        case 5:
            $strBln= "Bulan Mey";
            break;
        case 6:
            $strBln= "Bulan Juni";
            break;
        case 7:
            $strBln= "Bulan Juli";
            break;
        case 8:
            $strBln= "Bulan Agustus";
            break;
        case 9:
            $strBln= "Bulan September";
            break;
        case 10:
            $strBln= "Bulan Oktober";
            break;
        case 11:
            $strBln= "Bulan November";
            break;
        case 12:
            $strBln= "Bulan Desember";
            break;
        default:
            $strBln = "Bukan bulan mas!!!....<br>";
            $strBln = $strBln . "Masukkan angka dari 1 sd 12 mas !!!!!";
        }
    echo "<h1>$tBln adalah $strBln<h1><br>";
    echo "<h2>Klik <a href='7inputSwitch.php'>disini</a> untuk kembali</h2>";
        
?>