<?php
$value = "A-Zoel";
$value2 = "Zulkarnaen NS";
setcookie ("username", $value);
setcookie("Nama Lengkap", $value2, time()+3600); //Expire in 1 hour

if (isset($_COOKIE['username']))
{
	echo "<h1>Cookie username ada isinya " . 
	$_COOKIE['username'] . "</h1>";
}
else
{
	echo "<h1>Cookie yang bernama username TIDAK ADA</h1>";
}
?>