<?php
    $tBln = $_POST['tBln'];
    if($tBln==1)
    {
    $strBln= "Bulan Januari";
    }
    elseif($tBln==2)
    {
    $strBln= "Bulan Februari";
    }
    elseif($tBln==3)
    {
    $strBln= "Bulan Maret";
    }
    elseif($tBln==4)
    {
    $strBln= "Bulan April";
    }
    elseif($tBln==5)
    {
    $strBln= "Bulan Mei";
    }
    elseif($tBln==6)
    {
    $strBln= "Bulan Juni";
    }
    elseif($tBln==7)
    {
    $strBln= "Bulan Juli";
    }
    elseif($tBln==8)
    {
    $strBln= "Bulan Agustus";
    }
    elseif($tBln==9)
    {
    $strBln= "Bulan September";
    }
    elseif($tBln==10)
    {
    $strBln= "Bulan Oktober";
    }
    elseif($tBln==11)
    {
    $strBln= "Bulan November";
    }
    elseif($tBln==12)
    {
    $strBln= "Bulan Desember";
    }
    else
    {
        $strBln = "Bukan bulan mas!!!....<br>";
        $strBln = $strBln . "Masukkan angka dari 1 sd 12 mas !!!!!"; 
    }
    echo "<h1>$tBln adalah $strBln<h1><br>";
    echo "<h2>Klik <a href='inputifelsebulan.php'>disini</a> untuk kembali</h2>";

?>
