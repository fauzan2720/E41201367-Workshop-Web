
<?php

$nim = "E41201367";
$nama = "Fauzan Abdillah";
$prodi = "D4 Teknik Informatika";
echo "Selamat Praktikum";
echo "<br>";
echo $nim;
echo "<br>";
echo $nama;
echo "<br>";
echo $prodi;
echo "<br>";

echo "------------------------------------<br>";

echo "Ini positive number: ";
$x = 5985; // positive number
var_dump($x);
echo "<br>";

echo "Ini negative number: ";
$x = -345; // negative number
var_dump($x);
echo "<br>";

echo "Ini hexadecimal number: ";
$x = 0x8C; // hexadecimal number
var_dump($x);
echo "<br>";

echo "Ini octal number: ";
$x = 037; // octal number
echo $x;
var_dump($x);
$x = 10.365;
var_dump($x);
echo "<br>";

$x = 2.4e3;
var_dump($x);
echo "<br>";

$x = 8E-5;
var_dump($x);
echo "<br>";
echo strlen("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world!");

?>