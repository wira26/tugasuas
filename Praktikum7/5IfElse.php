<?php
    $tJK = $_POST['tJK'];
    $tNama = $_POST['tNama'];
    
    if(strtoupper($tJK)=="L")
    {
        $JK="Laki-laki";
    }
    else
    {
        $JK="Perempuan";
    }
    echo "<h1>Nama Anda : " . $tNama . "</h1><br>";
    echo "<h1>Jenis Kelamin Anda : " . $JK . "</h1><br>";  
    echo "<h2>Klik <a href='5inputifElse.php'>disini</a> untuk kembali</h2>";

?>