<?php
$value = 'KuroNeko';
$value2 = 'Raka Andriy Shevchenko';

setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600);

echo "<h1>Ini Halaman Pengesetan Cookie</h1>";
echo "<h2>Klik <a href='cookie02.php'>disini</a>Untuk Pemerikasaan Cookies</h2>";
?>